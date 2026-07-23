<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class MediaController extends Controller
{
    /**
     * Display a listing of the media files.
     */
    public function index(Request $request)
    {
        $query = Media::with('uploader')->latest();
        
        // Filter by file type
        if ($request->has('type') && $request->type !== 'all') {
            $query->where('file_type', $request->type);
        }
        
        // Search functionality
        if ($request->has('search') && $request->search) {
            $query->where(function($q) use ($request) {
                $q->where('filename', 'like', '%' . $request->search . '%')
                  ->orWhere('title', 'like', '%' . $request->search . '%')
                  ->orWhere('description', 'like', '%' . $request->search . '%');
            });
        }
        
        $media = $query->paginate(24);
        
        $stats = [
            'total' => Media::count(),
            'images' => Media::where('file_type', 'image')->count(),
            'videos' => Media::where('file_type', 'video')->count(),
            'documents' => Media::where('file_type', 'document')->count(),
            'audio' => Media::where('file_type', 'audio')->count(),
        ];
        
        return view('admin.media.index', compact('media', 'stats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.media.upload');
    }

    /**
     * Store a newly uploaded file.
     */
    public function store(Request $request)
    {
        $request->validate([
            'files.*' => 'required|file|max:51200', // 50MB max
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'alt_text' => 'nullable|string|max:255',
        ]);

        $uploadedFiles = [];
        
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $uploadedFiles[] = $this->processUpload($file, $request);
            }
        }

        // Handle AJAX requests
        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => count($uploadedFiles) . ' file(s) uploaded successfully!',
                'files' => $uploadedFiles
            ]);
        }

        // Handle regular form submissions
        if (count($uploadedFiles) === 1) {
            return redirect()->route('admin.media.show', $uploadedFiles[0])
                           ->with('success', 'File uploaded successfully!');
        }

        return redirect()->route('admin.media.index')
                       ->with('success', count($uploadedFiles) . ' files uploaded successfully!');
    }

    /**
     * Display the specified media file.
     */
    public function show(Media $medium)
    {
        $media = $medium; // Keep $media variable for view compatibility
        return view('admin.media.show', compact('media'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Media $medium)
    {
        $media = $medium; // Keep $media variable for view compatibility
        return view('admin.media.edit', compact('media'));
    }

    /**
     * Update the specified media file.
     */
    public function update(Request $request, Media $medium)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'alt_text' => 'nullable|string|max:255',
        ]);

        $medium->update($request->only(['title', 'description', 'alt_text']));

        return redirect()->route('admin.media.show', $medium)
                       ->with('success', 'Media updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Media $medium)
    {
        // Delete the physical file
        if (Storage::disk('public')->exists($medium->file_path)) {
            Storage::disk('public')->delete($medium->file_path);
        }

        // Delete the database record
        $medium->delete();

        // Handle AJAX requests
        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Media deleted successfully!'
            ]);
        }

        return redirect()->route('admin.media.index')
                       ->with('success', 'Media deleted successfully!');
    }

    /**
     * Bulk delete multiple media files
     */
    public function bulkDelete(Request $request)
    {
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'exists:media,id'
        ]);

        $deleted = 0;
        $errors = [];

        foreach ($request->ids as $id) {
            try {
                $media = Media::findOrFail($id);
                
                // Delete physical file
                if (Storage::disk('public')->exists($media->file_path)) {
                    Storage::disk('public')->delete($media->file_path);
                }
                
                // Delete database record
                $media->delete();
                $deleted++;
            } catch (\Exception $e) {
                $errors[] = "Failed to delete media ID: {$id}";
            }
        }

        if ($deleted > 0) {
            return response()->json([
                'success' => true,
                'deleted' => $deleted,
                'message' => "{$deleted} file(s) deleted successfully"
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'No files were deleted. ' . implode(', ', $errors)
            ], 400);
        }
    }

    /**
     * Process individual file upload
     */
    private function processUpload($file, $request)
    {
        $originalName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $mimeType = $file->getMimeType();
        $size = $file->getSize();
        
        // Generate descriptive filename instead of UUID
        $originalNameWithoutExt = pathinfo($originalName, PATHINFO_FILENAME);
        $cleanName = Str::slug($originalNameWithoutExt);
        $timestamp = now()->format('Y-m-d-H-i-s');
        $filename = $cleanName . '-' . $timestamp . '.' . $extension;
        
        // Determine file type
        $fileType = $this->determineFileType($mimeType);
        
        // Create directory structure: uploads/year/month/
        $directory = 'uploads/' . date('Y') . '/' . date('m');
        
        // Store the file
        $path = $file->storeAs($directory, $filename, 'public');
        $url = Storage::disk('public')->url($path);
        
        // Get metadata
        $metadata = $this->getFileMetadata($file, $fileType);
        
        // Create database record
        $media = Media::create([
            'filename' => $originalName,
            'title' => $request->title ?: pathinfo($originalName, PATHINFO_FILENAME),
            'description' => $request->description,
            'file_path' => $path,
            'file_url' => $url,
            'mime_type' => $mimeType,
            'file_type' => $fileType,
            'file_size' => $size,
            'metadata' => $metadata,
            'alt_text' => $request->alt_text,
            'uploaded_by' => auth()->id(),
            'is_public' => true,
        ]);

        return $media;
    }

    /**
     * Determine file type based on MIME type
     */
    private function determineFileType($mimeType)
    {
        if (str_starts_with($mimeType, 'image/')) {
            return 'image';
        } elseif (str_starts_with($mimeType, 'video/')) {
            return 'video';
        } elseif (str_starts_with($mimeType, 'audio/')) {
            return 'audio';
        } else {
            return 'document';
        }
    }

    /**
     * Get file metadata
     */
    private function getFileMetadata($file, $fileType)
    {
        $metadata = [];
        
        if ($fileType === 'image') {
            try {
                $imageSize = getimagesize($file->getPathname());
                if ($imageSize) {
                    $metadata['width'] = $imageSize[0];
                    $metadata['height'] = $imageSize[1];
                }
            } catch (\Exception $e) {
                // Handle error silently
            }
        }
        
        return $metadata;
    }

    /**
     * API endpoint for media picker
     */
    public function api(Request $request)
    {
        $query = Media::latest();
        
        if ($request->has('type') && $request->type !== 'all') {
            $query->where('file_type', $request->type);
        }
        
        if ($request->has('search') && $request->search) {
            $query->where('filename', 'like', '%' . $request->search . '%');
        }
        
        $media = $query->paginate(12);
        
        return response()->json($media);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of contacts
     */
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->paginate(20);
        $unreadCount = Contact::unread()->count();

        return view('admin.contacts.index', compact('contacts', 'unreadCount'));
    }

    /**
     * Display the specified contact
     */
    public function show(Contact $contact)
    {
        // Mark as read when viewed
        if (!$contact->is_read) {
            $contact->markAsRead();
        }

        return view('admin.contacts.show', compact('contact'));
    }

    /**
     * Remove the specified contact from storage
     */
    public function destroy(Contact $contact)
    {
        try {
            $contact->delete();
            return redirect()->route('admin.contacts.index')
                ->with('success', 'Contact deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('admin.contacts.index')
                ->with('error', 'Error deleting contact.');
        }
    }

    /**
     * Mark contact as read
     */
    public function markAsRead(Contact $contact)
    {
        $contact->markAsRead();
        return redirect()->back()->with('success', 'Contact marked as read.');
    }

    /**
     * Mark contact as unread
     */
    public function markAsUnread(Contact $contact)
    {
        $contact->markAsUnread();
        return redirect()->back()->with('success', 'Contact marked as unread.');
    }

    /**
     * Bulk delete contacts
     */
    public function bulkDelete(Request $request)
    {
        $ids = $request->input('ids', []);
        
        if (empty($ids)) {
            return response()->json(['success' => false, 'message' => 'No contacts selected.']);
        }

        try {
            Contact::whereIn('id', $ids)->delete();
            return response()->json(['success' => true, 'message' => 'Contacts deleted successfully.']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Error deleting contacts.']);
        }
    }
}

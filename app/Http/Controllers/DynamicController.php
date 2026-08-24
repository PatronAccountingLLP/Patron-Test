<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\NicCodeContent;
use App\Models\PortCodeContent;
use App\Models\HSNCodeData;
use App\Models\IncomeTaxDepreciationRate;
use App\Models\AccountingStandard;
use Illuminate\Support\Str;

class DynamicController extends Controller
{
    /**
     * Force a directory slug into a single URL-safe path segment.
     *
     * These code tables are bulk-imported, and some rows carry the branch's postal
     * address or leaked anchor markup in the slug column instead of a code. Once
     * linked, each one becomes a permanently crawlable junk URL -- /hsn-code/4802 / 4
     * and /5,Municipalbuilding,Railwaystationsquare,Alwaye,Ernakulampin are both live
     * examples. Slugs that are already clean are returned byte-for-byte unchanged, so
     * this never rewrites a URL that is currently working; only broken ones move.
     * Returns null when nothing usable survives, so the caller can skip the row.
     */
    protected function safeSlugSegment(?string $slug): ?string
    {
        $slug = trim((string) $slug);

        if ($slug !== '' && preg_match('/^[A-Za-z0-9\-]+$/', $slug)) {
            return $slug;
        }

        $normalised = Str::slug($slug);

        return $normalised === '' ? null : $normalised;
    }

    public function UpdateSlug()
    {
        NicCodeContent::chunk(500, function ($niccodecontents) {
            foreach ($niccodecontents as $content) {

                $fullSlug = $content->slug;
                $slugParts = explode('/', $fullSlug);

                // Extract second segment, else fallback to full slug
                $slug = $slugParts[1] ?? $fullSlug;

                // Update slug only if needed (optional optimization)
                if ($content->slug !== $slug) {
                    $content->slug = $slug;
                    $content->save();
                }
            }
        });

        return 'Slug updated successfully with chunking';
    }

    public function nicloadcontent($slug, $subclsss)
    {
        // Cache the content view for faster loading
        $cacheKey = 'nic_content_' . md5($slug . '_' . $subclsss);
        
        $content = Cache::remember($cacheKey, 60 * 60 * 24, function () use ($slug, $subclsss) {
            return NicCodeContent::where('slug', $slug)->where('SubClass', $subclsss)->first();
        });
        
        if (!$content) {
            abort(404);
        }
        
        return view('frontend.pages.nicloadcontent', compact('content'));
    }
    
    /**
     * Clear all NIC code caches
     */
    public function clearNicCache()
    {
        try {
            // Clear all cache keys that start with 'nic_code_' or 'nic_content_'
            Cache::flush(); // This will clear all cache, you can be more specific if needed
            return response()->json([
                'success' => true,
                'message' => 'NIC Code cache cleared successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error clearing cache: ' . $e->getMessage()
            ], 500);
        }
    }

    public function searchNicCodes(Request $request)
    {
        try {
            $searchTerm = $request->input('search', '');
            
            // Generate cache key based on search term
            $cacheKey = 'nic_code_search_' . md5(strtolower(trim($searchTerm)));
            
            // Cache duration: 24 hours for empty search, 12 hours for specific searches
            $cacheDuration = empty($searchTerm) ? 60 * 60 * 24 : 60 * 60 * 12; // 24 hours or 12 hours
            
            // Use cache to store and retrieve results
            $data = Cache::remember($cacheKey, $cacheDuration, function () use ($searchTerm) {
                if (empty($searchTerm)) {
                    // If search is empty, return limited results or all
                    $results = NicCodeContent::select('Class', 'slug', 'SubClass', 'FullDescription')
                        ->limit(100)
                        ->get();
                } else {
                    // Search in Class, SubClass, and FullDescription
                    $results = NicCodeContent::where(function($query) use ($searchTerm) {
                            $query->where('Class', 'LIKE', '%' . $searchTerm . '%')
                                  ->orWhere('SubClass', 'LIKE', '%' . $searchTerm . '%')
                                  ->orWhere('FullDescription', 'LIKE', '%' . $searchTerm . '%');
                        })
                        ->select('Class', 'slug', 'SubClass', 'FullDescription')
                        ->limit(500)
                        ->get();
                }

                // Convert to array and ensure proper format
                return $results->map(function($item) {
                    return [
                        'Class' => $item->Class ?? $item->class ?? '',
                        'SubClass' => $item->SubClass ?? $item->subclass ?? '',
                        'slug' => $item->slug ?? $item->slug ?? '',
                        'FullDescription' => $item->FullDescription ?? $item->fullDescription ?? $item->full_description ?? ''
                    ];
                })->toArray();
            });

            return response()->json([
                'success' => true,
                'data' => $data,
                'count' => count($data),
                'cached' => Cache::has($cacheKey)
            ]);
        } catch (\Exception $e) {
            \Log::error('NIC Search Error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Error: ' . $e->getMessage(),
                'data' => []
            ], 500);
        }
    }

    // The IFSC methods lived here: updateIfscSlug, ifscloadcontent and
    // searchIfscCodes. Removed 2026-08-24 with the directory itself.
    //
    // /ifsc-code/{path?} answers 410 for every shape from routes/web.php, so
    // nothing reached these and nothing rendered
    // resources/views/frontend/pages/ifscloadcontent.blade.php, which is deleted
    // in the same change. The ifsc_code_* table is deliberately kept - the 410
    // comes from the route, the data is never queried, and dropping ~170k rows
    // is the one step here that could not be undone.
    
    // PORT CODE =========
    public function updatePortSlug()
    {
        try {
            $portcodecontents = PortCodeContent::get();
            foreach ($portcodecontents as $content) {
                $fullSlug = $content->Slug;
                $slugParts = explode('/', $fullSlug);
                $slug = $slugParts[0] ?? $fullSlug;
                if ($content->slug !== $slug) {
                    $content->slug = $slug;
                    $content->save();
                }
            }
            return response()->json([
                'success' => true,
                'message' => 'Port code slug updated successfully with chunking'
            ]);
        } catch (\Exception $e) {
            \Log::error('Port Code Slug Update Error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Error: ' . $e->getMessage(),
                'data' => []
            ], 500);
        }
    }

    public function portloadcontent($slug, $portcode)
    {
        $portcode = $portcode;
        $slug = $slug;
        
        // Cache the content view for faster loading
        $cacheKey = 'port_content_' . md5($slug . '_' . $portcode);
        // return "hello";
        // return PortCodeContent::get();
        
        $content = Cache::remember($cacheKey, 60 * 60 * 24, function () use ($slug, $portcode) {
            return PortCodeContent::where('Slug', $slug)->where('Portcode', $portcode)->first();
        });
        
        
        if (!$content) {
            abort(404);
        }
        
        return view('frontend.pages.portloadcontent', compact('content', 'slug', 'portcode'));
    }

    public function searchPortCodes(Request $request)
    {
        try {
            $searchTerm = $request->input('search', '');
            $cacheKey = 'port_code_search_' . md5(strtolower(trim($searchTerm)));
            $cacheDuration = empty($searchTerm) ? 60 * 60 * 24 : 60 * 60 * 12;
            $data = Cache::remember($cacheKey, $cacheDuration, function () use ($searchTerm) {
                if (empty($searchTerm)) {
                    $results = PortCodeContent::select('Portcode', 'Slug')
                        ->limit(100)
                        ->get();
                } else {
                    $results = PortCodeContent::where(function($query) use ($searchTerm) {
                            $query->where('Portcode', 'LIKE', '%' . $searchTerm . '%')
                            ->orWhere('Zone', 'LIKE', '%' . $searchTerm . '%')
                            ->orWhere('NameofStation', 'LIKE', '%' . $searchTerm . '%')
                            ->orWhere('State', 'LIKE', '%' . $searchTerm . '%');
                        })
                        ->select('Portcode', 'Zone', 'Slug','State','NameofStation')
                        ->limit(500)
                        ->get();
                }
                return $results->map(function($item) {
                    return [
                        'Portcode' => $item->Portcode ?? '',
                        'Zone' => $item->Zone ?? '',
                        'Slug' => $item->Slug ?? '',
                        'NameofStation' => $item->NameofStation ?? '',
                        'State' => $item->State ?? ''
                    ];
                })->toArray();
            });
            return response()->json([
                'success' => true,
                'data' => $data,
                'count' => count($data),
                'cached' => Cache::has($cacheKey)
            ]);
        } catch (\Exception $e) {
                return response()->json([
                'success' => false,
                'message' => 'Error: ' . $e->getMessage(),
                'data' => []
            ], 500);
        }   
    }
        public function updateHsnSlug()
    {
        try {
                HSNCodeData::chunk(1000, function ($hsncontents) {
                    foreach ($hsncontents as $content) {
                        $fullSlug = $content->slug;
                        $slugParts = explode('/', $fullSlug);
                        $slug = $slugParts[1] ?? $fullSlug;

                        $slug = $this->safeSlugSegment($slug);
                        if ($slug === null) {
                            continue;
                        }

                        if ($content->slug !== $slug) {
                            $content->slug = $slug;
                            $content->save();
                        }
                    }
                });
            
            return response()->json([
                'success' => true,
                'message' => 'HSN Code slug updated successfully with chunking'
            ]);
        } catch (\Exception $e) {
            \Log::error('HSN Code Slug Update Error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Error: ' . $e->getMessage(),
                'data' => []
            ], 500);
        }
    }

    public function hsnloadcontent($slug)
    {
        
       try {
        $slug = $slug;
        // Cache the content view for faster loading
        $cacheKey = 'hsn_content_' . md5($slug);
        $content = Cache::remember($cacheKey,600, function () use ($slug) {
            return HSNCodeData::where('slug', $slug)->first();
        });
        if (!$content) {
            abort(404);
        }
        $body = Cache::remember('hsn_body_' . md5($slug), 600, function () use ($content) {
            return $this->unlinkDeadHsnLinks((string) ($content->content ?? ''));
        });
        return view('frontend.pages.hsnloadcontent', compact('content', 'slug', 'body'));
        } catch (\Exception $e) {
            \Log::error('HSN Code Load Content Error: ' . $e->getMessage());
            abort(404);
        }
    }

    /**
     * Unlink the dead codes in the stored "HSN Codes under Chapter NN" table.
     *
     * That table is part of the article body in hsn_code_data.content, not template
     * markup, and it was built from the tariff code range rather than from pages that
     * exist. On /hsn-code/48191010, three of its ten links return 410 and the rest 200.
     *
     * The table itself is useful, so only the anchors are removed - the code stays as
     * plain text and the row keeps its description and GST rates. A link is kept only
     * when the code both has a row and is not on the retirement list; retired codes
     * still have rows, so the row check alone would miss them, and a code with no row
     * at all is the 404 case that "exclude the retired list" would have left behind.
     *
     * One whereIn covers every code in the page, and the result is cached with the body.
     */
    private function unlinkDeadHsnLinks(string $html): string
    {
        if ($html === '' || stripos($html, '/hsn-code/') === false) {
            return $html;
        }

        $anchor = '~<a\b[^>]*\bhref="[^"]*/hsn-code/(\d+)"[^>]*>(.*?)</a>~is';
        if (!preg_match_all($anchor, $html, $matches) || empty($matches[1])) {
            return $html;
        }

        $codes = array_values(array_unique($matches[1]));

        try {
            $present = HSNCodeData::whereIn('slug', $codes)->pluck('slug')->all();
        } catch (\Throwable $e) {
            // If the lookup fails there is no way to tell live from dead. Leaving the
            // body untouched shows a stale link; guessing could unlink a working page.
            \Log::warning('HSN sibling unlink skipped: ' . $e->getMessage());
            return $html;
        }

        $present = array_flip(array_map('strval', $present));
        $retired = $this->retiredHsnCodes();

        $out = preg_replace_callback($anchor, function (array $m) use ($present, $retired) {
            $code = $m[1];
            $live = isset($present[$code]) && !isset($retired[$code]);
            return $live ? $m[0] : $m[2];   // keep the link, or drop to its own text
        }, $html);

        return $out ?? $html;
    }

    /** @return array<string|int,mixed> the 410 list, keyed by code */
    private function retiredHsnCodes(): array
    {
        static $retired = null;
        if ($retired === null) {
            $path = resource_path('retired/hsn-410-codes.php');
            $retired = is_file($path) ? (array) require $path : [];
        }
        return $retired;
    }

    public function searchHsnCodes(Request $request)
    {
        try {
            $searchTerm = $request->input('search', '');
            $cacheKey = 'hsn_code_search_' . md5(strtolower(trim($searchTerm)));
            $cacheDuration = empty($searchTerm) ?120 : 60;
            $data = Cache::remember($cacheKey, $cacheDuration, function () use ($searchTerm) {
                if (empty($searchTerm)) {
                    $results = HsnCodeData::select('HSNCode', 'ChapterName', 'slug','HSNDescription','SGST_UTGST','IGST','Units')
                        ->limit(100)
                        ->get();
                } else {
                    $results = HsnCodeData::where(function($query) use ($searchTerm) {
                        $query->where('ChapterName', 'LIKE', '%' . $searchTerm . '%')
                            ->orWhere('HSNCode', 'LIKE', '%' . $searchTerm . '%')
                            ->orWhere('HSNDescription', 'LIKE', '%' . $searchTerm . '%')
                            ->orWhere('SGST_UTGST', 'LIKE', '%' . $searchTerm . '%')
                            ->orWhere('IGST', 'LIKE', '%' . $searchTerm . '%')
                            ->orWhere('Units', 'LIKE', '%' . $searchTerm . '%');

                        })
                        ->select('HSNCode', 'ChapterName', 'slug','HSNDescription','SGST_UTGST','IGST','Units')
                        ->limit(500)
                        ->get();
                }
                return $results->map(function($item) {
                    return [
                        'HSNCode' => $item->HSNCode ?? '',
                        'ChapterName' => $item->ChapterName ?? '',
                        'Slug' => $item->slug ?? '',
                        'HSNDescription'=>$item->HSNDescription??'',
                        'SGST_UTGST'=>$item->SGST_UTGST??'',
                        'IGST'=>$item->IGST??'',
                        'Units'=>$item->Units??''
                    ];
                })->toArray();
            });
            return response()->json([
                'success' => true,
                'data' => $data,
                'count' => count($data),
                'cached' => Cache::has($cacheKey)
            ]);
        } catch (\Exception $e) {
            \Log::error('HSN Code Search Error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Error: ' . $e->getMessage(),
                'data' => []
            ], 500);
        }
    }
    
    public function updateIncomeTaxDepreciationRateSlug(){
        try {
            IncomeTaxDepreciationRate::chunk(1000, function ($incomeTaxDepreciationRateContents) {
                foreach ($incomeTaxDepreciationRateContents as $content) {
                    $fullSlug = $content->slug;
                    $slugParts = explode('/', $fullSlug);
                    $slug = $slugParts[1] ?? $fullSlug;
                    if ($content->slug !== $slug) {
                        $content->slug = $slug;
                        $content->save();
                    }
                }
            });
        } catch (\Exception $e) {
            \Log::error('Income Tax Depreciation Rate Slug Update Error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Error: ' . $e->getMessage(),
                'data' => []
            ], 500);
        }
    }

    public function incomeTaxDepreciationRateLoadContent($slug){
        try {
            $slug = $slug;
            $cacheKey = 'income_tax_depreciation_rate_content_' . md5($slug);
            $content = Cache::remember($cacheKey,600, function () use ($slug) {
                return IncomeTaxDepreciationRate::where('slug', $slug)->first();
            });
            if (!$content) {
                abort(404);
            }
            return view('frontend.pages.IncomeTaxDepreciationRateLoadContent', compact('content', 'slug'));
        }
        catch (\Exception $e) {
            \Log::error('Income Tax Depreciation Rate Load Content Error: ' . $e->getMessage());
            abort(404);
        }
    }

    public function searchIncomeTaxDepreciationRateCodes(Request $request){
        try {
            $searchTerm = $request->input('search', '');
            $cacheKey = 'income_tax_depreciation_rate_code_search_' . md5(strtolower(trim($searchTerm)));
            $cacheDuration = empty($searchTerm) ?120 : 60;
            $data = Cache::remember($cacheKey, $cacheDuration, function () use ($searchTerm) {
                if (empty($searchTerm)) {
                    $results = IncomeTaxDepreciationRate::select('Asset', 'Rate', 'slug')
                                ->limit(100)
                        ->get();
                } else {   
                    $results = IncomeTaxDepreciationRate::where(function($query) use ($searchTerm) {
                        $query->where('Asset', 'LIKE', '%' . $searchTerm . '%')
                            ->orWhere('Rate', 'LIKE', '%' . $searchTerm . '%');
                    })
                    ->select('Asset', 'Rate', 'slug')
                    ->limit(500)
                    ->get();
                }
                return $results->map(function($item) {
                    return [
                        'Asset' => $item->Asset ?? '',
                        'Rate' => $item->Rate ?? '',
                        'Slug' => $item->slug ?? ''
                    ];
                })->toArray();
            });
            return response()->json([
                'success' => true,
                'data' => $data,
                'count' => count($data),
                'cached' => Cache::has($cacheKey)
            ]);
        } catch (\Exception $e) {
            \Log::error('Income Tax Depreciation Rate Code Search Error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Error: ' . $e->getMessage(),
                'data' => []
            ], 500);
        }
    }

    //  Accounting Standards 

    public function accountingStandardLoadContent($slug){
    try {
        $cacheKey = 'accounting_standard_content_' . md5($slug);

        $content = Cache::remember($cacheKey, 600, function () use ($slug) {
            return AccountingStandard::where('slug', $slug)->first();
        });

        if (!$content) {
            abort(404);
        }

        return view('frontend.pages.accountingStandardLoadContent', compact('content', 'slug'));

    } catch (\Exception $e) {
        \Log::error('Accounting Standard Load Content Error: ' . $e->getMessage());
        abort(404);
    }
}
public function searchAccountingStandardCodes(Request $request){
    try {
        $searchTerm = $request->input('search', '');

        $cacheKey = 'accounting_standard_search_' . md5(strtolower(trim($searchTerm)));
        $cacheDuration = empty($searchTerm) ? 120 : 60;

        $data = Cache::remember($cacheKey, $cacheDuration, function () use ($searchTerm) {

            if (empty($searchTerm)) {
                $results = AccountingStandard::select('std_name', 'std_no', 'slug')
                            ->limit(100)
                            ->get();
            } else {
                $results = AccountingStandard::where(function($query) use ($searchTerm) {
                        $query->where('std_name', 'LIKE', '%' . $searchTerm . '%')
                              ->orWhere('std_no', 'LIKE', '%' . $searchTerm . '%')
                              ->orWhere('std_type', 'LIKE', '%' . $searchTerm . '%')
                              ->orWhere('category', 'LIKE', '%' . $searchTerm . '%');
                    })
                    ->select('std_name', 'std_no', 'slug')
                    ->limit(500)
                    ->get();
            }

            return $results->map(function($item) {
                return [
                    'Standard Name' => $item->std_name ?? '',
                    'Standard No'   => $item->std_no ?? '',
                    'Slug'          => $item->slug ?? ''
                ];
            })->toArray();
        });

        return response()->json([
            'success' => true,
            'data' => $data,
            'count' => count($data),
            'cached' => Cache::has($cacheKey)
        ]);

    } catch (\Exception $e) {
        \Log::error('Accounting Standard Search Error: ' . $e->getMessage());
        return response()->json([
            'success' => false,
            'message' => 'Error: ' . $e->getMessage(),
            'data' => []
        ], 500);
    }
}

}

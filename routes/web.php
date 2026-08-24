<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\PostCategoryController as AdminPostCategoryController;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Admin\PageCategoryController as AdminPageCategoryController;
use App\Http\Controllers\Admin\MenuController as AdminMenuController;
use App\Http\Controllers\Admin\MediaController as AdminMediaController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\DynamicController;
use App\Http\Controllers\DocFileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Frontend Routes
Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');

// Accounting Cluster 301 redirects (must precede page/city routes so old paths 301 instead of rendering)
require __DIR__.'/accounting-cluster-redirects.php';
require __DIR__.'/networth-cluster-redirects.php';
require __DIR__.'/stock-audit-cluster-redirects.php';

// ============ Glossary: master hub + Accounting hub + 140 term pages ============
Route::get('/glossary', function () {
    return view('glossary.index');
})->name('glossary.index');
Route::get('/glossary/accounting', function () {
    return view('glossary.accounting');
})->name('glossary.accounting');
Route::get('/glossary/accounting/{slug}', function ($slug) {
    abort_unless(view()->exists('glossary.accounting.' . $slug), 404);
    return view('glossary.accounting.' . $slug);
})->where('slug', '[a-z0-9\-]+')->name('glossary.term');

// Net Worth & Solvency glossary. Mirrors the accounting glossary block above it.
// Without this every one of the 48 term pages and the hub 404s: nothing resolves
// glossary views implicitly.
Route::get('/glossary/networth', function () {
    return view('glossary.networth');
})->name('glossary.networth');
Route::get('/glossary/networth/{slug}', function ($slug) {
    abort_unless(view()->exists('glossary.networth.' . $slug), 404);
    return view('glossary.networth.' . $slug);
})->where('slug', '[a-z0-9\-]+')->name('glossary.networth.term');

// Stock Audit glossary. Mirrors the accounting and networth blocks above it: nothing in
// this app resolves a glossary view implicitly, so without these the hub and all 70 term
// pages 404.
Route::get('/glossary/stock-audit', function () {
    return view('glossary.stock-audit');
})->name('glossary.stockaudit');
Route::get('/glossary/stock-audit/{slug}', function ($slug) {
    abort_unless(view()->exists('glossary.stock-audit.' . $slug), 404);
    return view('glossary.stock-audit.' . $slug);
})->where('slug', '[a-z0-9\-]+')->name('glossary.stockaudit.term');

/*
 * Header/Footer assets served via app code.
 * The live public/ web root is a SEPARATE folder that does not receive deploys,
 * so static files in public/ (patron-logo.webp, search-index.json) 404 on production.
 * Serving them through these routes makes them deploy with the app code instead.
 * If the static files are ever placed in the live public/ root, the web server
 * serves those directly and these routes are simply bypassed (harmless).
 */
Route::get('/search-index.json', function () {
    $path = resource_path('data/search-index.json');
    abort_unless(file_exists($path), 404);
    return response(file_get_contents($path), 200, [
        'Content-Type'  => 'application/json; charset=utf-8',
        'Cache-Control' => 'public, max-age=3600',
    ]);
})->name('search-index');

Route::get('/images/patron-logo.webp', function () {
    $path = resource_path('data/patron-logo.webp');
    abort_unless(file_exists($path), 404);
    return response(file_get_contents($path), 200, [
        'Content-Type'  => 'image/webp',
        'Cache-Control' => 'public, max-age=604800',
    ]);
})->name('patron-logo');

/*
 * Tools Hub SPA bundle (tools-hub.html + tools-cat-c0..c10.js) served via app code.
 * The /tools page iframes /tools-hub/tools-hub.html, which loads the cat-js files.
 * These live in resources/data so they deploy with the app (the live public/ web
 * root is separate and does not receive deploys). If the files are also present in
 * the live public/ root, the web server serves them directly and this route is bypassed.
 */
Route::get('/tools-hub/{file}', function (\Illuminate\Http\Request $request, $file) {
    $allowed = ['tools-hub.html'];
    for ($i = 0; $i <= 10; $i++) { $allowed[] = "tools-cat-c{$i}.js"; }
    abort_unless(in_array($file, $allowed, true), 404);
    $path = resource_path('data/tools-hub/' . $file);
    abort_unless(file_exists($path), 404);
    $type = str_ends_with($file, '.html')
        ? 'text/html; charset=utf-8'
        : 'application/javascript; charset=utf-8';
    // Revalidate on every load (ETag) instead of a 24h hard cache, so tool/slug
    // changes in the bundle propagate immediately. Unchanged files return a cheap
    // 304; this avoids the stale-embed problem after a tool is renamed/added/moved.
    $resp = response(file_get_contents($path), 200, [
        'Content-Type'  => $type,
        'Cache-Control' => 'public, no-cache, must-revalidate',
    ]);
    $resp->setEtag(md5_file($path));
    $resp->isNotModified($request);   // turns into a 304 when If-None-Match matches
    return $resp;
})->where('file', '[A-Za-z0-9._-]+')->name('tools-hub-asset');

Route::get('/roc-fee-calculator', function () {
    return view('cal.roc-calculator');
});


Route::get('/disclaimer', function () {
    return view('frontend.pages.disclaimer');
})->name('disclaimer');
Route::get('/cookie-policy', function () {
    return view('frontend.pages.cookie-policy');
})->name('cookie-policy');

Route::get('/meet-our-founder', function () {
    return view('frontend.pages.meet-our-founder');
})->name('meet-our-founder');

Route::get('/partner-with-us', function () {
    return view('frontend.pages.partner-with-us');
})->name('partner-with-us');


Route::get('/refer-and-earn', function () {
    return view('frontend.pages.refer-and-earn');
})->name('refer-and-earn');

Route::get('/cancellation-and-refund', function () {
    return view('frontend.pages.cancellation-and-refund');
})->name('cancellation-and-refund');

Route::get('/career', function () {
    return view('frontend.pages.career');
})->name('career');
Route::get('/authorhub/ca-puja-pradhan', [App\Http\Controllers\FrontendController::class, 'caAuthor'])
    ->name('frontend.caPuja.show');
Route::get('/authorhub/ca-sundram-gupta', [App\Http\Controllers\FrontendController::class, 'caSundram'])
    ->name('frontend.caSundram.show');
Route::get('/tools', function () {
    return view('frontend.pages.tools-hub');
})->name('tools');


Route::get('/tools/gst-return-due-date-tracker', function () {
    return view('tools.gst-return-due-date-tracker');
})->name('gst-return-due-date-tracker');

// Route::get('/gstat-appeal-filing', function () {
//     return view('frontend.pages.gstat-appeal-filing');
// })->name('gstat-appeal-filing');

// 301s: consolidate the IEPF tool under /tools/iepf-unclaimed-shares-checker (keeps link equity)
Route::get('/tools/settlement-fund-lookup', function () {
    return redirect('/tools/iepf-unclaimed-shares-checker', 301);
});
Route::get('/tools/iepf-search', function () {
    return redirect('/tools/iepf-unclaimed-shares-checker', 301);
});

Route::get('/tools/{slug}', function ($slug) {
    if (view()->exists('cal.' . $slug)) {
        return view('cal.' . $slug);
    }
    abort(404);
});

Route::get('/storage/{path}', function ($path) {
    $fullPath = storage_path('app/public/' . $path);

    if (!file_exists($fullPath)) {
        abort(404);
    }

    return response()->file($fullPath);
})->where('path', '.*');

// Company Registration Form Route
Route::post('/company-registration', [FrontendController::class, 'handleRegistration'])->name('frontend.company-registration');

// NOC Registration Form Route
Route::post('/noc-registration', [FrontendController::class, 'storeNocRegistration'])->name('frontend.noc-registration');

// NOC Certificate PDF Download Route
Route::post('/noc-certificate-download', [FrontendController::class, 'downloadNocCertificate'])->name('frontend.noc-certificate-download');

// Mail Test Route (temporary)
Route::get('/test-mail', function () {
    try {
        Mail::raw('Test email from Patron Accounting LLP Laravel application. SMTP setup is working correctly!', function ($message) {
            $message->to('patronpuneseo@gmail.com')
                   ->subject('Laravel SMTP Test - Patron Accounting LLP')
                   ->from('patronpuneseo@gmail.com', 'Patron Accounting LLP');
        });
        return 'Mail sent successfully! Check your inbox at patronpuneseo@gmail.com';
    } catch (Exception $e) {
        return 'Mail error: ' . $e->getMessage();
    }
})->name('test.mail');

// Registration Page
Route::get('/registration', [FrontendController::class, 'registration'])
    ->name('frontend.registration');

// About Us New Page
Route::get('/about-us', [FrontendController::class, 'aboutUsNew'])
    ->name('frontend.aboutusnew');

// Debug route to check pages (temporary - remove in production)
Route::get('/debug-pages', function () {
    $pages = App\Models\Page::latest()->take(5)->get(['id', 'title', 'slug', 'status', 'published_at']);
    return response()->json($pages);
});

// Development Testing Routes
Route::get('/test-category/{slug}', function ($slug) {
    $category = App\Models\PostCategory::where('slug', $slug)->firstOrFail();
    $allPosts = App\Models\Post::published()->count();
    $categoryPosts = $category->publishedPosts()->count();
    $categoryPostTitles = $category->publishedPosts()->pluck('title')->toArray();
    
    return response()->json([
        'category' => $category->name,
        'total_published_posts' => $allPosts,
        'posts_in_category' => $categoryPosts,
        'post_titles' => $categoryPostTitles
    ]);
})->name('test.category');

// Email Preview Routes (for development only)
Route::get('/email-preview/confirmation', function () {
    $registrationData = [
        'email' => 'john.doe@example.com',
        'mobile' => '9876543210',
        'location' => 'Mumbai, 400001'
    ];
    return new App\Mail\CompanyRegistrationMail($registrationData, 'confirmation');
})->name('email.preview.confirmation');

Route::get('/email-preview/admin', function () {
    $registrationData = [
        'email' => 'john.doe@example.com',
        'mobile' => '9876543210',
        'location' => 'Mumbai, 400001'
    ];
    return new App\Mail\CompanyRegistrationMail($registrationData, 'admin');
})->name('email.preview.admin');

// Posts Routes
Route::get('/blog', [FrontendController::class, 'posts'])->name('frontend.posts.index');

Route::get('/authorhub/{author_slug}', [App\Http\Controllers\FrontendController::class, 'authorhub'])
    ->name('frontend.authorhub.show');

// Contact Routes
// /contact-us is the single canonical contact URL. It is a DB-driven page served
// by the root catch-all further down, so there is no GET route for it here.
//
// /contact and /contact-page both 301 to it. Before this, /contact-page carried
// 1,712 impressions and the sitemap entry while /contact carried the internal
// links and 5 impressions -- two self-canonicalising pages splitting one intent.
//
// POST stays on /contact: the live enquiry form posts to action="/contact", and
// store() finishes with redirect()->back(), which lands on /contact-us anyway.
//
// routes/accounting-cluster-redirects.php used to 301 /contact-us -> /contact,
// added 2026-08-11 when /contact-us was a 404. It is removed in this same change:
// left in place it would loop against the redirects below and take the page down.
Route::get('/contact-us', [FrontendController::class, 'contactUs'])->name('contact-us');
Route::redirect('/contact', '/contact-us', 301)->name('contact.show');
Route::redirect('/contact-page', '/contact-us', 301);
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Post Categories Routes
Route::prefix('post-categories')->name('frontend.post-categories.')->group(function () {
    Route::get('/{category}', [FrontendController::class, 'postsByCategory'])->name('show');
});

// Pages Routes
Route::prefix('pages')->name('frontend.pages.')->group(function () {
    Route::get('/', [PageController::class, 'index'])->name('index');
    Route::get('/{page}', [PageController::class, 'show'])->name('show');
});


    

Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms-and-conditions', [PageController::class, 'hello'])->name('hello');

// Page Categories Routes
Route::prefix('page-categories')->name('frontend.page-categories.')->group(function () {
    Route::get('/{category}', [PageController::class, 'pagesByCategory'])->name('show');
});

// Authentication Routes
Route::get('/login-panel-patron', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login-panel-patron', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

// Admin Routes - Protected by auth middleware
Route::prefix('admin')->name('admin.')->middleware(['auth', 'can_access_admin'])->group(function () {
    
    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    
    // Posts Management
    Route::post('posts/bulk-delete', [AdminPostController::class, 'bulkDelete'])->name('posts.bulk-delete');
    
    // ✅ SAFE edit route (ID + slug)
    Route::get('pages/{page}-{slug}/edit', [AdminPageController::class, 'edit'])
        ->name('pages.edit');

    // Resource routes (except edit)
    Route::resource('pages', AdminPageController::class)->except(['edit']);
    
    Route::resource('posts', AdminPostController::class);
    // ==========================
    // Post Categories Management
    Route::resource('post-categories', AdminPostCategoryController::class);
    
    // Pages Management
    Route::post('pages/bulk-delete', [AdminPageController::class, 'bulkDelete'])->name('pages.bulk-delete');
    Route::resource('pages', AdminPageController::class);
    
    // Testimonials Management
    Route::post('testimonials/bulk-delete', [App\Http\Controllers\Admin\TestimonialController::class, 'bulkDelete'])->name('testimonials.bulk-delete');
    Route::resource('testimonials', App\Http\Controllers\Admin\TestimonialController::class);
    
    // Page Categories Management - Removed from admin
    // Route::resource('page-categories', AdminPageCategoryController::class);
    
    // Menus Management
    Route::resource('menus', AdminMenuController::class);
    Route::prefix('menus/{menu}')->name('menus.')->group(function () {
        Route::post('items', [AdminMenuController::class, 'addItem'])->name('add-item');
        Route::put('items/{item}', [AdminMenuController::class, 'updateItem'])->name('update-item');
        Route::delete('items/{item}', [AdminMenuController::class, 'deleteItem'])->name('delete-item');
    });
    
    // Media Library Management
    Route::resource('media', AdminMediaController::class);
    Route::prefix('media')->name('media.')->group(function () {
        Route::get('api', [AdminMediaController::class, 'api'])->name('api');
        Route::post('bulk-delete', [AdminMediaController::class, 'bulkDelete'])->name('bulk-delete');
    });
    
    // Contacts Management
    Route::prefix('contacts')->name('contacts.')->group(function () {
        Route::get('/', [AdminContactController::class, 'index'])->name('index');
        Route::get('/{contact}', [AdminContactController::class, 'show'])->name('show');
        Route::delete('/{contact}', [AdminContactController::class, 'destroy'])->name('destroy');
        Route::post('/{contact}/mark-read', [AdminContactController::class, 'markAsRead'])->name('mark-read');
        Route::post('/{contact}/mark-unread', [AdminContactController::class, 'markAsUnread'])->name('mark-unread');
        Route::post('/bulk-delete', [AdminContactController::class, 'bulkDelete'])->name('bulk-delete');
    });
    
    // Users Management (Admin only)
    Route::middleware('admin_only')->group(function () {
        Route::resource('users', AdminUserController::class);
    });
});

Route::get('/registration-for-12a-80g-certificate', function () {
    abort(410);
});

// Posts Routes - Individual posts (must come before page fallback)
Route::get('/blog/{post}', [FrontendController::class, 'blogShowPost'])->name('frontend.posts.blog')->where('post', '[a-z0-9\-]+');

// $allDirectry_lebel = [
//     'fssai-registration',
//     'ngo-registration',
//     'trade-license','drug-license','llp-registration','private-limited-company-registration','udyam-registration','msme-registration','startup-registration','iec-registration','registration-for-12a-80g-certificate','society-registration','itr-filling-services','trademark','gst','section-8-company-registration'
// ];

// Route::get('/{directry_label}/{slug?}', [PageController::class, 'directryPageContent'])
//     ->where('directry_label', implode('|', $allDirectry_lebel))->where(['directry_label' => '[a-z0-9\-]+','slug' => '[a-z0-9\-]+'])->name('directryWithSlug.show');

// The IFSC directory is retired in full - every URL under /ifsc-code, whatever
// its shape, is Gone. This has to sit ABOVE the /{post} catch-all below, or a
// single-segment /ifsc-code falls through to it and 404s: that is exactly how
// the bare hub and the 218 bank index pages ended up 404 while their branch
// pages returned 410.
//
// {path?} is optional and unconstrained, so one rule covers /ifsc-code, the
// bank indexes, the branch pages, and any malformed path Google may still be
// holding - including the comma-laden branch addresses that used to resolve as
// real routes. Do NOT add a robots.txt Disallow: Googlebot has to be able to
// crawl the URL to see the 410.
Route::get('/ifsc-code/{path?}', function () {
    abort(410);
})->where('path', '.*')->name('ifsc.retired');

// The HSN, NIC and Port hubs were never built - /hsn-code, /nic-code and
// /port-code have always 404'd, while ~6,900 breadcrumbs pointed at them. The
// breadcrumb links are gone now; these three rules stop the URLs themselves
// being a dead end, sending each to the best-performing page in its own
// directory instead. Targets picked on 90 days of GSC clicks to 2026-08-23 and
// verified 200:
//
//   /hsn-code   -> 48191010                        41 clicks,   8,025 impressions
//   /nic-code   -> wholesale-fruits-vegetables      446 clicks, 25,058 impressions
//   /port-code  -> icd-dadri                        196 clicks, 20,580 impressions
//
// These sit ABOVE the /{post} catch-all for the same reason the IFSC rule does:
// a single-segment path is swallowed by /{post} and 404s otherwise. They do not
// collide with the hsn-code/nic-code/port-code prefix groups further down, which
// only ever match two or more segments.
//
// Worth knowing: a hub URL carries directory intent, and these targets are
// single codes rather than an equivalent listing. Google may decline the signal
// and treat the redirect as a soft 404. Building real index pages is the durable
// fix; until then a 301 to a live page beats a 404. If Search Console starts
// reporting these as soft 404s, that is why.
Route::permanentRedirect('/hsn-code', '/hsn-code/48191010');
Route::permanentRedirect('/nic-code', '/nic-code/wholesale-fruits-vegetables/46301');
Route::permanentRedirect('/port-code', '/port-code/icd-dadri/inder6');

Route::get('/{post}', [FrontendController::class, 'showPost'])->name('frontend.posts.show')->where('post', '[a-z0-9\-]+');

// =======    // 


Route::prefix('nic-code')->group(function () {
    Route::get('/update-slug', [DynamicController::class, 'UpdateSlug'])->name('dynamic.update-slug');
    Route::get('/search', [DynamicController::class, 'searchNicCodes'])->name('dynamic.search');
    Route::get('/{slug}/{subclsss}', [DynamicController::class, 'nicloadcontent'])->name('dynamic.index');
});

// The {slug} segments below are constrained to URL-safe characters. Without a
// constraint Laravel matched anything that was not a slash, so branch addresses and
// leaked anchor markup that had found their way into these code tables resolved as
// real routes - /5,Municipalbuilding,Railwaystationsquare,Alwaye,Ernakulampin and
// /hsn-code/4802 / 4 are both live examples Google is still crawling. A path that
// does not look like a code now 404s at routing, before it can reach a template.
// The IFSC group used to live here: /update-slug, /search and the
// /{bankname}/{slug} branch pages, all behind the retired_directory middleware.
// Removed 2026-08-24 - the directory is retired outright, so there is nothing
// left to route. The single /ifsc-code/{path?} rule registered above the
// /{post} catch-all now answers 410 for every shape, which also clears three
// defects the group carried:
//   - /ifsc-code and the 218 /ifsc-code/{bank} indexes returned 404, not 410
//   - /ifsc-code/search returned 410 anyway, so the tool was already dead
//   - /ifsc-code/update-slug returned 500, because it was exempted from the
//     410 and then failed on its own
// The retired_directory middleware still guards hsn-code, where the 410 is a
// list rather than a pattern and Phase 3 pages must keep working.

Route::prefix('port-code')->group(function () {
    Route::get('/update-slug', [DynamicController::class, 'updatePortSlug'])->name('dynamic.update-port-slug');
    Route::get('/search', [DynamicController::class, 'searchPortCodes'])->name('dynamic.search-port');
    Route::get('/{slug}/{portcode}', [DynamicController::class, 'portloadcontent'])->name('dynamic.portloadcontent');
});

// Only the codes listed in resources/retired/hsn-410-codes.php go 410 here.
// The ~5.2k HSN pages that still earn impressions are Phase 3 and stay live.
Route::prefix('hsn-code')->middleware('retired_directory')->group(function () {
    Route::get('/update-slug', [DynamicController::class, 'updateHsnSlug'])->name('dynamic.update-hsn-slug');
    Route::get('/search', [DynamicController::class, 'searchHsnCodes'])->name('dynamic.search-hsn');
    Route::get('/{slug}', [DynamicController::class, 'hsnloadcontent'])->name('dynamic.hsnloadcontent')
        ->where('slug', '[A-Za-z0-9\-]+');
});

Route::prefix('income-tax-depreciation-rate')->group(function () {
    Route::get('/update-slug', [DynamicController::class, 'updateIncomeTaxDepreciationRateSlug'])->name('dynamic.update-income-tax-depreciation-rate-slug');
    Route::get('/search', [DynamicController::class, 'searchIncomeTaxDepreciationRateCodes'])->name('dynamic.search-income-tax-depreciation-rate');
    Route::get('/{slug}', [DynamicController::class, 'incomeTaxDepreciationRateLoadContent'])->name('dynamic.income-tax-depreciation-rate-loadcontent');
});

Route::prefix('accounting-standards')->group(function () {
    Route::get('/update-slug', [DynamicController::class, 'updateAccountingStandardSlug'])->name('dynamic.update-accounting-standard-slug');
    Route::get('/search', [DynamicController::class, 'searchAccountingStandardCodes'])->name('dynamic.search-accounting-standard');
    Route::get('/{slug}', [DynamicController::class, 'accountingStandardLoadContent'])->name('dynamic.accounting-standard-loadcontent');

});

// directry with the state or city====================================================================== =======  ========= ==

$allDirectry_lebel = [
    'fssai-registration',
    'ngo-registration',
    'trade-license','drug-license','llp-registration','private-limited-company-registration','udyam-registration','msme-registration','startup-registration','iec-registration','registration-for-12a-80g-certificate','society-registration','itr-filling-services','trademark','gst','section-8-company-registration',
    // Accounting & Bookkeeping service slugs whose city pages were added in Patron Local (not yet whitelisted) — fixes /service/city 404
    'accounting-bookkeeping-services','esop-accounting-ind-as-102','year-end-closing-finalisation-services',
    // Accounting cluster service + industry pages with city (2-segment /service/city) pages
    'accounting-services','accounting-services-for-e-commerce-industry','accounting-services-for-education-industry','accounting-services-for-manufacturing','accounting-services-for-retail','accounting-services-for-startups','accounting-services-for-the-service-sector-industry','accounting-services-it-saas','ngo-and-non-profit-accounting-services','tally-accounting','xero-accounting',
    // IMF (Insurance Marketing Firm) cluster city pages
    'imf-services','irda-imf-business-registration','imf-irdai-registration-process','ismp-certification-isp-appointment','imf-compliance-retainer-services','imf-for-insurance-agents','imf-for-financial-advisors','imf-for-mutual-fund-distributors','imf-for-bank-employees-retirees','imf-for-multi-line-brokers','imf-for-bank-nbfc-employees','imf-for-investment-advisors','imf-private-limited-vs-llp','imf-for-rural-tier-3-cities','imf-application-rejection-recovery',
    // Financial Certificates cluster city pages (Delhi/Gurugram/Mumbai/Pune) — deployed from Patron Hub HTMLs
    'ageing-of-debtors-creditors-certificate','capital-account-certificate','certificate-of-fair-market-value-fmv','certificate-under-section-281-income-tax','cma-data-preparation-and-certification','foreign-remittance-certificate-15ca-15cb','forensic-net-worth-certificate','fund-utilisation-certificate','income-certificate-by-ca','inward-remittance-certificate-firc','net-worth-certificate-for-companies','net-worth-certificate-for-germany-visa','net-worth-certificate-for-ireland-visa','net-worth-certificate-for-nbfc-rbi-registration','net-worth-certificate-for-rera-registration','net-worth-certificate-for-startup-india-recognition','net-worth-certificate-for-uae-golden-visa','professional-income-certificate','provisional-financials-certificate','solvency-certificate','sponsorship-affidavit-and-net-worth-certificate','stock-statement-certificate','turnover-certificate-for-msme-classification',
    // Net Worth & Solvency cluster city pages (2026-08-04)
    'net-worth-certificate','net-worth-certificate-for-visa','solvency-certificate',
    // NGO / Trust compliance cluster city pages (net-new 2026-07-01)
    '12a-80g-renewal-5-year-cycle','form-10bd-donor-wise-donation-statement','form-10be-donor-certificate-management','section-11-12-13-income-application-accumulation','fcra-renewal-5-year-cycle','fcra-fc-4-annual-return','fcra-fc-6-prior-intimation-and-bank-account','fcra-quarterly-receipt-declaration','form-10b-audit-report-section-12a-trust','form-10bb-audit-report-section-1023c-institution','trustee-appointment-and-replacement','ngo-services-for-healthcare','ngo-services-for-rural-development',
];

Route::get('/{directry_label}/{slug?}', [PageController::class, 'directryPageContent'])
    ->where('directry_label', implode('|', $allDirectry_lebel))->where(['directry_label' => '[a-z0-9\-]+','slug' => '[a-z0-9\-]+'])->name('directryWithSlug.show');


    
/*     ===============================================

    Download format
    
 =================================================       */ 
 
 
Route::prefix('tools/download-format')->group(function () {
    Route::get('/noc', [DocFileController::class, 'noc'])->name('noc');
    Route::get('/board-resolution-generator',[DocFileController::class, 'index'])->name('br.form');
    Route::post('/generate-board-resolution', [DocFileController::class, 'downloadDoc'])->name('br.generate');
    
    Route::get('/board-resolution-for-sale-of-property', [DocFileController::class, 'boardResolutionForProperty'])->name('br.propertyform');
    Route::post('/board-resolution-for-sale-of-property', [DocFileController::class, 'boardResolutionForPropertyDownloadDoc'])->name('br.property');
    
    Route::get('/board-resolution-for-loan-from-bank', [DocFileController::class, 'boardResolutionForLoanBank']);
    Route::post('/board-resolution-for-loan-from-bank', [DocFileController::class, 'boardResolutionForLoanDownloadDoc'])->name('br.loan');
    
    Route::get('/resolution-for-authorisation-to-sign-rent-agreement', [DocFileController::class, 'boardResolutionForRentAgreement']);
    Route::post('/resolution-for-authorisation-to-sign-rent-agreement', [DocFileController::class, 'boardResolutionForRentDownloadDoc'])->name('br.rent');
    
    Route::get('/board-resolution-for-renewal-of-cc-limit', [DocFileController::class, 'boardResolutionForCCRenewal']);
    Route::post('/board-resolution-for-renewal-of-cc-limit',[DocFileController::class, 'boardResolutionForCCRenewalDownloadDoc'])->name('br.cc.renewal');
    
    Route::get('/board-resolution-for-increase-in-director-remuneration', [DocFileController::class, 'boardResolutionDirectorRemuneration']);
Route::post('/board-resolution-for-increase-in-director-remuneration', [DocFileController::class, 'boardResolutionDirectorRemunerationDownloadDoc'])->name('br.director.remuneration');

    Route::get('/board-resolution-for-conversion-of-loan-into-equity', [DocFileController::class, 'boardResolutionLoanToEquity']);
    Route::post('/board-resolution-for-conversion-of-loan-into-equity',[DocFileController::class, 'boardResolutionLoanToEquityDownload'])->name('br.loan.equity.download');

    Route::get('/resignation-letter-for-llp-partner',[DocFileController::class, 'resignationLetterDesignatedPartner'])->name('llp.resignation');
    Route::post('/resignation-letter-for-llp-partner',[DocFileController::class, 'resignationLetterDesignatedPartnerDownloadDoc'])->name('llp.resignation.download');

    Route::get('/board-resolution-format-for-posh-committee', [DocFileController::class, 'boardResolutionForPOSH']);
    Route::post('/board-resolution-format-for-posh-committee',[DocFileController::class, 'boardResolutionForPOSHDownloadDoc'])->name('br.posh');
    
    Route::get('/board-resolution-for-gst-registration', [DocFileController::class, 'boardResolutionForGSTRegistration']);
    Route::post('/board-resolution-for-gst-registration',[DocFileController::class, 'boardResolutionForGSTRegistrationDownloadDoc'])->name('br.gst');
    
    Route::get('/board-resolution-for-resignation-of-statutory-auditor', [DocFileController::class, 'boardResolutionForAuditorResignation']);
    Route::post('/board-resolution-for-resignation-of-statutory-auditor',[DocFileController::class, 'boardResolutionForAuditorResignationDownloadDoc'])->name('br.auditor.resignation');
    
    Route::get('/resolution-for-noc-office-use', [DocFileController::class, 'boardResolutionForNOC']);
    Route::post('/resolution-for-noc-office-use',[DocFileController::class, 'boardResolutionForNOCDownloadDoc'])->name('br.noc');
    
    Route::get('/board-resolution-for-striking-off-the-company', [DocFileController::class, 'boardResolutionForStrikeOff']);
    Route::post('/board-resolution-for-striking-off-the-company',[DocFileController::class, 'boardResolutionForStrikeOffDownloadDoc'])->name('br.strike.off');

    // Board Resolution for Alteration of Articles of Association Routes
    Route::get('/board-resolution-for-alteration-of-aoa', [DocFileController::class, 'boardResolutionForAOAAlteration']);
    Route::post('/board-resolution-for-alteration-of-aoa', [DocFileController::class, 'boardResolutionForAOAAlterationDownloadDoc'])->name('br.aoa.alteration');
    
    // Resolution for Appointment of Designated Partner in LLP Routes
    Route::get('/resolution-for-appointment-of-designated-partner-in-llp', [DocFileController::class, 'boardResolutionForLLPDesignatedPartner']);
    Route::post('/resolution-for-appointment-of-designated-partner-in-llp', [DocFileController::class, 'boardResolutionForLLPDesignatedPartnerDownloadDoc'])->name('br.llp.designated.partner');
    
    // Board Resolution for Approval of Financial Statements Routes
Route::get('/board-resolution-for-approval-of-financial-statements', [DocFileController::class, 'boardResolutionForFinancialStatements']);
Route::post('/board-resolution-for-approval-of-financial-statements', [DocFileController::class, 'boardResolutionForFinancialStatementsDownloadDoc'])->name('br.financial.statements');    
  
  // Board Resolution for Opening a Bank Account Routes
Route::get('/board-resolution-for-opening-bank-account', [DocFileController::class, 'boardResolutionForBankAccount']);
Route::post('/board-resolution-for-opening-bank-account', [DocFileController::class, 'boardResolutionForBankAccountDownloadDoc'])->name('br.bank.account');

    // Board Resolution for Authorisation to Operate Bank Account Routes
Route::get('/board-resolution-for-authorisation-to-operate-bank-account', [DocFileController::class, 'boardResolutionForBankAuthorization']);
Route::post('/board-resolution-for-authorisation-to-operate-bank-account', [DocFileController::class, 'boardResolutionForBankAuthorizationDownloadDoc'])->name('br.bank.authorization');
    
    // resolution-for-approval-of-related-party-transactions
    
// Board Resolution for Approval of Related Party Transactions Routes
Route::get('/resolution-for-approval-of-related-party-transactions', [DocFileController::class, 'boardResolutionForRelatedParty']);
Route::post('/resolution-for-approval-of-related-party-transactions', [DocFileController::class, 'boardResolutionForRelatedPartyDownloadDoc'])->name('br.related.party');
    
// affidavit-for-closure-of-llp

// Affidavit for Closure of LLP Routes
Route::get('/affidavit-for-closure-of-llp', [DocFileController::class, 'boardResolutionForLLPClosureAffidavit']);
Route::post('/affidavit-for-closure-of-llp', [DocFileController::class, 'boardResolutionForLLPClosureAffidavitDownloadDoc'])->name('br.llp.closure.affidavit');

// board-resolution-for-approval-of-esop-scheme
// boardResolutionForESOP


Route::get('board-resolution-for-approval-of-esop-scheme', [DocFileController::class, 'boardResolutionForESOP']);
Route::post('board-resolution-for-approval-of-esop-scheme', [DocFileController::class, 'boardResolutionForESOPDownloadDoc'])->name('br.esop');
    
    // routes/web.php
Route::get('board-resolution-for-appointment-of-whole-time-director', [DocFileController::class, 'boardResolutionForWholeTimeDirector']);
Route::post('board-resolution-for-appointment-of-whole-time-director', [DocFileController::class, 'boardResolutionForWholeTimeDirectorDownloadDoc'])->name('br.wtd');
 
 // routes/web.php
Route::get('board-resolution-for-incorporating-a-subsidiary-company', [DocFileController::class, 'boardResolutionForSubsidiary']);
Route::post('board-resolution-for-incorporating-a-subsidiary-company', [DocFileController::class, 'boardResolutionForSubsidiaryDownloadDoc'])->name('br.subsidiary');
    
    // routes/web.php
Route::get('board-resolution-for-increase-in-paid-up-capital', [DocFileController::class, 'boardResolutionForShareCapital']);
Route::post('board-resolution-for-increase-in-paid-up-capital', [DocFileController::class, 'boardResolutionForShareCapitalDownloadDoc'])->name('br.sharecapital');

// routes/web.php
//   start ....

Route::get('egm-resolution-for-appointment-of-auditor', [DocFileController::class, 'egmAuditorResolution']);
Route::post('egm-resolution-for-appointment-of-auditor', [DocFileController::class, 'egmAuditorResolutionDownloadDoc'])->name('egm.auditor.resolution');

Route::get('board-resolution-for-authorised-signatory', [DocFileController::class, 'boardResolutionAuthorisedSignatory']);
Route::post('board-resolution-for-authorised-signatory', [DocFileController::class, 'boardResolutionAuthorisedSignatoryDownloadDoc'])->name('br.authorised.signatory');

Route::get('subscriber-sheet-for-llp', [DocFileController::class, 'subscriberSheetLLP']);
Route::post('subscriber-sheet-for-llp', [DocFileController::class, 'subscriberSheetLLPDownloadDoc'])->name('llp.subscriber.sheet');

Route::get('board-resolution-for-conversion-of-pvt-ltd-co-into-llp', [DocFileController::class, 'boardResolutionConversionToLLP']);
Route::post('board-resolution-for-conversion-of-pvt-ltd-co-into-llp', [DocFileController::class, 'boardResolutionConversionToLLPDownloadDoc'])->name('br.conversion.llp');

Route::get('board-resolution-for-appointment-of-secretarial-auditor', [DocFileController::class, 'boardResolutionSecretarialAuditor']);
Route::post('board-resolution-for-appointment-of-secretarial-auditor', [DocFileController::class, 'boardResolutionSecretarialAuditorDownloadDoc'])->name('br.secretarial.auditor');

Route::get('resolution-for-authorisation-to-sign-documents', [DocFileController::class, 'boardResolutionAuthSignDocuments']);
Route::post('resolution-for-authorisation-to-sign-documents', [DocFileController::class, 'boardResolutionAuthSignDocumentsDownloadDoc'])->name('br.auth.sign.documents');

Route::get('board-resolution-for-appointment-of-directors', [DocFileController::class, 'boardResolutionAdditionalDirector']);
Route::post('board-resolution-for-appointment-of-directors', [DocFileController::class, 'boardResolutionAdditionalDirectorDownloadDoc'])->name('br.additional.director');

Route::get('board-resolution-for-name-change', [DocFileController::class, 'boardResolutionChangeCompanyName']);
Route::post('board-resolution-for-name-change', [DocFileController::class, 'boardResolutionChangeCompanyNameDownloadDoc'])->name('br.change.company.name');

Route::get('board-resolution-for-mutual-fund-investment', [DocFileController::class, 'boardResolutionMutualFundInvestment']);
Route::post('board-resolution-for-mutual-fund-investment', [DocFileController::class, 'boardResolutionMutualFundInvestmentDownloadDoc'])->name('br.mutual.fund.investment');

Route::get('board-resolution-for-share-transfer', [DocFileController::class, 'boardResolutionShareTransfer']);
Route::post('board-resolution-for-share-transfer', [DocFileController::class, 'boardResolutionShareTransferDownloadDoc'])->name('br.share.transfer');

Route::get('board-resolution-for-the-sitting-fees-of-the-director', [DocFileController::class, 'boardResolutionSittingFees']);
Route::post('board-resolution-for-the-sitting-fees-of-the-director', [DocFileController::class, 'boardResolutionSittingFeesDownloadDoc'])->name('br.sitting.fees');

Route::get('board-resolution-format-for-declaration-of-dividend', [DocFileController::class, 'boardResolutionDividendDeclaration']);
Route::post('board-resolution-format-for-declaration-of-dividend', [DocFileController::class, 'boardResolutionDividendDeclarationDownloadDoc'])->name('br.dividend.declaration');

// ==========================================================

Route::get('noc-for-company-registration', [DocFileController::class, 'nocFromLandlord']);
Route::post('noc-for-company-registration', [DocFileController::class, 'nocFromLandlordDownloadDoc'])->name('noc.landlord');

Route::get('board-resolution-for-non-convertible-debentures', [DocFileController::class, 'boardResolutionNCDIssue']);
Route::post('board-resolution-for-non-convertible-debentures', [DocFileController::class, 'boardResolutionNCDIssueDownloadDoc'])->name('br.ncd.issue');

Route::get('resolution-for-appointment-of-statutory-auditor', [DocFileController::class, 'boardResolutionAuditorCasualVacancy']);
Route::post('resolution-for-appointment-of-statutory-auditor', [DocFileController::class, 'boardResolutionAuditorCasualVacancyDownloadDoc'])->name('br.auditor.casual.vacancy');

Route::get('board-resolution-for-acquisition-of-business', [DocFileController::class, 'boardResolutionAcquisitionSoleProprietorship']);
Route::post('board-resolution-for-acquisition-of-business', [DocFileController::class, 'boardResolutionAcquisitionSoleProprietorshipDownloadDoc'])->name('br.acquisition.sole.proprietorship');

Route::get('resolution-for-conversion-of-opc-into-pvt-ltd-co', [DocFileController::class, 'boardResolutionOPCConversion']);
Route::post('resolution-for-conversion-of-opc-into-pvt-ltd-co', [DocFileController::class, 'boardResolutionOPCConversionDownloadDoc'])->name('br.opc.conversion');

Route::get('board-resolution-for-resignation-of-director', [DocFileController::class, 'boardResolutionDirectorResignation']);
Route::post('board-resolution-for-resignation-of-director', [DocFileController::class, 'boardResolutionDirectorResignationDownloadDoc'])->name('br.director.resignation');

Route::get('board-resolution-to-authorise-mortgage-and-creation-of-charge', [DocFileController::class, 'boardResolutionMortgageCharge']);
Route::post('board-resolution-to-authorise-mortgage-and-creation-of-charge', [DocFileController::class, 'boardResolutionMortgageChargeDownloadDoc'])->name('br.mortgage.charge');

Route::get('board-resolution-for-allotment-of-preference-shares', [DocFileController::class, 'boardResolutionPreferenceShares']);
Route::post('board-resolution-for-allotment-of-preference-shares', [DocFileController::class, 'boardResolutionPreferenceSharesDownloadDoc'])->name('br.preference.shares');

Route::get('board-resolution-to-change-registered-office', [DocFileController::class, 'boardResolutionRegisteredOfficeChange']);
Route::post('board-resolution-to-change-registered-office', [DocFileController::class, 'boardResolutionRegisteredOfficeChangeDownloadDoc'])->name('br.registered.office.change');

Route::get('consent-to-act-as-of-designated-partner', [DocFileController::class, 'form9DesignatedPartner']);
Route::post('consent-to-act-as-of-designated-partner', [DocFileController::class, 'form9DesignatedPartnerDownloadDoc'])->name('form9.designated.partner');

Route::get('stk-3-indemnity-bond', [DocFileController::class, 'formSTK3IndemnityBond']);
Route::post('stk-3-indemnity-bond', [DocFileController::class, 'formSTK3IndemnityBondDownloadDoc'])->name('form.stk3.indemnity');

Route::get('format-of-indemnity-bond-for-closure-of-llp', [DocFileController::class, 'indemnityBondLLPClosure']);
Route::post('format-of-indemnity-bond-for-closure-of-llp', [DocFileController::class, 'indemnityBondLLPClosureDownloadDoc'])->name('indemnity.llp.closure');

Route::get('board-resolution-for-increase-in-authorised-share-capital', [DocFileController::class, 'boardResolutionIncreaseAuthorisedCapital']);
Route::post('board-resolution-for-increase-in-authorised-share-capital', [DocFileController::class, 'boardResolutionIncreaseAuthorisedCapitalDownloadDoc'])->name('br.authorised.capital.increase');

    Route::get('/board-resolution-for-change-of-place-of-books-of-accounts', [DocFileController::class, 'boardResolutionForBooksOfAccounts'])->name('br.books.accounts.view');
    Route::post('/board-resolution-for-change-of-place-of-books-of-accounts', [DocFileController::class, 'boardResolutionForBooksOfAccountsDownloadDoc'])->name('br.books.accounts');

    Route::get('/egm-resolution-for-conversion-of-opc-into-private-limited-company', [DocFileController::class, 'egmResolutionForOpcConversion'])->name('egm.opc.conversion.view');
    Route::post('/egm-resolution-for-conversion-of-opc-into-private-limited-company', [DocFileController::class, 'egmResolutionForOpcConversionDownloadDoc'])->name('egm.opc.conversion');

    Route::get('/board-resolution-for-appointment-of-independent-director', [DocFileController::class, 'boardResolutionForIndependentDirector'])->name('br.independent.director.view');
    Route::post('/board-resolution-for-appointment-of-independent-director', [DocFileController::class, 'boardResolutionForIndependentDirectorDownloadDoc'])->name('br.independent.director');

    Route::get('/special-resolution-for-striking-off-the-company', [DocFileController::class, 'specialResolutionForStrikeOff'])->name('special.strike.off.view');
    Route::post('/special-resolution-for-striking-off-the-company', [DocFileController::class, 'specialResolutionForStrikeOffDownloadDoc'])->name('special.strike.off');

    Route::get('/egm-resolution-for-change-of-name-of-company', [DocFileController::class, 'egmResolutionForNameChange'])->name('egm.name.change.view');
    Route::post('/egm-resolution-for-change-of-name-of-company', [DocFileController::class, 'egmResolutionForNameChangeDownloadDoc'])->name('egm.name.change');

    Route::get('/notice-of-egm-for-strike-off-company', [DocFileController::class, 'egmNoticeForStrikeOff'])->name('egm.notice.strike.off.view');
    Route::post('/notice-of-egm-for-strike-off-company', [DocFileController::class, 'egmNoticeForStrikeOffDownloadDoc'])->name('egm.notice.strike.off');

    Route::get('/issuance-of-shares-for-non-cash-consideration', [DocFileController::class, 'boardResolutionForSharesNonCash'])->name('br.shares.noncash.view');
    Route::post('/issuance-of-shares-for-non-cash-consideration', [DocFileController::class, 'boardResolutionForSharesNonCashDownloadDoc'])->name('br.shares.noncash');

    // Board Resolution for Loan from Bank
    Route::get('/board-resolution-for-loan-against-fixed-deposits', [DocFileController::class, 'boardResolutionForLoan2'])->name('br.loan');
    Route::post('/board-resolution-for-loan-against-fixed-deposits', [DocFileController::class, 'boardResolutionForLoanDownloadDoc2'])->name('br.loan.download');
//end document number 61

// routes/web.php
Route::get('/board-resolution-for-change-of-name-of-company', [DocFileController::class, 'boardResolutionForChangeOfName'])->name('br.changename.form');
Route::post('/board-resolution-for-change-of-name-of-company', [DocFileController::class, 'boardResolutionForChangeOfNameDownloadDoc'])->name('br.changename');

// routes/web.php
Route::get('/board-resolution-for-making-political-contribution', [DocFileController::class, 'boardResolutionForRelatedPartyTransactions'])->name('br.rpt.form');
Route::post('/board-resolution-for-making-political-contribution', [DocFileController::class, 'boardResolutionForRelatedPartyTransactionsDownloadDoc'])->name('br.rpt');

Route::get('resignation-letter-of-statutory-auditor', [DocFileController::class, 'auditorResignationLetter'])->name('br.auditor.resignation.form');
Route::post('resignation-letter-of-statutory-auditor', [DocFileController::class, 'auditorResignationLetterDownloadDoc'])->name('br.auditor.resignation');
Route::get('how-to-print-download-iec-profile', [DocFileController::class, 'iecGuide'])->name('br.iec.guide.form');
Route::post('how-to-print-download-iec-profile', [DocFileController::class, 'iecGuideDownloadDoc'])->name('br.iec.guide');
Route::get('/make-in-india-certificate', [DocFileController::class, 'makeInIndiaCertification'])->name('br.makeinindia.form');
Route::post('/make-in-india-certificate', [DocFileController::class, 'makeInIndiaCertificationDownloadDoc'])->name('br.makeinindia');

Route::get('rent-agreement-for-private-limited-company', [DocFileController::class, 'rentAgreement'])->name('br.rent.agreement.form');
Route::post('rent-agreement-for-private-limited-company', [DocFileController::class, 'rentAgreementDownloadDoc'])->name('br.rent.agreement');

Route::get('company-director-resignation-letter', [DocFileController::class, 'directorResignationLetter'])->name('br.director.resignation.form');
Route::post('company-director-resignation-letter', [DocFileController::class, 'directorResignationLetterDownloadDoc'])->name('br.director.resignation');
Route::get('ordinary-resolution-for-increase-in-authorised-share-capital', [DocFileController::class, 'ordinaryResolutionAuthorisedCapital'])->name('br.authorised.capital.form');
Route::post('ordinary-resolution-for-increase-in-authorised-share-capital', [DocFileController::class, 'ordinaryResolutionAuthorisedCapitalDownloadDoc'])->name('br.authorised.capital');
Route::get('gst-invoice', [DocFileController::class, 'gstInvoice'])->name('br.gst.invoice.form');
Route::post('gst-invoice', [DocFileController::class, 'gstInvoiceDownloadDoc'])->name('br.gst.invoice');
Route::get('llp-agreement-format', [DocFileController::class, 'llpAgreement'])->name('br.llp.agreement.form');
Route::post('llp-agreement-format', [DocFileController::class, 'llpAgreementDownloadDoc'])->name('br.llp.agreement');
Route::get('notice-of-egm-for-increase-in-authorised-share-capital', [DocFileController::class, 'noticeEgmAuthorisedCapital'])->name('br.egm.authorised.capital.form');
Route::post('notice-of-egm-for-increase-in-authorised-share-capital', [DocFileController::class, 'noticeEgmAuthorisedCapitalDownloadDoc'])->name('br.egm.authorised.capital');
Route::get('board-meeting-agenda-format', [DocFileController::class, 'boardMeetingAgenda'])->name('br.board.agenda.form');
Route::post('board-meeting-agenda-format', [DocFileController::class, 'boardMeetingAgendaDownloadDoc'])->name('br.board.agenda');
Route::get('noc-for-gst-registration', [DocFileController::class, 'nocGstRegistration'])->name('br.noc.gst.form');
Route::post('noc-for-gst-registration', [DocFileController::class, 'nocGstRegistrationDownloadDoc'])->name('br.noc.gst');
Route::get('board-resolution-for-conversion-of-private-company-into-public-company', [DocFileController::class, 'boardResolutionPrivateToPublic'])->name('br.conversion.private.to.public.form');
Route::post('board-resolution-for-conversion-of-private-company-into-public-company', [DocFileController::class, 'boardResolutionPrivateToPublicDownloadDoc'])->name('br.conversion.private.to.public');
Route::get('br-for-allotment-of-shares', [DocFileController::class, 'boardResolutionAllotmentShares'])->name('br.allotment.shares.form');
Route::post('br-for-allotment-of-shares', [DocFileController::class, 'boardResolutionAllotmentSharesDownloadDoc'])->name('br.allotment.shares');
Route::get('board-resolution-for-reimbursement-of-pre-incorporation-expenses', [DocFileController::class, 'boardResolutionPreIncorporation'])->name('br.preincorporation.form');
Route::post('board-resolution-for-reimbursement-of-pre-incorporation-expenses', [DocFileController::class, 'boardResolutionPreIncorporationDownloadDoc'])->name('br.preincorporation');
Route::get('pan-card-cancellation-request-letter', [DocFileController::class, 'panTanCancellation'])->name('br.pan.tan.cancel.form');
Route::post('pan-card-cancellation-request-letter', [DocFileController::class, 'panTanCancellationDownloadDoc'])->name('br.pan.tan.cancel');
Route::get('application-for-closure-of-llp', [DocFileController::class, 'llpClosureResolution'])->name('br.llp.closure.form');
Route::post('application-for-closure-of-llp', [DocFileController::class, 'llpClosureResolutionDownloadDoc'])->name('br.llp.closure');
Route::get('consent-of-shareholders-for-striking-off-the-company', [DocFileController::class, 'shareholderConsentStrikeOff'])->name('br.shareholder.consent.form');
Route::post('consent-of-shareholders-for-striking-off-the-company', [DocFileController::class, 'shareholderConsentStrikeOffDownloadDoc'])->name('br.shareholder.consent');
Route::get('notice-of-board-meeting-format', [DocFileController::class, 'noticeBoardMeeting'])->name('br.board.notice.form');
Route::post('notice-of-board-meeting-format', [DocFileController::class, 'noticeBoardMeetingDownloadDoc'])->name('br.board.notice');
Route::get('resolution-for-appointment-of-internal-auditor', [DocFileController::class, 'boardResolutionInternalAuditor'])->name('br.internal.auditor.form');
Route::post('resolution-for-appointment-of-internal-auditor', [DocFileController::class, 'boardResolutionInternalAuditorDownloadDoc'])->name('br.internal.auditor');

});

Route::prefix('trademark')->group(function(){
    Route::get('/class-9-downloadable-podcasts', [DocFileController::class, 'trademarkRegistrationGuide'])->name('br.trademark.form');
    Route::post('/class-9-downloadable-podcasts', [DocFileController::class, 'trademarkRegistrationGuideDownloadDoc'])->name('br.trademark');
});
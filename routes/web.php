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
Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
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


// Route::get('/{directry_label}/{slug?}', [PageController::class, 'directryPageContent'])
//     ->where('directry_label', implode('|', $allDirectry_lebel))->where(['directry_label' => '[a-z0-9\-]+','slug' => '[a-z0-9\-]+'])->name('directryWithSlug.show');

Route::get('/{post}', [FrontendController::class, 'showPost'])->name('frontend.posts.show')->where('post', '[a-z0-9\-]+');

// =======    // 


Route::prefix('nic-code')->group(function () {
    Route::get('/update-slug', [DynamicController::class, 'UpdateSlug'])->name('dynamic.update-slug');
    Route::get('/search', [DynamicController::class, 'searchNicCodes'])->name('dynamic.search');
    Route::get('/{slug}/{subclsss}', [DynamicController::class, 'nicloadcontent'])->name('dynamic.index');
});

Route::prefix('ifsc-code')->group(function () {
    Route::get('/update-slug', [DynamicController::class, 'updateIfscSlug'])->name('dynamic.update-ifsc-slug');
    Route::get('/search', [DynamicController::class, 'searchIfscCodes'])->name('dynamic.search-ifsc');
    Route::get('/{bankname}/{slug}', [DynamicController::class, 'ifscloadcontent'])->name('dynamic.ifscloadcontent');
});

Route::prefix('port-code')->group(function () {
    Route::get('/update-slug', [DynamicController::class, 'updatePortSlug'])->name('dynamic.update-port-slug');
    Route::get('/search', [DynamicController::class, 'searchPortCodes'])->name('dynamic.search-port');
    Route::get('/{slug}/{portcode}', [DynamicController::class, 'portloadcontent'])->name('dynamic.portloadcontent');
});

Route::prefix('hsn-code')->group(function () {
    Route::get('/update-slug', [DynamicController::class, 'updateHsnSlug'])->name('dynamic.update-hsn-slug');
    Route::get('/search', [DynamicController::class, 'searchHsnCodes'])->name('dynamic.search-hsn');
    Route::get('/{slug}', [DynamicController::class, 'hsnloadcontent'])->name('dynamic.hsnloadcontent');
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
    // IMF (Insurance Marketing Firm) cluster city pages
    'imf-services','irda-imf-business-registration','imf-irdai-registration-process','ismp-certification-isp-appointment','imf-compliance-retainer-services','imf-for-insurance-agents','imf-for-financial-advisors','imf-for-mutual-fund-distributors','imf-for-bank-employees-retirees','imf-for-multi-line-brokers','imf-for-bank-nbfc-employees','imf-for-investment-advisors','imf-private-limited-vs-llp','imf-for-rural-tier-3-cities','imf-application-rejection-recovery',
    // Financial Certificates cluster city pages (Delhi/Gurugram/Mumbai/Pune) — deployed from Patron Hub HTMLs
    'ageing-of-debtors-creditors-certificate','capital-account-certificate','certificate-of-fair-market-value-fmv','certificate-under-section-281-income-tax','cma-data-preparation-and-certification','foreign-remittance-certificate-15ca-15cb','forensic-net-worth-certificate','fund-utilisation-certificate','income-certificate-by-ca','inward-remittance-certificate-firc','net-worth-certificate-for-companies','net-worth-certificate-for-germany-visa','net-worth-certificate-for-ireland-visa','net-worth-certificate-for-nbfc-rbi-registration','net-worth-certificate-for-rera-registration','net-worth-certificate-for-startup-india-recognition','net-worth-certificate-for-uae-golden-visa','professional-income-certificate','provisional-financials-certificate','solvency-certificate','sponsorship-affidavit-and-net-worth-certificate','stock-statement-certificate','turnover-certificate-for-msme-classification',
    // NGO / Trust compliance cluster city pages (net-new 2026-07-01)
    '12a-80g-renewal-5-year-cycle','form-10bd-donor-wise-donation-statement','form-10be-donor-certificate-management','section-11-12-13-income-application-accumulation','fcra-renewal-5-year-cycle','fcra-fc-4-annual-return','fcra-fc-6-prior-intimation-and-bank-account','fcra-quarterly-receipt-declaration','form-10b-audit-report-section-12a-trust','form-10bb-audit-report-section-1023c-institution','trustee-appointment-and-replacement','ngo-services-for-healthcare','ngo-services-for-rural-development',
    // GST + Business Registration + Financial Certificates pending-upload city clusters (published 2026-07-02)
    'angel-tax-exemption-section-56-2-viib','branch-office-of-foreign-company-india','company-registration-in-cayman-islands','company-registration-in-mauritius',
    'company-registration-in-singapore','company-registration-in-uk','convert-llp-to-public-ltd','convert-proprietorship-to-llp',
    'convert-proprietorship-to-pvt-ltd','convert-public-ltd-to-pvt-ltd','convert-pvt-ltd-to-public-ltd','dpiit-startup-recognition',
    'e-invoicing-for-erp-and-billing-software-integration','e-invoicing-implementation-and-irp-integration','e-way-bill-for-job-work-and-multi-vehicle','e-way-bill-for-transporters-and-gta',
    'e-way-bill-generation-and-compliance','ecommerce-business-registration','family-business-registration-india','financial-certificates-services',
    'fintech-company-registration-india','foreign-subsidiary-registration-india','freelancer-business-registration','gem-government-e-marketplace-registration',
    'gst-advance-ruling-aar-and-aaar','gst-appeal-section-107-first-appellate-authority','gst-appeal-to-gstat-section-112','gst-classification-and-hsn-sac-advisory',
    'gst-composition-scheme-registration','gst-drc-01-and-drc-01a-response','gst-drc-03-voluntary-payment','gst-itc-advisory-and-optimization',
    'gst-itc-blocked-credits-section-17-5','gst-itc-on-capital-goods','gst-itc-reconciliation-gstr-2b-vs-3b','gst-itc-reversal-rule-42-43',
    'gst-itc-time-limit-section-16-4','gst-place-of-supply-determination','gst-registration-amendment','gst-registration-cancellation',
    'gst-registration-for-casual-taxable-person','gst-registration-for-non-resident-taxable-person','gst-registration-revocation','gst-registration-rule-14a',
    'gst-returns-for-builders-and-real-estate-promoters','gst-returns-for-education','gst-returns-for-financial-services','gst-returns-for-goods-transport-agency-gta',
    'gst-returns-for-healthcare','gst-returns-for-hotels','gst-returns-for-importers','gst-returns-for-manufacturers',
    'gst-returns-for-ngos-and-charitable-trusts','gst-returns-for-real-estate','gst-returns-for-trading-industry','gst-returns-for-travel-and-logistics',
    'gst-reverse-charge-mechanism-rcm-compliance','gst-valuation-services','gstr-1-filing','gstr-3b-filing',
    'gstr-4-filing','gstr-5a-filing','gstr-7-filing','gstr-8-filing',
    'gstr-9c-reconciliation','healthcare-business-registration-india','huf-formation-and-pan-application','it-saas-company-registration-india',
    'joint-venture-jv-structure-and-shareholders-agreement','liaison-office-of-foreign-company-india','manufacturing-company-registration-india','nbfc-registration-rbi-applicability-and-process',
    'net-worth-certificate-for-business-loan','net-worth-certificate-for-directors-fit-and-proper','net-worth-certificate-for-home-loan','net-worth-certificate-for-students',
    'net-worth-certificate-for-tender-bidding','pan-and-tan-application-post-incorporation','professional-firm-registration','project-office-of-foreign-company-india',
    'real-estate-company-registration-india','sec-74-gst-notice','shop-and-establishment-act-registration','special-purpose-vehicle-spv-and-holding-company-setup',
    'trade-license-municipality-registration','trust-registration-private-family','trust-registration-public-charitable','wholly-owned-subsidiary-of-foreign-company-india',
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
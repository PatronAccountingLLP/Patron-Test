<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Page;
use App\Models\NocRegistration;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Requests\CompanyRegistrationRequest;
use App\Mail\CompanyRegistrationMail;
use App\Services\TemplateService;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Barryvdh\DomPDF\Facade\Pdf;

class FrontendController extends Controller
{
    /**
     * Display the homepage.
     */
    public function index()
    {
        $posts = Post::published()
                    ->with('categories')
                    ->latest('published_at')
                    ->paginate(10);
        
        $testimonials = Testimonial::published()
                                   ->ordered()
                                   ->get();
        
        return view('frontend.index', compact('posts', 'testimonials'));
    }

    /**
     * Display a listing of posts.
     */
    public function posts(Request $request)
    {
        $query = Post::published()->with(['categories', 'users'])->latest('published_at');
        
        // Handle search functionality
        if ($request->filled('search')) {
            $searchTerm = $request->search;
            $query->where(function ($q) use ($searchTerm) {
                $q->where('title', 'LIKE', '%' . $searchTerm . '%')
                  ->orWhere('content', 'LIKE', '%' . $searchTerm . '%')
                  ->orWhere('excerpt', 'LIKE', '%' . $searchTerm . '%')
                  ->orWhere('description', 'LIKE', '%' . $searchTerm . '%');
            });
        }
        
        // Handle category filtering
        if ($request->filled('category')) {
            $category = PostCategory::where('slug', $request->category)->first();
            if ($category) {
                $query->whereHas('categories', function ($q) use ($category) {
                    $q->where('post_categories.id', $category->id);
                });
            }
        }
        
        $posts = $query->paginate(12)->appends($request->all());
        
        return view('frontend.posts.index', compact('posts'));
    }

    /**
     * Display the specified post by slug.
     */
    public function showPost($slug)
    {
            if (  $slug === 'drug-license' ||  $slug === 'llp-compliance' ||  $slug === 'society-registration' ||  $slug === 'registration-for-12a-80g-certificate'  || $slug === 'trademark-renewal-in-india' ||$slug === 'tds-return-filing') {
                abort(410, 'This page has been permanently removed.');
            }
        // 1️⃣ Static page check
        if (view()->exists('frontend.staticPage.' . $slug)) {
            return view('frontend.staticPage.' . $slug);
        }
        // First try to find a published post with this slug  trade-license trademark-renewal-in-india
        
        // return $slug;
        
        // $post = Post::with(['categories', 'users'])
        //           ->where('slug', $slug)
        //           ->where('status', 'published')
        //           ->where('published_at', '<=', now())
        //           ->first();
        
        // if ($post) {
        //     return view('frontend.posts.show', compact('post'));
        // }
        
        // If no post found, try to find a published page with this slug
        $page = Page::where('slug', $slug)->whereNull('directry_label')->published()->first();
        
        if ($page) {
            // Determine which template to use
            $template = $page->template ?? 'default';
            
            // Check if the template exists using TemplateService
            if (!TemplateService::templateExists($template)) {
                $template = 'default';
            }
            
            // Check if the template view file exists
            $templateView = "frontend.pages.templates.{$template}";
            if (!view()->exists($templateView)) {
                $templateView = 'frontend.pages.templates.default';
            }
            
            // return $templateView;
            return view($templateView, compact('page'));
        }
        
        // If neither post nor page found, return 404
        abort(404);
    }

  public function blogShowPost($slug)
    {
        // First try to find a published post with this slug
        
        // return $slug;
        
        $post = Post::with(['categories', 'users'])
                   ->where('slug', $slug)
                   ->where('status', 'published')
                   ->where('published_at', '<=', now())
                   ->first();
        
        if ($post) {
            return view('frontend.posts.show', compact('post'));
        }
        
        // If no post found, try to find a published page with this slug
      
        // If neither post nor page found, return 404
        abort(404);
    }

    /**
     * Display posts by category.
     */
    public function postsByCategory(PostCategory $category)
    {
        $posts = $category->publishedPosts()
                         ->with(['categories', 'users'])
                         ->latest('published_at')
                         ->paginate(10);
        
        return view('frontend.posts.category', compact('posts', 'category'));
    }

    /**
     * Display the registration page.
     */
    public function registration()
    {
        $page = Page::where('slug', 'registration')->published()->firstOrFail();
        
        // Determine which template to use
        $template = $page->template ?? 'default';
        
        // Check if the template exists using TemplateService
        if (!TemplateService::templateExists($template)) {
            $template = 'default';
        }
        
        // Check if the template view file exists
        $templateView = "frontend.pages.templates.{$template}";
        if (!view()->exists($templateView)) {
            $templateView = 'frontend.pages.templates.default';
        }

        return view($templateView, compact('page'));
    }

    /**
     * Display the about us page.
     */
    public function aboutUsNew()
    {
        $page = Page::where('slug', 'about-us')->published()->firstOrFail();
        
        // Determine which template to use
        $template = $page->template ?? 'default';
        
        // Check if the template exists using TemplateService
        if (!TemplateService::templateExists($template)) {
            $template = 'default';
        }
        
        // Check if the template view file exists
        $templateView = "frontend.pages.templates.{$template}";
        if (!view()->exists($templateView)) {
            $templateView = 'frontend.pages.templates.default';
        }

        return view($templateView, compact('page'));
    }

    /**
     * Handle company registration form submission.
     * 
     * This method processes the company registration form and sends:
     * 1. Confirmation email to the client
     * 2. Notification email to the admin
     * 
     * Mail Configuration (update .env file for production):
     * - For Gmail: MAIL_MAILER=smtp, MAIL_HOST=smtp.gmail.com, MAIL_PORT=587, MAIL_ENCRYPTION=tls
     * - For Mailhog (dev): MAIL_MAILER=smtp, MAIL_HOST=mailhog, MAIL_PORT=1025, MAIL_ENCRYPTION=null
     * - For Mailpit (Laravel 10): MAIL_MAILER=smtp, MAIL_HOST=mailpit, MAIL_PORT=1025, MAIL_ENCRYPTION=null
     * 
     * Required .env variables:
     * - MAIL_FROM_ADDRESS: Sender email address
     * - MAIL_FROM_NAME: Sender name
     * - ADMIN_EMAIL: Admin email for notifications
     */
    public function handleRegistration(CompanyRegistrationRequest $request)
    {
        try {
            $registrationData = $request->validated();
            
            // Send confirmation email to client
            Mail::to($registrationData['email'])
                ->send(new CompanyRegistrationMail($registrationData, 'confirmation'));
            
            // Send notification email to admin
            $adminEmail = env('ADMIN_EMAIL', 'admin@sequelzone.com');
            Mail::to($adminEmail)
                ->send(new CompanyRegistrationMail($registrationData, 'admin'));
            
            $successMessage = 'Thank you for your inquiry! We have received your company registration request. Our expert team will contact you within 2-4 hours. Please check your email for confirmation details.';
            
            // Check if request is AJAX
            if ($request->wantsJson() || $request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => $successMessage
                ], 200);
            }
            
            return redirect()->back()->with('success', $successMessage);
                
        } catch (\Exception $e) {
            \Log::error('Company Registration Email Error: ' . $e->getMessage());
            \Log::error('Stack trace: ' . $e->getTraceAsString());
            
            $errorMessage = 'Thank you for your interest! We have received your request but there was an issue sending the confirmation email. Our team will still contact you within 2-4 hours at the provided contact details.';
            
            // Check if request is AJAX
            if ($request->wantsJson() || $request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => $errorMessage,
                    'warning' => 'Email notification failed but registration was successful.'
                ], 200);
            }
            
            return redirect()->back()->with('error', $errorMessage)->withInput();
        }
    }

    /**
     * Handle NOC registration form submission via AJAX.
     */
    public function storeNocRegistration(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'property_owner_name' => 'required|string|max:255',
            'property_address' => 'required|string',
            'business_name' => 'required|string|max:255',
            'authorized_person_name' => 'required|string|max:255',
            'owner_director_partner' => 'required|string|max:255',
            'relation' => 'required|string|max:255',
            'bill_type' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'noc_sign_date' => 'required|date',
            'owner_name' => 'required|string|max:255',
            'place' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $nocRegistration = NocRegistration::create($request->all());

            return response()->json([
                'success' => true,
                'message' => 'NOC Registration submitted successfully!',
                'data' => $nocRegistration
            ], 201);
        } catch (\Exception $e) {
            \Log::error('NOC Registration Error: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while submitting the form. Please try again.'
            ], 500);
        }
    }

    /**
     * Generate and download NOC certificate as PDF.
     */
    public function downloadNocCertificate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'property_owner_name' => 'required|string|max:255',
            'property_address' => 'required|string',
            'business_name' => 'required|string|max:255',
            'authorized_person_name' => 'required|string|max:255',
            'owner_director_partner' => 'required|string|max:255',
            'relation' => 'required|string|max:255',
            'bill_type' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'noc_sign_date' => 'required|date',
            'whatsapp_number' => 'required|digits:10',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $data = $request->all();
            $whatsappNumber = $request->whatsapp_number;
            
            // Format the date
            $formatted_date = \Carbon\Carbon::parse($data['noc_sign_date'])->format('d F Y');

            // Generate PDF
            $pdf = Pdf::loadView('frontend.noc-certificate-pdf', [
                'data' => $data,
                'formatted_date' => $formatted_date
            ]);

            // Set paper size and orientation
            $pdf->setPaper('A4', 'portrait');

            // Generate filename
            $filename = 'NOC_Certificate_' . str_replace(' ', '_', $data['property_owner_name']) . '_' . date('Y-m-d') . '.pdf';

            // Save NOC registration data including WhatsApp number
            try {
                NocRegistration::create([
                    'property_owner_name' => $data['property_owner_name'],
                    'property_address' => $data['property_address'],
                    'business_name' => $data['business_name'],
                    'authorized_person_name' => $data['authorized_person_name'],
                    'owner_director_partner' => $data['owner_director_partner'],
                    'relation' => $data['relation'],
                    'bill_type' => $data['bill_type'],
                    'state' => $data['state'],
                    'noc_sign_date' => $data['noc_sign_date'],
                    'whatsapp_number' => $whatsappNumber,
                ]);
            } catch (\Exception $e) {
                \Log::error('NOC Registration Save Error: ' . $e->getMessage());
            }

            // Save PDF temporarily
            $pdfPath = storage_path('app/public/temp/' . $filename);
            
            // Create temp directory if it doesn't exist
            if (!file_exists(storage_path('app/public/temp'))) {
                mkdir(storage_path('app/public/temp'), 0755, true);
            }
            
            // Save PDF to storage
            $pdf->save($pdfPath);

            // Send WhatsApp message with document
            try {
                // Read PDF file and encode as base64
                $pdfBase64 = base64_encode(file_get_contents($pdfPath));
                
                $this->sendWhatsAppDocument($whatsappNumber, $data['property_owner_name'], $data['business_name'], $pdfBase64, $filename);
                
                // Delete temp file after sending
                if (file_exists($pdfPath)) {
                    unlink($pdfPath);
                }
                
                return response()->json([
                    'success' => true,
                    'message' => 'NOC Certificate has been sent to your WhatsApp number successfully! Please check your WhatsApp.'
                ], 200);
                
            } catch (\Exception $e) {
                \Log::error('WhatsApp send error: ' . $e->getMessage());
                
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to send document to WhatsApp. Please try again.'
                ], 500);
            }

        } catch (\Exception $e) {
            \Log::error('NOC PDF Generation Error: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while generating the PDF. Please try again.'
            ], 500);
        }
    }

    /**
     * Send WhatsApp document with download link
     * 
     * CallMeBot API can only send text messages, not files.
     * So we send a message with a download link to the PDF.
     */
    private function sendWhatsAppDocument($phoneNumber, $ownerName, $businessName, $pdfBase64, $filename)
    {
        // Format phone number to international format (add +91 for India)
        $formattedPhone = '+91' . $phoneNumber;
        
        $message = "✅ *NOC Certificate Generated Successfully!*\n\n";
        $message .= "Dear *{$ownerName}*,\n\n";
        $message .= "Your NOC Certificate for *{$businessName}* has been generated.\n\n";
        $message .= "📄 *Document Details:*\n";
        $message .= "• Property Owner: {$ownerName}\n";
        $message .= "• Business Name: {$businessName}\n";
        $message .= "• Generated On: " . date('d M Y, h:i A') . "\n\n";
        $message .= "Thank you for using our service!\n";
        $message .= "- *Bizfoc Team*";

        // Log the notification
        \Log::info('WhatsApp document prepared for: ' . $formattedPhone);
        \Log::info('Document filename: ' . $filename);

        // Using UltraMsg API for WhatsApp
        // Configuration:
        // Token: 11z5hzeqmp8s6r0d
        // Instance ID: instance148741
        // From number: 7834998131 (configured in UltraMsg dashboard)
        
        $token = env('ULTRAMSG_TOKEN');
        $instanceId = env('ULTRAMSG_INSTANCE_ID', 'instance148741');
        
        if (!$token) {
            \Log::error('UltraMsg token not configured. Add ULTRAMSG_TOKEN to .env file');
            throw new \Exception('WhatsApp API not configured. Please contact administrator.');
        }
        
        try {
            // Prepare parameters for document sending (as per UltraMsg documentation)
            // Using base64 encoded PDF content
            $params = array(
                'token' => $token,
                'to' => $formattedPhone,
                'filename' => $filename,
                'document' => 'data:application/pdf;base64,' . $pdfBase64,
                'caption' => $message,
                'priority' => '1',
                'referenceId' => '',
                'nocache' => false,
                'msgId' => '',
            );
            
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.ultramsg.com/{$instanceId}/messages/document",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_SSL_VERIFYHOST => 0,
                CURLOPT_SSL_VERIFYPEER => 0,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => http_build_query($params),
                CURLOPT_HTTPHEADER => array(
                    "content-type: application/x-www-form-urlencoded"
                ),
            ));
            
            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            
            if ($err) {
                \Log::error('UltraMsg cURL Error: ' . $err);
                throw new \Exception('Failed to send WhatsApp document: ' . $err);
            }
            
            \Log::info('WhatsApp document sent via UltraMsg: ' . $response);
            
            // Check if response contains error
            $responseData = json_decode($response, true);
            if (isset($responseData['error'])) {
                $errorMessage = is_array($responseData['error']) ? json_encode($responseData['error']) : $responseData['error'];
                \Log::error('UltraMsg API Error Response: ' . $errorMessage);
                throw new \Exception('WhatsApp API error: ' . $errorMessage);
            }
            
            return true;
            
        } catch (\Exception $e) {
            \Log::error('UltraMsg API error: ' . $e->getMessage());
            throw $e;
        }

        // OPTION 2: Using Twilio (Requires paid account but has $15 free trial)
        // Uncomment and configure when ready
        /*
        try {
            $twilio = new \Twilio\Rest\Client(
                env('TWILIO_SID'),
                env('TWILIO_AUTH_TOKEN')
            );
            
            $twilio->messages->create(
                "whatsapp:{$formattedPhone}",
                [
                    'from' => 'whatsapp:' . env('TWILIO_WHATSAPP_FROM'),
                    'body' => $message
                ]
            );
            
            \Log::info('WhatsApp sent via Twilio successfully');
        } catch (\Exception $e) {
            \Log::error('Twilio API error: ' . $e->getMessage());
        }
        */

        // OPTION 3: Meta WhatsApp Cloud API (1000 free messages/month)
        // Uncomment and configure when ready
        /*
        try {
            $accessToken = env('WHATSAPP_ACCESS_TOKEN');
            $phoneNumberId = env('WHATSAPP_PHONE_NUMBER_ID');
            
            $curl = curl_init();
            curl_setopt_array($curl, [
                CURLOPT_URL => "https://graph.facebook.com/v18.0/{$phoneNumberId}/messages",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST => true,
                CURLOPT_HTTPHEADER => [
                    "Authorization: Bearer {$accessToken}",
                    "Content-Type: application/json"
                ],
                CURLOPT_POSTFIELDS => json_encode([
                    'messaging_product' => 'whatsapp',
                    'to' => $formattedPhone,
                    'type' => 'text',
                    'text' => ['body' => $message]
                ])
            ]);
            
            $response = curl_exec($curl);
            curl_close($curl);
            
            \Log::info('WhatsApp sent via Cloud API: ' . $response);
        } catch (\Exception $e) {
            \Log::error('WhatsApp Cloud API error: ' . $e->getMessage());
        }
        */

        return true;
    }

    /**
     * Handle WhatsApp subscription from footer form
     */
    public function whatsappSubscription(Request $request)
    {
        try {
            // Validate the phone number
            $validator = Validator::make($request->all(), [
                'whatsapp_number' => [
                    'required',
                    'digits:10',
                    'regex:/^[6-9][0-9]{9}$/' // Valid Indian mobile number
                ]
            ], [
                'whatsapp_number.required' => 'Please enter your mobile number',
                'whatsapp_number.digits' => 'Mobile number must be exactly 10 digits',
                'whatsapp_number.regex' => 'Please enter a valid Indian mobile number'
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => $validator->errors()->first()
                ], 422);
            }

            $phoneNumber = $request->whatsapp_number;
            
            // Send professional welcome message via WhatsApp
            $this->sendWhatsAppSubscriptionMessage($phoneNumber);

            // Log the subscription
            \Log::info('WhatsApp subscription: ' . $phoneNumber);

            return response()->json([
                'success' => true,
                'message' => 'Thank you for subscribing! You will receive compliance due date updates on WhatsApp.'
            ]);

        } catch (\Exception $e) {
            \Log::error('WhatsApp subscription error: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'Unable to process your subscription. Please try again later.'
            ], 500);
        }
    }

    /**
     * Send WhatsApp subscription welcome message using UltraMsg API
     */
    private function sendWhatsAppSubscriptionMessage($phoneNumber)
    {
        // Format phone number to international format
        $formattedPhone = '+91' . $phoneNumber;
        
        // Professional welcome message
        $message = "🎉 *Welcome to Patron Accounting!*\n\n";
        $message .= "Thank you for subscribing to our Compliance Due Date Updates!\n\n";
        $message .= "📅 *What you'll receive:*\n";
        $message .= "• Timely reminders for GST filing\n";
        $message .= "• Income Tax due dates\n";
        $message .= "• TDS return deadlines\n";
        $message .= "• Other compliance updates\n\n";
        $message .= "💼 *Our Services:*\n";
        $message .= "• Company Registration\n";
        $message .= "• GST Registration & Filing\n";
        $message .= "• Income Tax Returns\n";
        $message .= "• Accounting & Bookkeeping\n\n";
        $message .= "📞 *Contact Us:*\n";
        $message .= "Phone: +91 945 945 6700\n";
        $message .= "Email: sales@patronaccounting.com\n\n";
        $message .= "We're here to make compliance easier for you!\n\n";
        $message .= "_Stay updated, stay compliant!_\n";
        $message .= "- *Team Patron Accounting*";

        // UltraMsg API configuration
        $token = env('ULTRAMSG_TOKEN');
        $instanceId = env('ULTRAMSG_INSTANCE_ID', 'instance148741');
        
        if (!$token) {
            \Log::error('UltraMsg token not configured');
            throw new \Exception('WhatsApp API not configured');
        }
        
        try {
            // Prepare parameters for text message
            $params = array(
                'token' => $token,
                'to' => $formattedPhone,
                'body' => $message,
                'priority' => '1',
            );
            
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.ultramsg.com/{$instanceId}/messages/chat",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_SSL_VERIFYHOST => 0,
                CURLOPT_SSL_VERIFYPEER => 0,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => http_build_query($params),
                CURLOPT_HTTPHEADER => array(
                    "content-type: application/x-www-form-urlencoded"
                ),
            ));
            
            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            
            if ($err) {
                \Log::error('UltraMsg cURL Error: ' . $err);
                throw new \Exception('Failed to send WhatsApp message: ' . $err);
            }
            
            \Log::info('WhatsApp subscription message sent to: ' . $formattedPhone);
            \Log::info('UltraMsg API Response: ' . $response);
            
            // Check for authentication error in response
            $responseData = json_decode($response, true);
            if (isset($responseData['error']) || (isset($responseData['sent']) && $responseData['sent'] === 'false')) {
                \Log::error('UltraMsg API Error: ' . $response);
                throw new \Exception('WhatsApp API error: ' . ($responseData['message'] ?? 'Unknown error'));
            }
            
            return true;
            
        } catch (\Exception $e) {
            \Log::error('WhatsApp subscription message error: ' . $e->getMessage());
            throw $e;
        }
    }

    public function authorhub($author_slug)
    {
        // Convert slug to name lookup since users table has no slug column.
        // 'ca-sundram-gupta' → match by name LIKE '%Sundram Gupta%' or similar.
         if ($author_slug !== 'ca-sundaram-gupta') {
            abort(404);
        }

        $searchName = str_replace('-', ' ', $author_slug);
        
        $author = \App\Models\User::where(function($q) use ($searchName, $author_slug) {
                $q->where('name', 'LIKE', '%' . $searchName . '%')
                ->orWhere('name', 'LIKE', '%' . str_ireplace('ca ', '', $searchName) . '%');
            })
            ->firstOrFail();
        
        return view('frontend.authorhub', compact('author'));
    }

 public function caAuthor()
{
    $author = \App\Models\User::where('name', 'LIKE', '%Puja%')
        ->where('name', 'LIKE', '%Pradhan%')
        ->first();

    $posts = $author
        ? $author->posts()->published()->with('categories')->latest('published_at')->take(9)->get()
        : collect();

    return view('frontend.ca-puja-pradhan', compact('author', 'posts'));
}

public function caSundram()
{
    // Founder's user record (DB stores the name with a variant spelling, so
    // match either "Sundram" or "Sundaram" alongside "Gupta").
    $author = \App\Models\User::where('name', 'LIKE', '%Gupta%')
        ->where(function ($q) {
            $q->where('name', 'LIKE', '%Sundram%')
              ->orWhere('name', 'LIKE', '%Sundaram%');
        })
        ->first();

    $posts = $author
        ? $author->posts()->published()->with('categories')->latest('published_at')->take(9)->get()
        : collect();

    return view('frontend.ca-sundram-gupta', compact('author', 'posts'));
}
}
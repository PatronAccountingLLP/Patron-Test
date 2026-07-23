<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;
use App\Models\PageCategory;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            [
                'title' => 'About Us',
                'slug' => 'about-us',
                'content' => '<h2>About Our SequelZone Laravel CMS</h2><p>Our SequelZone Laravel CMS combines the best features of SequelZone with the power and elegance of the Laravel framework.</p><p>We built this CMS to provide:</p><ul><li>Easy content management</li><li>Flexible menu system</li><li>Robust user management</li><li>Clean, modern interface</li><li>Developer-friendly architecture</li></ul><p>Whether you\'re a blogger, business owner, or developer, our CMS provides the tools you need to create and manage your website content effectively.</p>',
                'status' => 'published',
                'published_at' => now(),
            ],
            [
                'title' => 'Contact Us',
                'slug' => 'contact-us',
                'content' => '<h2>Get in Touch</h2><p>We\'d love to hear from you! Contact us using the information below:</p><div class="row"><div class="col-md-6"><h4>Email</h4><p>info@wplaravel.com<br>support@wplaravel.com</p><h4>Phone</h4><p>+1 (555) 123-4567</p></div><div class="col-md-6"><h4>Address</h4><p>123 Laravel Street<br>Framework City, FC 12345<br>United States</p></div></div><p>You can also follow us on social media for updates and news.</p>',
                'status' => 'published',
                'published_at' => now(),
            ],
            [
                'title' => 'Privacy Policy',
                'slug' => 'privacy-policy',
                'content' => '<h2>Privacy Policy</h2><p>This Privacy Policy describes how we collect, use, and protect your personal information when you use our SequelZone Laravel CMS.</p><h3>Information We Collect</h3><p>We may collect the following types of information:</p><ul><li>Personal identification information (name, email address, etc.)</li><li>Usage data and analytics</li><li>Cookies and tracking technologies</li></ul><h3>How We Use Your Information</h3><p>We use the collected information to:</p><ul><li>Provide and maintain our service</li><li>Improve user experience</li><li>Send important notifications</li><li>Comply with legal obligations</li></ul><h3>Data Protection</h3><p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction.</p><p>For more information about our privacy practices, please contact us.</p>',
                'status' => 'published',
                'published_at' => now(),
            ],
            [
                'title' => 'Terms of Service',
                'slug' => 'terms-of-service',
                'content' => '<h2>Terms of Service</h2><p>By using our SequelZone Laravel CMS, you agree to comply with and be bound by the following terms and conditions.</p><h3>Use of Service</h3><p>You may use our CMS for lawful purposes only. You agree not to:</p><ul><li>Violate any applicable laws or regulations</li><li>Infringe on intellectual property rights</li><li>Distribute malicious software</li><li>Interfere with service operation</li></ul><h3>User Content</h3><p>You are responsible for all content you create, upload, or share through our CMS. You retain ownership of your content but grant us a license to use it as necessary to provide our services.</p><h3>Limitation of Liability</h3><p>Our service is provided "as is" without warranties. We are not liable for any damages arising from your use of the CMS.</p><p>These terms may be updated periodically. Continued use constitutes acceptance of any changes.</p>',
                'status' => 'published',
                'published_at' => now(),
            ],
            [
                'title' => 'FAQ',
                'slug' => 'faq',
                'content' => '<h2>Frequently Asked Questions</h2><h3>What is SequelZone Laravel CMS?</h3><p>SequelZone Laravel CMS is a content management system that combines the user-friendly interface of SequelZone with the robust architecture of the Laravel framework.</p><h3>How do I create a new post?</h3><p>To create a new post, log into the admin panel and navigate to Posts > Add New Post. Fill in the title, content, and other details, then publish your post.</p><h3>Can I customize the appearance?</h3><p>Yes, you can customize menus, categories, and content structure through the admin panel. Advanced customization requires modifying the Laravel views and styles.</p><h3>Is it SEO-friendly?</h3><p>Yes, the CMS includes features like custom slugs, meta descriptions, and clean URLs to help with search engine optimization.</p><h3>How do I manage users?</h3><p>User management is handled through Laravel\'s built-in authentication system. Administrators can manage user roles and permissions.</p><h3>Can I upload images?</h3><p>Yes, the CMS supports image uploads for featured images and content. Files are stored securely and served efficiently.</p>',
                'status' => 'published',
                'published_at' => now(),
            ]
        ];

        foreach ($pages as $pageData) {
            $page = Page::create($pageData);
            
            // Attach categories based on page type
            if (in_array($page->slug, ['about-us', 'contact-us'])) {
                $category = PageCategory::where('slug', 'main-pages')->first();
                if ($category) {
                    $page->categories()->attach($category);
                }
            } elseif (in_array($page->slug, ['privacy-policy', 'terms-of-service'])) {
                $category = PageCategory::where('slug', 'legal')->first();
                if ($category) {
                    $page->categories()->attach($category);
                }
            } elseif (in_array($page->slug, ['faq'])) {
                $category = PageCategory::where('slug', 'help')->first();
                if ($category) {
                    $page->categories()->attach($category);
                }
            }
        }
    }
}
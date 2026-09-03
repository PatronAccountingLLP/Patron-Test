<?php

namespace App\Support;

/**
 * Turns a URL path into the name of the page, for the enquiry messages.
 *
 * partials/bigin-form already does this to tag a lead with the service it came
 * from, but only pages that actually render the form publish a name. The
 * calculators, and any other page with no form on it, published nothing - so the
 * floating WhatsApp button in partials/footer fell back to "I just visited your
 * website" even on a page with a perfectly good name of its own.
 *
 * This is that same de-slug, callable from anywhere. The rules are copied from
 * bigin-form deliberately, so a page's floating button and its in-page buttons
 * cannot disagree about what the page is called:
 *
 *   /tools/advance-tax-calculator   -> Advance Tax Calculator
 *   /gst-registration               -> GST Registration
 *   /stock-audit-mumbai             -> Stock Audit in Mumbai
 *   /accounting-services/pune       -> Accounting Services in Pune
 *
 * bigin-form is left alone on purpose. Its copy of this logic decides how leads
 * are filed in the CRM, and rewiring it to call this class would put a working
 * lead pipeline at risk for a cosmetic gain.
 */
class PageTopic
{
    /** Cities that appear as a trailing segment or suffix and read as "in <City>". */
    private const CITIES = [
        'delhi', 'mumbai', 'pune', 'gurugram', 'gurgaon', 'bangalore', 'bengaluru', 'chennai',
        'kolkata', 'hyderabad', 'ahmedabad', 'noida', 'jaipur', 'surat', 'lucknow', 'indore',
        'chandigarh', 'coimbatore', 'kochi', 'thane', 'nagpur', 'bhopal', 'patna', 'vadodara',
    ];

    /** Words that stay fully capitalised. */
    private const ACRONYMS = [
        'gst', 'itr', 'tds', 'tcs', 'roc', 'llp', 'opc', 'msme', 'iec', 'esop', 'fssai', 'fcra',
        'pan', 'tan', 'ngo', 'aoa', 'moa', 'ca', 'cs', 'imf', 'epf', 'esic', 'nic', 'hsn', 'ifsc',
        'caro', 'aoc', 'adt', 'chg', 'stk', 'egm', 'agm', 'ncd', 'rpt', 'posh', 'fmv', 'cma',
        'mis', 'ind', 'usa', 'uk', 'uae', 'din', 'kyc', 'ppf', 'nps', 'sez', 'stpi', 'edf',
        'qrmp', 'gstr', 'gstat', 'mca', 'sebi', 'rbi', 'fema', 'ais', 'sa', 'fc',
    ];

    /** Words left lowercase unless they open the name. */
    private const SMALL = ['for', 'of', 'in', 'and', 'to', 'the', 'a', 'an', 'vs', 'by', 'on', 'with'];

    /**
     * Paths with no service of their own. These must keep the generic message:
     * "I just visited your Contact Us page" reads worse than "your website", and
     * a hub or listing page is not a thing anyone enquires about by name.
     */
    private const GENERIC = [
        '', 'contact-us', 'contact', 'about-us', 'about', 'tools', 'blog', 'search',
        'privacy-policy', 'terms-and-conditions', 'disclaimer', 'sitemap', 'careers',
    ];

    /**
     * The page's name, or '' when the page has no name of its own and the caller
     * should use the generic message.
     */
    public static function fromPath(?string $path): string
    {
        $path = trim((string) $path, '/');

        if (in_array(strtolower($path), self::GENERIC, true)) {
            return '';
        }

        $segments = array_values(array_filter(explode('/', strtolower($path))));
        if (! $segments) {
            return '';
        }

        // A trailing /pune reads as "in Pune" on the segment before it.
        $city = null;
        if (in_array(end($segments), self::CITIES, true)) {
            $city = array_pop($segments);
        }
        if (! $segments) {
            return '';
        }

        $slug  = preg_replace('/\.(html?|php)$/i', '', end($segments));
        $parts = array_values(array_filter(explode('-', $slug)));

        // ...and so does a trailing -pune on the slug itself.
        if ($city === null && $parts && in_array(end($parts), self::CITIES, true)) {
            $city = array_pop($parts);
        }

        $words = [];
        foreach ($parts as $i => $word) {
            if (preg_match('/^\d+[a-z]$/i', $word)) {          // 12a, 80g
                $words[] = strtoupper($word);
            } elseif (in_array($word, self::ACRONYMS, true)) {
                $words[] = strtoupper($word);
            } elseif ($i > 0 && in_array($word, self::SMALL, true)) {
                $words[] = $word;
            } else {
                $words[] = ucfirst($word);
            }
        }

        $name = trim(implode(' ', $words));
        if ($name !== '' && $city !== null) {
            $name .= ' in '.ucfirst($city);
        }

        return $name;
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

/**
 * Inserts the supporting blog:
 *   "Bookkeeping vs Accounting: What's the Difference for an Indian Business?"
 *   /blog/bookkeeping-vs-accounting-difference-india
 * Idempotent: skips if the slug already exists. Creates the
 * "Accounting Basics" category and the CA author if absent, then wires pivots.
 * Content/FAQ are pre-generated and CA/Gemini fact-checked.
 */
return new class extends Migration
{
    public function up(): void
    {
        $slug = 'bookkeeping-vs-accounting-difference-india';
        if (DB::table('posts')->where('slug', $slug)->exists()) {
            return; // already injected
        }

        $now = Carbon::now();

        // --- Category ---------------------------------------------------
        $catId = DB::table('post_categories')->where('slug', 'accounting-basics')->value('id');
        if (! $catId) {
            $catId = DB::table('post_categories')->insertGetId([
                'name' => 'Accounting Basics',
                'slug' => 'accounting-basics',
                'description' => 'Foundational accounting and bookkeeping explainers for Indian businesses.',
                'created_at' => $now, 'updated_at' => $now,
            ]);
        }

        // --- Author -----------------------------------------------------
        $userId = DB::table('users')->where('email', 'sundram@patronaccounting.com')->value('id');
        if (! $userId) {
            $userId = DB::table('users')->insertGetId([
                'name' => 'CA Sundram Gupta',
                'email' => 'sundram@patronaccounting.com',
                'password' => bcrypt(Str::random(40)),
                'role' => 'editor',
                'created_at' => $now, 'updated_at' => $now,
            ]);
        }

        // --- Content (pre-generated) ------------------------------------
        $content = <<<'HTML'
<p>Most business owners in India use the words interchangeably, and it rarely causes a problem, until a bank asks for a signed balance sheet, an auditor asks for a clean trial balance, or the GST department asks for records you assumed your "accountant" was keeping. At that point the difference between bookkeeping and accounting stops being academic. One is the disciplined recording of what happened; the other is the classification and interpretation of what it means. This guide sets out where one ends and the other begins, in the specific context of Indian statutory records.</p>

<h2>What is bookkeeping?</h2>
<p>Bookkeeping is the recording stage of the accounting process. It is the day-to-day work of entering every transaction into the books of account in date order: each sale invoice, purchase bill, bank receipt, cash payment and journal voucher, posted to the correct ledger. A business raising 400 invoices a month is, in bookkeeping terms, doing 400 postings plus the payments, receipts and reconciliations that go with them.</p>
<p>The bookkeeper works to a system, not to judgement. In India that system is almost always double entry, where every transaction touches at least two accounts and total debits equal total credits. The three rules that govern which account is debited and which is credited are the <a href="/blog/golden-rules-of-accounting-with-examples">golden rules of accounting, worked through with journal-entry examples</a> in a separate guide. Bookkeeping ends with a trial balance: a list of every ledger balance that proves the debits and credits still agree. If they do not, nothing further can be relied on.</p>
<p>Typical bookkeeping deliverables are the cash book, the bank book, the sales and purchase registers, the general ledger and the reconciled bank statement. It is detailed, repetitive, deadline-driven work, and it is the foundation everything else stands on. Whether you keep it in-house or outsource it changes the cost but not the task; we compare the two routes in <a href="/blog/in-house-vs-outsourced-bookkeeping-cost-india">in-house versus outsourced bookkeeping in India</a>.</p>

<h2>What is accounting?</h2>
<p>Accounting is the wider process that begins where bookkeeping ends. It takes the recorded transactions and classifies, adjusts, summarises and interprets them so that someone can make a decision. Where the bookkeeper posts what happened, the accountant asks what it means and how it must be presented.</p>
<p>The accounting stage adds the entries a bookkeeper does not make on a daily basis: depreciation on fixed assets, provisions for expenses incurred but not yet billed, prepaid and accrued adjustments, closing stock valuation, and the year-end closing entries. It then compiles the financial statements, principally the profit and loss account, the balance sheet and the cash flow statement, together with the notes that accompany them, in the format the law requires. For a company, that format is Schedule III of the Companies Act, 2013. The output is not a list of balances but a true and fair view of the business.</p>
<p>Accounting also covers the analysis that follows: reading margins, comparing periods, computing the ratios a lender or investor will ask about, and preparing the figures that feed income tax, GST annual returns and management reporting. This is the layer most owners actually mean when they say they want "the accounts done", and it is the core of professional <a href="/accounting-services">accounting services in India</a>.</p>

<h2>Bookkeeping vs accounting: the differences at a glance</h2>
<p>The two are not competitors; they are consecutive stages of the same cycle. The table below sets out the five differences that matter most in practice.</p>
<table>
  <thead>
    <tr><th>Basis</th><th>Bookkeeping</th><th>Accounting</th></tr>
  </thead>
  <tbody>
    <tr><td>Purpose</td><td>To record transactions accurately and in order</td><td>To classify, interpret and report on those records</td></tr>
    <tr><td>Stage</td><td>First stage; the input</td><td>Later stage; builds on bookkeeping</td></tr>
    <tr><td>Main output</td><td>Ledgers and a trial balance</td><td>Profit and loss, balance sheet, cash flow statement</td></tr>
    <tr><td>Judgement involved</td><td>Rule-based, little judgement</td><td>Requires judgement on estimates and disclosure</td></tr>
    <tr><td>Who usually does it</td><td>A bookkeeper or accounts assistant</td><td>An accountant, often a qualified CA for the close</td></tr>
  </tbody>
</table>
<p>A useful shorthand: bookkeeping is doing the sums, accounting is deciding what the sums are telling you and how to present them to the outside world.</p>

<h2>What comes first, bookkeeping or accounting?</h2>
<p>Bookkeeping comes first, and accounting depends on it. You cannot prepare a reliable balance sheet from books that do not balance, and you cannot interpret figures that were never recorded correctly. The sequence is fixed: transactions are recorded (bookkeeping), a trial balance is drawn, adjustments are passed, and only then are financial statements prepared and analysed (accounting). This is also why a rushed year-end is usually a bookkeeping problem wearing an accounting deadline. If postings and reconciliations have slipped through the year, the accountant spends the closing weeks fixing records rather than interpreting them.</p>

<h2>Bookkeeper vs accountant: is one higher than the other?</h2>
<p>They are different roles, not a ranking. A bookkeeper needs accuracy, consistency and a firm grip on the software and the postings; formal qualifications are not mandated by law for the recording work. An accountant needs the same grounding plus the ability to apply accounting standards, exercise judgement on estimates, and present statements that stand up to a lender or a tax officer. In India, applying the accounting standards at the close and signing off the statutory audit fall to a Chartered Accountant regulated by the ICAI, though responsibility for the financial statements themselves rests with the company's management.</p>
<p>The honest position is that the two roles overlap heavily at the small-business end. Many qualified accountants started by keeping books, and in a small firm one competent person often does both. The distinction becomes real as the business grows, when the recording volume and the interpretation both need dedicated attention.</p>

<h2>Do you need both a bookkeeper and an accountant?</h2>
<p>For most small Indian businesses, yes, but not necessarily as two separate hires. What you always need is both functions performed: the books kept accurately through the month, and the accounts closed and interpreted at period end. Who performs them is a question of scale.</p>
<p>In a young business with modest volume, one qualified person handles both, and no law requires the roles to be split. Practical control starts to suffer once monthly volume passes roughly 300 to 500 entries, or once GST registrations cross two states and reconciliation work doubles. There is also a control reason to separate them: the person who records a payment should not be the only person who reviews it. A monthly discipline helps regardless of who owns the work, and a <a href="/blog/monthly-bookkeeping-checklist-india">monthly bookkeeping checklist</a> keeps the recording stage from silently falling behind. Firms that would rather not carry the function in-house use <a href="/accounting-bookkeeping-services">outsourced accounting and bookkeeping services</a> that cover posting, reconciliation and the year-end close under one arrangement.</p>

<h2>What Indian law expects from your books</h2>
<p>The distinction is not just good practice; parts of it are statutory. Three provisions matter for most businesses.</p>
<ul>
  <li><strong>Companies Act, 2013, Section 128.</strong> Every company must keep books of account that give a true and fair view of its affairs. That obligation covers both stages together, the recording and the accounting built on top of it.</li>
  <li><strong>CGST Act, Section 35 with Rule 56.</strong> A registered person must keep separate accounts of production, inward and outward supplies, stock, input tax credit, output tax and advances at every place of business. These go beyond the ledgers used for the financial statements, and they must be preserved for 72 months from the due date of the annual return.</li>
  <li><strong>Companies Act, 2013, Section 139.</strong> Statutory financial statements, once prepared, are examined by an auditor appointed under this section, which brings us to where auditing fits.</li>
</ul>

<h2>Where does auditing fit in?</h2>
<p>Auditing is a third, separate stage that comes after both bookkeeping and accounting are complete. The auditor does not record or prepare; they independently examine the finished financial statements and report on whether they give a true and fair view. A bookkeeper records, an accountant prepares, and a statutory auditor reports. The roles are deliberately kept apart: Section 144 of the Companies Act, 2013 bars a company's auditor from also providing accounting and bookkeeping services to the same audit client, precisely so that no one signs off on their own work.</p>

<h2>When to bring in a professional</h2>
<p>The practical takeaway is simple. If your books are current and your trial balance closes cleanly each month, your bookkeeping is under control and the accounting has something solid to work with. If year-end is a scramble, or a lender's question sends you digging through spreadsheets, the gap is usually in the recording stage, not the interpretation. Getting both stages running to a monthly rhythm, rather than a yearly panic, is what keeps the accounts audit-ready and the decisions well informed. If you would like a partner CA to look at how your books are kept and what the close is costing you in rework, Patron offers a free 15-minute review.</p>
HTML;

        $keyPoints = <<<'KP'
<p>Bookkeeping is the <strong>recording</strong> stage: entering every sale, purchase, receipt and payment into the books in date order, ending with a trial balance. Accounting is the <strong>interpreting</strong> stage: it classifies, adjusts and summarises those records into financial statements a business, a bank or the tax department can rely on. Bookkeeping is part of accounting, it comes first, and most small Indian firms need both, whether one person or a team does the work.</p>
KP;

        $faqItems = [
            ['question' => 'What is bookkeeping in accounting?', 'answer' => 'Bookkeeping is the recording stage of accounting, covering entry of every sale, purchase, receipt and payment into the day books and ledgers in date order, ending with a trial balance. Accounting then classifies, summarises and interprets those records into financial statements. A business posting 400 invoices a month is doing bookkeeping; preparing its Schedule III balance sheet is accounting.'],
            ['question' => 'Does accounting include bookkeeping?', 'answer' => 'Yes, bookkeeping is the first stage of the accounting process, so accounting includes it. Accounting adds adjustment entries, depreciation, provisions, closing entries and financial statement preparation on top of the bookkeeping records. Section 128 of the Companies Act requires a company to keep books of account that give a true and fair view, which covers both stages together.'],
            ['question' => 'How is auditing related to accounting and bookkeeping?', 'answer' => 'Auditing is an independent examination carried out after bookkeeping and accounting are complete, testing whether the financial statements give a true and fair view. A bookkeeper records, an accountant prepares, and a statutory auditor appointed under Section 139 reports. The same firm cannot write the books and audit them, because Section 144 bars an auditor from providing accounting services to its audit client.'],
            ['question' => 'Can one person handle both bookkeeping and accounting in a small business?', 'answer' => 'Yes, in a small Indian business one qualified person often does both, and no law requires the roles to be separate. Practical control starts to suffer once monthly volume passes roughly 300 to 500 entries or GST registrations cross two states. Splitting entry from review also stops the person who records a payment from also approving it.'],
            ['question' => 'Does GST law require records beyond the accounting ledgers?', 'answer' => 'Yes, Section 35 of the CGST Act with Rule 56 requires a registered person to keep separate accounts of production, inward and outward supplies, stock, input tax credit, output tax and advances at every place of business. These go past the ledgers used for financial statements, and must be preserved for 72 months from the due date of the annual return.'],
        ];

        // --- Post -------------------------------------------------------
        $postId = DB::table('posts')->insertGetId([
            'title' => 'Bookkeeping vs Accounting: What\'s the Difference for an Indian Business?',
            'slug' => $slug,
            'content' => $content,
            'key_points' => $keyPoints,
            'excerpt' => 'Bookkeeping records; accounting interprets. Where one ends and the other starts. Set out with the working, not just the rule. Reviewed by our CA team.',
            'description' => 'Bookkeeping records; accounting interprets. Where one ends and the other starts. Set out with the working, not just the rule. Reviewed by our CA team.',
            'featured_image' => null,
            'meta_title' => 'What is the difference: A Practical Guide for India',
            'meta_description' => 'Bookkeeping records; accounting interprets. Where one ends and the other starts. Set out with the working, not just the rule. Reviewed by our CA team.',
            'meta_keywords' => 'difference between bookkeeping and accounting, bookkeeping vs accounting, difference between a bookkeeper and an accountant, is bookkeeping part of accounting',
            'seo_canonical_url' => 'https://www.patronaccounting.com/blog/bookkeeping-vs-accounting-difference-india',
            'faq_enabled' => 1,
            'faq_title' => 'Frequently asked questions',
            'faq_subtitle' => 'Bookkeeping, accounting and where the two roles meet in Indian practice.',
            'faq_items' => json_encode($faqItems, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
            'status' => 'published',
            'published_at' => '2026-07-24 09:30:00',
            'created_at' => $now, 'updated_at' => $now,
        ]);

        // --- Pivots -----------------------------------------------------
        DB::table('post_category_post')->insert([
            'post_id' => $postId, 'post_category_id' => $catId,
            'created_at' => $now, 'updated_at' => $now,
        ]);
        DB::table('post_user')->insert([
            'post_id' => $postId, 'user_id' => $userId,
            'created_at' => $now, 'updated_at' => $now,
        ]);
    }

    public function down(): void
    {
        $postId = DB::table('posts')->where('slug', 'bookkeeping-vs-accounting-difference-india')->value('id');
        if ($postId) {
            DB::table('post_category_post')->where('post_id', $postId)->delete();
            DB::table('post_user')->where('post_id', $postId)->delete();
            DB::table('posts')->where('id', $postId)->delete();
        }
    }
};

<?php

/*
 * Testimonials - the reviews shown sitewide.
 * ---------------------------------------------------------------------------
 * THE list. resources/views/partials/testimonials.blade.php reads it, so every
 * page shows what is written here and editing a review changes it everywhere.
 *
 * Before this file existed the reviews were pasted into each page, and they
 * drifted: the same ten real Google reviewers appeared across the estate with
 * different words in their mouths - one name carried thirty different quotes,
 * several describing services the reviewer had never mentioned. Everything
 * quoted here is attributed to a named, real person, so it has to be what that
 * person actually wrote. Do not reword a review to suit a page.
 *
 * If a page needs a different set, pass it to the partial rather than editing
 * this file:
 *
 *     @include('partials.testimonials', ['reviews' => [...]])
 *
 * A video entry needs 'video' and 'poster'. Both live under
 * /storage/testimonials/, which production serves from the repo root.
 */

return [

    /*
     * How a page picks its reviews, once these come from the database.
     * ------------------------------------------------------------------
     * Nearly all of Patron's Google reviews sit on the Pune listing. The other
     * city listings have very few. Two things follow, and both are easy to get
     * wrong:
     *
     * 1. City is NOT a display filter. Filtering by city would leave the
     *    Delhi, Mumbai, Gurugram and Ahmedabad pages with nothing to show.
     *    The `city` column records where a review was left - provenance, for
     *    auditing - not who may see it.
     *
     * 2. A review must never be captioned as coming from a city it did not.
     *    Fifteen pages carry headings like "Delhi Clients Who Have Needed This
     *    Certificate". Showing a Pune reviewer under that heading asserts
     *    something untrue about a named, real person. Those headings have to
     *    change, or those pages must show only reviews genuinely from that
     *    city - not the other way round.
     *
     * Service is the axis that actually works, because it is tagged by hand
     * and does not depend on which listing the review landed on.
     */
    'selection' => [

        // Try in this order until enough reviews are found. 'general' is the
        // whole published pool and always succeeds, so a page is never empty.
        'order' => ['service', 'cluster', 'general'],

        // Below this, fall through to the next step rather than render a
        // half-empty row.
        'minimum' => 4,

        'limit' => 10,

        // Off, for the reason above. Turning it on empties most city pages.
        'filter_by_city' => false,
    ],

    /*
     * Section heading and lead, used when a page passes none of its own.
     */
    'heading' => 'Real Stories from Real People',
    'lead'    => 'Hear how teams across industries use Patron to save time, cut costs, & stay in control.',

    /*
     * PLACEHOLDER - awaiting the reviews you are supplying.
     *
     * These ten are the verified Google reviews currently held in
     * .claude/Skills/quality-check/real-testimonials.json, carried over so the
     * component renders something truthful in the meantime. Replace the list
     * below with yours; the partial needs no change.
     */
    'reviews' => [

        [
            'name'   => 'Sunny Ashpal',
            'rating' => 5,
            'text'   => 'Excellent service for company registration and compliance. The team is very responsive and handles everything end to end. A trusted partner for Demandify Media.',
            'role'   => 'Director - Demandify Media',
            'video'  => '/storage/testimonials/videos/ffNmUX9RNpnwMXhlJcqIPwnE809y6lIMYuAOpQMf.mp4',
            'poster' => '/storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg',
        ],

        [
            'name'   => 'Anjanay Srivastava',
            'rating' => 5,
            'text'   => 'Professional and timely service. Patron Accounting handled our company incorporation and compliance with great expertise. Highly recommended for startups.',
            'role'   => 'Founder - Hunarsource Consulting',
            'video'  => '/storage/testimonials/videos/LjYtH6V1FWB71lWPo1MS77UCKxowr5l4fbsUGA0n.mp4',
            'poster' => '/storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg',
        ],

        [
            'name'   => 'Subhendu Mishra',
            'rating' => 5,
            'text'   => 'I\'ve had an outstanding experience working with my CA - Patron Accounting. Their professionalism, attention to detail, and timely communication made the entire process seamless and stress-free.',
        ],

        [
            'name'   => 'Rajib Dutta',
            'rating' => 5,
            'text'   => 'I\'m glad that I was able to connect with Patron. They took the minimum time to do the calculations based on the details provided by me and were really helpful throughout the process.',
        ],

        [
            'name'   => 'Nishikant Gurav',
            'rating' => 5,
            'text'   => 'Really a fantastic experience with Patron Accounting especially Shubham, he was extremely great. Knowledgeable person who deserves the 5 star for smooth handling of all documentation.',
        ],

        [
            'name'   => 'Nikhil Nimbhorkar',
            'rating' => 5,
            'text'   => 'Patron Accounting gives the best service related to all account handling of our firm. I am blessed and extremely happy that Patron Accounting assigned us a dedicated point of contact.',
        ],

        [
            'name'   => 'Sameer Mehta',
            'rating' => 5,
            'text'   => 'I have called Patron to file ITR for my 5 family members. I worked with Shubham Junjunwala and Amin Jain. It was a smooth process. They understand basics very well and respond promptly.',
        ],

        [
            'name'   => 'Preeti Singh Rathor',
            'rating' => 5,
            'text'   => 'From the very beginning, their approach has been highly professional, prompt, and solution-oriented. Every interaction reflected their deep knowledge and commitment to helping clients.',
        ],

        [
            'name'   => 'Anita Gaur',
            'rating' => 5,
            'text'   => 'Very proficient and professional staff. Do fantastic job and instant response. Strongly recommended engaging them for all accounting needs specially for startups and growing businesses.',
        ],

        [
            'name'   => 'Pankaj Arvikar',
            'rating' => 5,
            'text'   => 'I contacted them to file the ITR. Shubham was the POC for me and he was really very professional and giving prompt responses. Highly recommend them for tax and compliance work.',
        ],

    ],

];

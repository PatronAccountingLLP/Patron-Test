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
     * Clients from all over India leave their reviews on the Pune listing -
     * it is the profile people find. So the reviews sitting under "Pune" are
     * national, not local, and everything follows from that:
     *
     * 1. Showing every review on every page is the ACCURATE choice, not a
     *    fallback we settle for. These reviewers really are clients from
     *    across India.
     *
     * 2. City is not a display filter, and could not be a useful one. Nothing
     *    in a Google review says where the reviewer is.
     *
     * 3. No review may be captioned as coming from any city - Pune included.
     *    Fifteen pages carry headings like "Delhi Clients Who Have Needed This
     *    Certificate" and "Pune Applicants We Have Certified For". Putting a
     *    reviewer under either asserts something about a named, real person
     *    that nobody has established. Those headings need rewording.
     *
     * The `city` column therefore means "the client's city, established by a
     * person", and stays empty until someone actually knows it. Which listing
     * a review was left on is recorded accurately in `location_id`.
     *
     * Service is the axis that works: tagged by hand, and independent of which
     * listing the review happened to land on.
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
     * The dark band that closes the section. The layout renders the section
     * now, so pages no longer pass their own wording and this is what every
     * page shows.
     *
     * It replaces 1,109 distinct per-page lines - "Join hundreds of NGOs that
     * trust Patron Accounting for 12A compliance" and the like. They are in
     * git history if any are worth bringing back; a page can still override
     * by passing ctaTitle and ctaText to the partial directly.
     *
     * Set cta_title to an empty string to drop the band everywhere.
     */
    'cta_title' => 'Join 10,000+ Satisfied Businesses',
    'cta_text'  => 'Rated 4.9 on Google across 500+ reviews.',

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

        /*
         * The two 2026 packs. Both are 720x1280, filmed vertically, where the
         * first two are 640x480 landscape - hence 'portrait', which switches
         * the card to letterbox the frame instead of cropping a band out of
         * the middle of it and cutting off the burned-in captions.
         */
        [
            // Full name confirmed by the client 2026-09-01.
            'name'     => 'Mayur Shewale',
            'rating'   => 5,
            // Verbatim from the transcript in the pack's JSON-LD. Not paraphrased.
            'text'     => 'We shortlisted more than 10 CAs and accounting firms, and we selected Patron in that.',
            // The firm is spelled three ways across the sources: "Bijasani"
            // (client, and what is used here), "Bijasini" (the supplied pack,
            // and the VideoObject schema live on two production pages) and
            // "Bizasani" (the video's own burned-in caption). Worth settling
            // and making consistent - the live schema still says Bijasini.
            'role'     => 'Founder - Bijasani Traders',
            'video'    => '/storage/testimonials/videos/mayur-bijasini-patron-testimonial-720x1280.mp4',
            'poster'   => '/storage/testimonials/posters/mayur-bijasini-720x1280.jpg',
            // No Google badge: this is a filmed testimonial, not a Google
            // review. The hand-off brief says entries go into
            // real-testimonials.json "once Google reviews are received from
            // both speakers" - which has not happened. Flip to true the day
            // one lands, and the badge appears.
            'google'   => false,
            'portrait' => true,
        ],

        [
            /*
             * Attributed to the company, not a person, because nobody has
             * established who is speaking - he never says his name in the
             * video, and the supplied embed carries _NAME_PLACEHOLDER in four
             * places. Naming a real person on a guess is the fault this whole
             * component exists to stop. Replace 'name' with the owner's name
             * once it is confirmed.
             */
            'name'     => 'Ascendancy International',
            'rating'   => 5,
            'text'     => '',
            'role'     => 'Owner',
            'video'    => '/storage/testimonials/videos/ascendancy-owner-patron-testimonial-720x1280.mp4',
            'poster'   => '/storage/testimonials/posters/ascendancy-owner-720x1280.jpg',
            // No Google badge: this is a filmed testimonial, not a Google
            // review. The hand-off brief says entries go into
            // real-testimonials.json "once Google reviews are received from
            // both speakers" - which has not happened. Flip to true the day
            // one lands, and the badge appears.
            'google'   => false,
            'portrait' => true,
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

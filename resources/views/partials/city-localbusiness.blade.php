{{--
    Shared city-page local-entity schema.

    One source of truth for every Patron office address on the site. Include it from a
    city page and it emits the correct JSON-LD for that city:

      - A city where Patron has a real, staffed office  -> LocalBusiness with the full
        postal address, geo point and opening hours, keyed to /{city}/#localbusiness
        so every page for that city describes the SAME entity.

      - Any other city -> NO LocalBusiness. Claiming a physical presence we do not have
        is a Google local-listing violation. Instead we state the honest relationship:
        the national organisation provides the service, the city is the area served.

    Addresses below are taken verbatim from the blocks Patron already publishes; none
    of them are invented. To change an office address, change it here once.

    Usage:
        @include('partials.city-localbusiness', [
            'citySlug' => 'pune',
            'pageUrl'  => '/pt-returns/pune',
        ])
--}}
@php
    $__base = 'https://www.patronaccounting.com';

    $__offices = [
        'pune' => [
            'name' => 'Patron Accounting LLP - Pune (Wagholi HQ)',
            'street' => 'RTC Silver, B4-708, Sai Satyam Park, Wagholi',
            'locality' => 'Pune', 'region' => 'Maharashtra', 'pin' => '412207',
            'lat' => 18.57944655, 'lon' => 73.9682987,
            'area' => ['Pune', 'Wagholi', 'Kharadi', 'Baner'],
        ],
        'mumbai' => [
            'name' => 'Patron Accounting LLP - Mumbai',
            'street' => '1st Floor, Rajshila Building, 104/597, Jagannath Shankar Seth Rd, near Maheshwari Bhavan, Marine Lines',
            'locality' => 'Mumbai', 'region' => 'Maharashtra', 'pin' => '400002',
            'lat' => 18.946399299249972, 'lon' => 72.8274615,
            'area' => ['Mumbai', 'Marine Lines'],
        ],
        // Gurugram postal code is 122018, confirmed by Patron 2026-09-16 against the
        // office's own listing: "Pioneer Urban Square, B109, Golf Course Ext Rd,
        // Sector 62, Gurugram, Ghata, Haryana 122018" (plus code C37Q+X8).
        // NOTE: /contact-us still says 122098 and needs correcting to match this.
        'gurugram' => [
            'name' => 'Patron Accounting LLP - Gurugram',
            'street' => 'Pioneer Urban Square, B109, Golf Course Ext Rd, Sector 62',
            'locality' => 'Gurugram', 'region' => 'Haryana', 'pin' => '122018',
            'lat' => 28.415097471453663, 'lon' => 77.08825597116413,
            'area' => ['Gurugram', 'Sector 62', 'Golf Course Extension Road'],
        ],
        'delhi' => [
            'name' => 'Patron Accounting LLP - Delhi',
            'street' => '3rd Floor, B-6/154-155, Sector 5, Rohini',
            'locality' => 'Delhi', 'region' => 'Delhi', 'pin' => '110085',
            'lat' => 28.716464079902895, 'lon' => 77.10325505356741,
            'area' => ['Delhi', 'Rohini'],
        ],
        'ahmedabad' => [
            'name' => 'Patron Accounting LLP - Ahmedabad',
            'street' => 'Phoenix Tower, 1107, near Commerce Six Road, Drive In Rd, Navrangpura',
            'locality' => 'Ahmedabad', 'region' => 'Gujarat', 'pin' => '380009',
            'lat' => 23.041618026254973, 'lon' => 72.55184206765362,
            'area' => ['Ahmedabad', 'Navrangpura'],
        ],
    ];

    // Display names for cities we serve but do not hold an office in.
    $__names = [
        'bangalore' => 'Bangalore', 'bengaluru' => 'Bengaluru', 'chandigarh' => 'Chandigarh',
        'chennai' => 'Chennai', 'cuttack' => 'Cuttack', 'dehradun' => 'Dehradun',
        'dharwad' => 'Dharwad', 'guwahati' => 'Guwahati', 'hyderabad' => 'Hyderabad',
        'indore' => 'Indore', 'jaipur' => 'Jaipur', 'jalandhar' => 'Jalandhar',
        'jodhpur' => 'Jodhpur', 'kochi' => 'Kochi', 'kolkata' => 'Kolkata',
        'lucknow' => 'Lucknow', 'madurai' => 'Madurai', 'nagpur' => 'Nagpur',
        'patna' => 'Patna', 'prayagraj' => 'Prayagraj', 'raipur' => 'Raipur',
        'ranchi' => 'Ranchi', 'shimla' => 'Shimla', 'siliguri' => 'Siliguri',
        'srinagar' => 'Srinagar', 'surat' => 'Surat', 'varanasi' => 'Varanasi',
        'vijayawada' => 'Vijayawada',
    ];

    $__slug = strtolower(trim($citySlug ?? ''));
    $__page = $__base . '/' . ltrim($pageUrl ?? '', '/');
    $__node = null;

    if ($__slug !== '' && isset($__offices[$__slug])) {
        $o = $__offices[$__slug];
        $__node = [
            '@context' => 'https://schema.org',
            '@type' => 'LocalBusiness',
            '@id' => $__base . '/' . $__slug . '/#localbusiness',
            'name' => $o['name'],
            'url' => $__page,
            'telephone' => '+91 94594 56700',
            'email' => 'sales@patronaccounting.com',
            'priceRange' => '₹₹',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => $o['street'],
                'addressLocality' => $o['locality'],
                'addressRegion' => $o['region'],
                'postalCode' => $o['pin'],
                'addressCountry' => 'IN',
            ],
            'geo' => [
                '@type' => 'GeoCoordinates',
                'latitude' => $o['lat'],
                'longitude' => $o['lon'],
            ],
            'areaServed' => array_map(
                fn ($a) => ['@type' => 'AdministrativeArea', 'name' => $a],
                $o['area']
            ),
            'openingHoursSpecification' => [
                [
                    '@type' => 'OpeningHoursSpecification',
                    'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
                    'opens' => '09:00', 'closes' => '19:00',
                ],
                [
                    '@type' => 'OpeningHoursSpecification',
                    'dayOfWeek' => ['Saturday'],
                    'opens' => '09:00', 'closes' => '15:00',
                ],
            ],
            'parentOrganization' => ['@id' => $__base . '/#organization'],
            'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => $__page],
        ];
    } elseif ($__slug !== '') {
        // No office here. State the service area honestly instead of faking an address.
        $__city = $__names[$__slug] ?? ucfirst($__slug);
        $__node = [
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            '@id' => $__page . '#service-area',
            'name' => 'Patron Accounting LLP services in ' . $__city,
            'provider' => ['@id' => $__base . '/#organization'],
            'areaServed' => [
                '@type' => 'City',
                'name' => $__city,
                'containedInPlace' => ['@type' => 'Country', 'name' => 'India'],
            ],
            'availableChannel' => [
                '@type' => 'ServiceChannel',
                'serviceUrl' => $__page,
                'servicePhone' => ['@type' => 'ContactPoint', 'telephone' => '+91 94594 56700'],
            ],
        ];
    }
@endphp
@if ($__node)
<script type="application/ld+json">{!! json_encode($__node, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
@endif

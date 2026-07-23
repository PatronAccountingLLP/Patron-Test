{{--
    Unified Expanded FAQ partial — Patron Accounting (two-column)
    ------------------------------------------------------------------
    Always-expanded FAQ block + (optional) FAQPage JSON-LD from a single
    $faqs array. Canonical FAQ component for DB-driven templates
    (service/national pages, blog posts) and every newly generated page.

    Styling: /css/faq.css (class contract: .faq-expanded*).

    Params:
      $faqs           array   required  [ ['question' => ..., 'answer' => ...], ... ]
      $heading        string  optional  default 'Frequently Asked Questions'
      $lead           string  optional  supporting line in the left column
      $ctaUrl         string  optional  default '/contact' (pass null/'' to hide CTA)
      $ctaText        string  optional  default 'Talk to an expert'
      $includeSchema  bool    optional  default true — emit FAQPage JSON-LD
                                        (pass false if the page prints its own FAQ schema)
      $sectionId      string  optional  default 'faq-section'
--}}
@php
    $faqHeading       = $heading       ?? 'Frequently Asked Questions';
    $faqLead          = array_key_exists('lead', get_defined_vars()) ? $lead : 'Quick answers to the questions we hear most. Still need help? Our CA team is a message away.';
    $faqCtaUrl        = array_key_exists('ctaUrl', get_defined_vars()) ? $ctaUrl : '/contact';
    $faqCtaText       = $ctaText       ?? 'Talk to an expert';
    $faqIncludeSchema = $includeSchema ?? true;
    $faqSectionId     = $sectionId     ?? 'faq-section';

    $faqList = collect($faqs ?? [])
        ->map(function ($f) {
            return [
                'question' => trim($f['question'] ?? ''),
                'answer'   => $f['answer'] ?? '',
            ];
        })
        ->filter(fn ($f) => $f['question'] !== '' && trim(strip_tags($f['answer'])) !== '')
        ->values();
@endphp

@if($faqList->count() > 0)
<section id="{{ $faqSectionId }}" class="faq-expanded-section content-section" style="background-color:#ffffff;">
    <div class="faq-expanded">
        <aside class="faq-expanded__aside">
            @if(!empty($faqHeading))
                <h2 class="faq-expanded__title">{{ $faqHeading }}</h2>
            @endif
            @if(!empty($faqLead))
                <p class="faq-expanded__lead">{{ $faqLead }}</p>
            @endif
            @if(($showForm ?? true))
                @include('partials.faq-enquiry-form', ['enquiryLocation' => $enquiryLocation ?? '', 'enquiryService' => $enquiryService ?? ''])
            @endif
        </aside>

        <div class="faq-expanded__list">
            @foreach($faqList as $i => $faq)
                <div class="faq-expanded__item" id="{{ $faqSectionId }}-{{ $i + 1 }}">
                    <h3 class="faq-expanded__q">{{ $faq['question'] }}</h3>
                    <div class="faq-expanded__a">
                        @if($faq['answer'] !== strip_tags($faq['answer']))
                            {!! $faq['answer'] !!}
                        @else
                            {!! nl2br(e($faq['answer'])) !!}
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @if($faqIncludeSchema)
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        @foreach($faqList as $faq)
        {
          "@type": "Question",
          "name": {!! json_encode($faq['question'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!},
          "acceptedAnswer": {
            "@type": "Answer",
            "text": {!! json_encode(trim(strip_tags($faq['answer'])), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}
          }
        }@if(!$loop->last),@endif
        @endforeach
      ]
    }
    </script>
    @endif
</section>
@endif

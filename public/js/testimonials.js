/*
 * Testimonials - Patron Accounting
 * ---------------------------------------------------------------------------
 * Emitted by resources/views/partials/testimonials.blade.php, once per page.
 *
 * Two jobs only:
 *   1. turn .testimonial-slider into the Slick carousel it is today
 *   2. play/pause a video card when it is clicked
 *
 * The cards themselves are now rendered by the partial, server-side. They used
 * to be built in JavaScript from a `fallbackReviews` array pasted into all
 * 1,657 pages, which meant a crawler saw an empty div and a reader saw nothing
 * until jQuery had run. The markup is in the HTML now; this file only enhances
 * it, so the section survives with JS off.
 *
 * Dependencies are ensured, not assumed. Pages load jQuery and Slick from the
 * CDN themselves, in varying order and sometimes twice - the double-load race
 * is what left the IMF pages rendering full-size cards down the page. This file
 * checks for both, loads whichever is missing, and never adds a second copy.
 *
 * Mirrored to public/js/testimonials.js: production serves the repo root,
 * `artisan serve` serves public/. Edit one, copy to the other.
 */
(function () {
    'use strict';

    var JQUERY_SRC = 'https://code.jquery.com/jquery-3.6.0.min.js';
    var SLICK_SRC  = 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js';

    /* Load a script once. If another tag already points at it - the page's own
       copy, or a second testimonial block - wait for that one instead of
       racing it with a duplicate. */
    function need(src, isReady, done) {
        if (isReady()) { done(); return; }

        var existing = document.querySelector('script[src="' + src + '"]');
        if (existing) {
            existing.addEventListener('load', done);
            // Already finished but the global is not up yet: poll briefly.
            var tries = 0;
            var t = setInterval(function () {
                if (isReady()) { clearInterval(t); done(); }
                else if (++tries > 100) { clearInterval(t); }
            }, 50);
            return;
        }

        var s = document.createElement('script');
        s.src = src;
        s.onload = done;
        s.onerror = function () {
            // Carousel is an enhancement. The cards are already in the HTML and
            // the CSS lays them out in a row, so a CDN failure costs the
            // sliding motion and nothing else.
        };
        document.head.appendChild(s);
    }

    function hasJquery() { return typeof window.jQuery !== 'undefined'; }
    function hasSlick()  { return hasJquery() && typeof window.jQuery.fn.slick !== 'undefined'; }

    function initSliders() {
        var $ = window.jQuery;
        $('.testimonial-slider').each(function () {
            var $slider = $(this);
            if ($slider.hasClass('slick-initialized')) return;
            if ($slider.children().length === 0) return;

            $slider.slick({
                dots: false,
                infinite: true,
                speed: 500,
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2500,
                arrows: false,
                cssEase: 'ease-in-out',
                pauseOnHover: true,
                pauseOnFocus: true,
                swipe: true,
                touchMove: true,
                responsive: [
                    { breakpoint: 1200, settings: { slidesToShow: 3 } },
                    { breakpoint: 900,  settings: { slidesToShow: 2 } },
                    { breakpoint: 600,  settings: { slidesToShow: 1, autoplaySpeed: 3000 } }
                ]
            });
        });
    }

    /* Click a video card to play it; click again to pause. Delegated from the
       document so it covers every block on the page and keeps working after
       Slick clones slides for the infinite loop - bound handlers do not
       survive cloning, which is why this is not a per-element listener. */
    function bindVideoToggle() {
        document.addEventListener('click', function (e) {
            var area = e.target.closest ? e.target.closest('.testi-video-area') : null;
            if (!area) return;

            var video = area.querySelector('video');
            if (!video) return;

            if (video.paused) {
                // Only one testimonial video plays at a time.
                document.querySelectorAll('.testi-video-area video').forEach(function (other) {
                    if (other !== video && !other.paused) {
                        other.pause();
                        var a = other.closest('.testi-video-area');
                        if (a) a.classList.remove('playing');
                    }
                });
                video.play();
                area.classList.add('playing');
            } else {
                video.pause();
                area.classList.remove('playing');
            }
        });

        // A clone keeps the 'playing' class but not the playback state.
        document.addEventListener('pause', function (e) {
            if (e.target.tagName !== 'VIDEO') return;
            var a = e.target.closest('.testi-video-area');
            if (a) a.classList.remove('playing');
        }, true);
    }

    function start() {
        bindVideoToggle();
        need(JQUERY_SRC, hasJquery, function () {
            need(SLICK_SRC, hasSlick, function () {
                if (hasSlick()) initSliders();
            });
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', start);
    } else {
        start();
    }
})();

{{-- ============================================================
     PATRON ACCOUNTING — ITR LEAD POPUP WRAPPER
     File:  resources/views/partials/banners/itr-popup-wrapper.blade.php
     
     Wraps any ITR banner into a popup modal with:
       - 5-second delay before showing
       - Close button (×)
       - Dimmed overlay background
       - Session memory (won't show again after closing)
       - Mobile responsive

     Usage:
       @include('partials.banners.itr-popup-wrapper', ['bannerView' => 'partials.banners.itr-banner-ifsc-v1'])
       @include('partials.banners.itr-popup-wrapper', ['bannerView' => 'partials.banners.itr-banner-hsn-sac-v1', 'utmSource' => 'hsn-tool'])
       @include('partials.banners.itr-popup-wrapper', ['bannerView' => 'partials.banners.itr-banner-nic-v1'])
     ============================================================ --}}

@php
  $popupId = 'paItrPopup_' . uniqid();
  $popupKey = 'pa_itr_popup_dismissed';
@endphp

<div id="{{ $popupId }}" class="pa-itr-popup-overlay" style="display:none;" role="dialog" aria-modal="true" aria-label="Income Tax Filing Offer">
    <div class="pa-itr-popup-box">
        <button type="button" class="pa-itr-popup-close" aria-label="Close popup" onclick="document.getElementById('{{ $popupId }}').style.display='none'; try { sessionStorage.setItem('{{ $popupKey }}', '1'); } catch(e) {}">&times;</button>
        <div class="pa-itr-popup-content">
            @include($bannerView, ['utmSource' => $utmSource ?? null])
        </div>
    </div>
</div>

<style>
  .pa-itr-popup-overlay {
    position: fixed;
    top: 0; left: 0; right: 0; bottom: 0;
    background: rgba(10, 37, 64, 0.6);
    z-index: 99999;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 16px;
    box-sizing: border-box;
    backdrop-filter: blur(2px);
    -webkit-backdrop-filter: blur(2px);
    animation: paItrFadeIn 0.3s ease-out;
  }
  .pa-itr-popup-box {
    position: relative;
    width: 100%;
    max-width: 900px;
    max-height: 90vh;
    overflow-y: auto;
    border-radius: 12px;
    animation: paItrSlideUp 0.4s ease-out;
  }
  .pa-itr-popup-close {
    position: absolute;
    top: 8px;
    right: 12px;
    width: 32px;
    height: 32px;
    border: none;
    background: rgba(255, 255, 255, 0.95);
    color: #0a2540;
    font-size: 22px;
    font-weight: 700;
    line-height: 1;
    border-radius: 50%;
    cursor: pointer;
    z-index: 10;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
    transition: transform 0.15s ease;
  }
  .pa-itr-popup-close:hover {
    transform: scale(1.1);
    background: #fff;
  }
  .pa-itr-popup-content > .pa-itr-banner,
  .pa-itr-popup-content > [class*="pa-itr-banner--"] {
    margin: 0 !important;
  }
  @keyframes paItrFadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
  }
  @keyframes paItrSlideUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }
  @media (max-width: 600px) {
    .pa-itr-popup-overlay { padding: 8px; }
    .pa-itr-popup-box { max-height: 95vh; }
    .pa-itr-popup-close { top: 4px; right: 6px; width: 28px; height: 28px; font-size: 20px; }
  }
</style>

<script>
  (function() {
    var popupId = '{{ $popupId }}';
    var popupKey = '{{ $popupKey }}';
    var delay = 5000; // 5 seconds

    // Check if user has already dismissed the popup this session
    try {
      if (sessionStorage.getItem(popupKey) === '1') {
        return;
      }
    } catch (e) {
      // sessionStorage blocked — show anyway
    }

    setTimeout(function() {
      var el = document.getElementById(popupId);
      if (el) {
        el.style.display = 'flex';
      }
    }, delay);

    // Close on Escape key
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape') {
        var el = document.getElementById(popupId);
        if (el && el.style.display !== 'none') {
          el.style.display = 'none';
          try { sessionStorage.setItem(popupKey, '1'); } catch(e) {}
        }
      }
    });

    // Close when clicking the dimmed overlay (but not the popup box itself)
    document.addEventListener('click', function(e) {
      var el = document.getElementById(popupId);
      if (el && e.target === el) {
        el.style.display = 'none';
        try { sessionStorage.setItem(popupKey, '1'); } catch(e) {}
      }
    });
  })();
</script>
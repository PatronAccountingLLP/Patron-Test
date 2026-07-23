{{-- ============================================================
     PATRON ACCOUNTING — ITR LEAD CAPTURE BANNER (IFSC · V3 of 5)
     File:     resources/views/partials/banners/itr-banner-ifsc-v3.blade.php
     Page:     IFSC code lookup
     Lead:     Salary ITR filing (Rs. 999)
     CTA:      File My ITR → WhatsApp (+91 94594 56700)

     UTM tracking (default — override per page if needed):
       utm_source   = ifsc-tool
       utm_medium   = banner
       utm_campaign = itr-lead-2026
       utm_content  = ifsc-v3-999-filing

     Usage (default UTM source):
       @include('partials.banners.itr-banner-ifsc-v3')

     Usage (override utm_source per page — e.g., HSN vs SAC):
       @include('partials.banners.itr-banner-ifsc-v3', ['utmSource' => 'hsn-tool'])
     ============================================================ --}}

@php
  $waNumber  = '919459456700';
  $waMessage = 'Hi Patron Accounting, I want to file my salaried ITR for AY 2026-27 with CA assistance. Please help me get started.';

  // UTM tracking (configurable per-page via $utmSource override)
  $utmSource   = $utmSource   ?? 'ifsc-tool';
  $utmMedium   = 'banner';
  $utmCampaign = 'itr-lead-2026';
  $utmContent  = 'ifsc-v3-999-filing';

  $waUrl = 'https://wa.me/' . $waNumber
         . '?text=' . rawurlencode($waMessage)
         . '&utm_source=' . urlencode($utmSource)
         . '&utm_medium=' . urlencode($utmMedium)
         . '&utm_campaign=' . urlencode($utmCampaign)
         . '&utm_content=' . urlencode($utmContent);

  $bannerId   = 'ifsc-v3-999-filing';
  $pageFamily = 'ifsc';
@endphp

<style>
  .pa-itr-banner--ifsc-v3 {
    --pa-banner-bg-from: #0a2540; --pa-banner-bg-to: #1a3a6c;
    --pa-banner-accent: #f59e0b; --pa-banner-accent-soft: rgba(245, 158, 11, 0.15);
    --pa-banner-accent-border: rgba(245, 158, 11, 0.4); --pa-banner-accent-light: #fbbf24;
    --pa-banner-text-primary: #ffffff; --pa-banner-text-secondary: #cbd5e1;
    --pa-banner-text-tertiary: #94a3b8; --pa-banner-wa-green: #25D366;
    width: 100%; background: linear-gradient(135deg, var(--pa-banner-bg-from) 0%, var(--pa-banner-bg-to) 100%);
    border-radius: 12px; overflow: hidden; position: relative;
    font-family: var(--font-body, 'DM Sans', -apple-system, BlinkMacSystemFont, sans-serif);
    box-sizing: border-box; margin: 24px 0;
  }
  .pa-itr-banner--ifsc-v3 *, .pa-itr-banner--ifsc-v3 *::before, .pa-itr-banner--ifsc-v3 *::after { box-sizing: border-box; }
  .pa-itr-banner--ifsc-v3::before, .pa-itr-banner--ifsc-v3::after { content: ""; position: absolute; border-radius: 50%; pointer-events: none; }
  .pa-itr-banner--ifsc-v3::before { top: -40px; right: -40px; width: 200px; height: 200px; background: rgba(245, 158, 11, 0.08); }
  .pa-itr-banner--ifsc-v3::after { bottom: -60px; right: 200px; width: 140px; height: 140px; background: rgba(245, 158, 11, 0.05); }
  .pa-itr-banner--ifsc-v3 .pa-itr-banner__inner { position: relative; display: flex; align-items: center; justify-content: space-between; padding: 22px 32px; gap: 24px; z-index: 1; }
  .pa-itr-banner--ifsc-v3 .pa-itr-banner__content { display: flex; align-items: center; gap: 20px; flex: 1; min-width: 0; }
  .pa-itr-banner--ifsc-v3 .pa-itr-banner__icon { flex-shrink: 0; width: 64px; height: 64px; background: var(--pa-banner-accent-soft); border: 1.5px solid var(--pa-banner-accent-border); border-radius: 12px; display: flex; align-items: center; justify-content: center; }
  .pa-itr-banner--ifsc-v3 .pa-itr-banner__text { min-width: 0; flex: 1; }
  .pa-itr-banner--ifsc-v3 .pa-itr-banner__pill { display: inline-flex; align-items: center; gap: 6px; background: rgba(245, 158, 11, 0.18); border: 1px solid rgba(245, 158, 11, 0.35); padding: 4px 10px; border-radius: 20px; margin-bottom: 8px; }
  .pa-itr-banner--ifsc-v3 .pa-itr-banner__pill-dot { width: 6px; height: 6px; background: var(--pa-banner-accent); border-radius: 50%; }
  .pa-itr-banner--ifsc-v3 .pa-itr-banner__pill-text { font-size: 11px; font-weight: 600; color: var(--pa-banner-accent-light); letter-spacing: 0.04em; }
  .pa-itr-banner--ifsc-v3 .pa-itr-banner__headline { font-size: 22px; font-weight: 700; color: var(--pa-banner-text-primary); line-height: 1.25; margin: 0 0 4px 0; }
  .pa-itr-banner--ifsc-v3 .pa-itr-banner__highlight { color: var(--pa-banner-accent); }
  .pa-itr-banner--ifsc-v3 .pa-itr-banner__subline { font-size: 14px; color: var(--pa-banner-text-secondary); line-height: 1.4; margin: 0; }
  .pa-itr-banner--ifsc-v3 .pa-itr-banner__cta-wrap { flex-shrink: 0; display: flex; flex-direction: column; align-items: stretch; gap: 6px; }
  .pa-itr-banner--ifsc-v3 .pa-itr-banner__cta { display: inline-flex; align-items: center; justify-content: center; gap: 8px; background: var(--pa-banner-wa-green); color: #ffffff; font-size: 15px; font-weight: 700; padding: 13px 22px; border-radius: 8px; text-decoration: none; letter-spacing: 0.01em; white-space: nowrap; transition: transform 0.15s ease, box-shadow 0.15s ease; cursor: pointer; }
  .pa-itr-banner--ifsc-v3 .pa-itr-banner__cta:hover { transform: translateY(-1px); box-shadow: 0 6px 16px rgba(37, 211, 102, 0.35); text-decoration: none; color: #ffffff; }
  .pa-itr-banner--ifsc-v3 .pa-itr-banner__cta:active { transform: translateY(0); }
  .pa-itr-banner--ifsc-v3 .pa-itr-banner__trust { font-size: 11px; color: var(--pa-banner-text-tertiary); text-align: center; }
  @media (max-width: 767px) {
    .pa-itr-banner--ifsc-v3 { margin: 16px 0; }
    .pa-itr-banner--ifsc-v3::before { width: 140px; height: 140px; top: -30px; right: -30px; }
    .pa-itr-banner--ifsc-v3::after { display: none; }
    .pa-itr-banner--ifsc-v3 .pa-itr-banner__inner { flex-direction: column; align-items: stretch; padding: 18px 18px 16px; gap: 12px; }
    .pa-itr-banner--ifsc-v3 .pa-itr-banner__content { flex-direction: column; align-items: flex-start; gap: 10px; }
    .pa-itr-banner--ifsc-v3 .pa-itr-banner__icon-pill-row { display: flex; align-items: center; gap: 10px; width: 100%; }
    .pa-itr-banner--ifsc-v3 .pa-itr-banner__icon { width: 38px; height: 38px; border-radius: 8px; }
    .pa-itr-banner--ifsc-v3 .pa-itr-banner__icon svg { width: 20px; height: 20px; }
    .pa-itr-banner--ifsc-v3 .pa-itr-banner__pill { margin-bottom: 0; padding: 3px 8px; }
    .pa-itr-banner--ifsc-v3 .pa-itr-banner__pill-dot { width: 5px; height: 5px; }
    .pa-itr-banner--ifsc-v3 .pa-itr-banner__pill-text { font-size: 10px; }
    .pa-itr-banner--ifsc-v3 .pa-itr-banner__headline { font-size: 18px; line-height: 1.3; }
    .pa-itr-banner--ifsc-v3 .pa-itr-banner__subline { font-size: 13px; }
    .pa-itr-banner--ifsc-v3 .pa-itr-banner__cta-wrap { width: 100%; }
    .pa-itr-banner--ifsc-v3 .pa-itr-banner__cta { width: 100%; padding: 12px 20px; }
    .pa-itr-banner--ifsc-v3 .pa-itr-banner__trust { font-size: 10.5px; }
  }
  @media (prefers-reduced-motion: reduce) {
    .pa-itr-banner--ifsc-v3 .pa-itr-banner__cta { transition: none; }
  }
</style>

<aside class="pa-itr-banner pa-itr-banner--ifsc-v3" role="complementary" aria-label="Patron Accounting offer via WhatsApp">
  <div class="pa-itr-banner__inner">
    <div class="pa-itr-banner__content">
      <div class="pa-itr-banner__icon-pill-row">
        <div class="pa-itr-banner__icon" aria-hidden="true">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 2H6C5.46957 2 4.96086 2.21071 4.58579 2.58579C4.21071 2.96086 4 3.46957 4 4V20C4 20.5304 4.21071 21.0391 4.58579 21.4142C4.96086 21.7893 5.46957 22 6 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V8L14 2Z" stroke="#f59e0b" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" fill="rgba(245, 158, 11, 0.1)"/><path d="M14 2V8H20" stroke="#f59e0b" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 14L11 16L15.5 11.5" stroke="#f59e0b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <div class="pa-itr-banner__pill">
          <span class="pa-itr-banner__pill-dot" aria-hidden="true"></span>
          <span class="pa-itr-banner__pill-text">SALARIED ITR · CA-ASSISTED</span>
        </div>
      </div>
      <div class="pa-itr-banner__text">
        <h3 class="pa-itr-banner__headline">ITR filing for salaried — just <span class="pa-itr-banner__highlight">Rs. 999.</span></h3>
        <p class="pa-itr-banner__subline">Form 16 to ITR-V. CA-reviewed. Refund tracked till credit.</p>
      </div>
    </div>
    <div class="pa-itr-banner__cta-wrap">
      <a href="{{ $waUrl }}" class="pa-itr-banner__cta" target="_blank" rel="noopener"
         data-banner-id="{{ $bannerId }}"
         onclick="if(typeof gtag==='function'){gtag('event','banner_click',{banner_id:'{{ $bannerId }}',page_family:'{{ $pageFamily }}',channel:'whatsapp'});}if(typeof dataLayer!=='undefined'){dataLayer.push({event:'banner_click',banner_id:'{{ $bannerId }}',page_family:'{{ $pageFamily }}',channel:'whatsapp'});}">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
        File My ITR
      </a>
      <div class="pa-itr-banner__trust">Patron Accounting · CA-led · Trusted across India</div>
    </div>
  </div>
</aside>

<script>
(function(){
  var banner = document.currentScript.previousElementSibling;
  if (!banner || !('IntersectionObserver' in window)) return;
  var fired = false; var bannerId = '{{ $bannerId }}'; var pageFamily = '{{ $pageFamily }}';
  var obs = new IntersectionObserver(function(entries){
    entries.forEach(function(entry){
      if (entry.isIntersecting && !fired) {
        fired = true;
        if (typeof gtag === 'function') gtag('event','banner_impression',{banner_id:bannerId,page_family:pageFamily});
        if (typeof dataLayer !== 'undefined') dataLayer.push({event:'banner_impression',banner_id:bannerId,page_family:pageFamily});
        obs.disconnect();
      }
    });
  }, { threshold: 0.5 });
  obs.observe(banner);
})();
</script>

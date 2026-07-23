@verbatim
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<style>
.pa-f,.pa-f *{box-sizing:border-box}
.pa-f{font-family:'Hanken Grotesk',system-ui,-apple-system,sans-serif;background:#0f2942;color:#9fb0c6}
.pa-f-stats{display:grid;grid-template-columns:repeat(6,1fr);background:#15365f;border-bottom:1px solid rgba(255,255,255,.08)}
.pa-f-stat{padding:22px 18px;text-align:center;border-right:1px solid rgba(255,255,255,.07)}
.pa-f-statn{font-weight:800;font-size:23px;color:#fff;letter-spacing:-.02em}
.pa-f-statl{font-weight:600;font-size:12px;color:#9fb0c6;margin-top:3px}
.pa-f-main{display:grid;grid-template-columns:1fr 1.45fr;gap:48px;max-width:1300px;margin:0 auto;padding:46px 48px 40px;border-bottom:1px solid rgba(255,255,255,.08)}
.pa-f-logo{height:56px;width:auto;display:block;background:#fff;padding:9px 14px;border-radius:10px}
.pa-f-blurb{margin:18px 0 20px;color:#9fb0c6;font-size:13.5px;line-height:1.65;max-width:380px}
.pa-f-contact{display:flex;flex-direction:column;gap:7px;margin-bottom:18px}
.pa-f-phone{color:#fff;font-weight:800;font-size:17px;text-decoration:none}
.pa-f-mail{color:#cdd8e7;font-size:13.5px;font-weight:600;text-decoration:none}
.pa-f-hours{color:#7e8ea3;font-size:12px}
.pa-f-news{background:#15365f;border:1px solid rgba(255,255,255,.1);border-radius:13px;padding:20px}
.pa-f-news-t{font-weight:800;font-size:16px;color:#fff;margin-bottom:5px}
.pa-f-news p{margin:0 0 14px;color:#9fb0c6;font-size:13px;line-height:1.55}
.pa-f-news form{display:flex;gap:8px}
.pa-f-news-in{flex:1;display:flex;align-items:center;gap:7px;background:#fff;border-radius:8px;padding:10px 12px}
.pa-f-news-in span{font-weight:700;font-size:13px;color:#15365f}
.pa-f-news-in input{flex:1;border:0;background:none;outline:none;font-weight:500;font-size:13.5px;font-family:'Hanken Grotesk',system-ui,-apple-system,sans-serif;color:#15365f}
.pa-f-news button{background:#f26522;color:#fff;border:0;cursor:pointer;font-weight:700;font-size:13.5px;padding:10px 17px;border-radius:8px;white-space:nowrap}
.pa-f-news button:hover{background:#d9531a}
.pa-f-socs{display:flex;align-items:center;gap:10px;margin-top:20px}
.pa-f-soc{width:36px;height:36px;border-radius:9px;background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.12);display:flex;align-items:center;justify-content:center;color:#cdd8e7;text-decoration:none;transition:background .15s,color .15s}
.pa-f-soc:hover{background:#f26522;color:#fff}
.pa-f-offhead{display:flex;align-items:center;justify-content:space-between;margin-bottom:16px}
.pa-f-offlabel{font-weight:700;font-size:11px;letter-spacing:.13em;text-transform:uppercase;color:#f26522}
.pa-f-google{display:inline-flex;align-items:center;gap:7px;background:#fff;border-radius:8px;padding:5px 11px;text-decoration:none}
.pa-f-offgrid{display:grid;grid-template-columns:1fr 1fr;gap:16px}
.pa-f-off{background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.09);border-radius:12px;padding:16px}
.pa-f-off-top{display:flex;align-items:center;gap:8px;margin-bottom:7px}
.pa-f-off-city{font-weight:800;font-size:14px;color:#fff}
.pa-f-hq{font-weight:700;font-size:9px;letter-spacing:.06em;color:#ffb15a;border:1px solid rgba(255,177,90,.4);border-radius:5px;padding:2px 5px}
.pa-f-off-rt{margin-left:auto;color:#f5a623;font-size:11px}
.pa-f-off-rt b{color:#cdd8e7}
.pa-f-off-addr{margin:0 0 6px;color:#9fb0c6;font-size:11.5px;line-height:1.55}
.pa-f-off-bot{display:flex;align-items:center;justify-content:space-between}
.pa-f-off-bot span{color:#7e8ea3;font-size:11px}
.pa-f-off-bot a{font-weight:700;font-size:11.5px;color:#f26522;text-decoration:none}
.pa-f-links{display:grid;grid-template-columns:repeat(3,1fr) 1.1fr;gap:36px;max-width:1300px;margin:0 auto;padding:36px 48px;border-bottom:1px solid rgba(255,255,255,.08)}
.pa-f-lcol{display:flex;flex-direction:column}
.pa-f-lhead{font-weight:700;font-size:13px;color:#fff;text-decoration:none;margin-bottom:14px}
.pa-f-link{color:#9fb0c6;font-size:13px;font-weight:500;text-decoration:none;padding:5px 0;transition:color .15s}
.pa-f-link:hover{color:#f26522}
.pa-f-company{display:grid;grid-template-columns:1fr 1fr;gap:0 18px}
.pa-f-bottombar{display:flex;align-items:center;justify-content:space-between;gap:24px;padding:20px max(48px,calc((100% - 1300px) / 2));background:#0b2036;flex-wrap:wrap}
.pa-f-pay{display:flex;align-items:center;gap:10px;flex-wrap:wrap}
.pa-f-paychip{background:#fff;border-radius:5px;padding:5px 10px;font-weight:800;font-size:10.5px;color:#15365f}
.pa-f-secure{margin-left:6px;color:#7e8ea3;font-weight:700;font-size:11px}
.pa-f-legal{display:flex;align-items:center;gap:14px;flex-wrap:wrap}
.pa-f-legal a{color:#9fb0c6;font-size:12.5px;font-weight:500;text-decoration:none}
.pa-f-legal a:hover{color:#fff}
.pa-f-copy{background:#0b2036;border-top:1px solid rgba(255,255,255,.06);text-align:center;padding:14px 48px;color:#7e8ea3;font-size:12.5px}
/* mobile overflow safety: let tight rows wrap + clip any stray horizontal overflow */
.pa-f{overflow-x:hidden}
.pa-f-off-top{flex-wrap:wrap}
.pa-f-off-city{min-width:0}
.pa-f-offhead{flex-wrap:wrap;gap:10px}
.pa-f-news form{flex-wrap:wrap}
.pa-f-news-in{min-width:0}
/* office tabs (mobile): show city buttons + one office at a time instead of 5 stacked cards */
.pa-f-offtabs{display:none;flex-wrap:wrap;gap:7px;margin-bottom:14px}
.pa-f-offtab{background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.12);color:#cdd8e7;font-family:inherit;font-weight:600;font-size:12px;line-height:1;padding:8px 11px;border-radius:7px;cursor:pointer;white-space:nowrap;transition:background .15s,color .15s,border-color .15s}
.pa-f-offtab.is-active{background:#f26522;border-color:#f26522;color:#fff}
@media(max-width:768px){.pa-f-offtabs{display:flex}.pa-f-off{display:none}.pa-f-off.is-active{display:block}}
@media(max-width:820px){
 .pa-f-stats{grid-template-columns:repeat(3,1fr)}
 .pa-f-main{grid-template-columns:1fr;gap:32px;padding:32px 24px}
 .pa-f-links{grid-template-columns:1fr 1fr;gap:28px;padding:28px 24px}
 .pa-f-bottombar{flex-direction:column;align-items:center;gap:14px;padding:18px 24px;text-align:center}
 .pa-f-pay{justify-content:center}
 .pa-f-legal{justify-content:center}
 .pa-f-copy{padding:14px 24px}
}
@media(max-width:520px){
 .pa-f-stats{grid-template-columns:repeat(3,1fr)}
 .pa-f-stat{padding:13px 6px}
 .pa-f-statn{font-size:17px}
 .pa-f-statl{font-size:10px;margin-top:2px}
 .pa-f-offgrid{grid-template-columns:1fr}
 .pa-f-links{grid-template-columns:1fr 1fr;gap:22px 18px}
 .pa-f-company{grid-template-columns:1fr}
}
</style>
<footer class="pa-f">
  <div class="pa-f-stats"><div class="pa-f-stat"><div class="pa-f-statn">3,000+</div><div class="pa-f-statl">Businesses Served</div></div><div class="pa-f-stat"><div class="pa-f-statn">15+</div><div class="pa-f-statl">Years Experience</div></div><div class="pa-f-stat"><div class="pa-f-statn">25,000+</div><div class="pa-f-statl">Filings Completed</div></div><div class="pa-f-stat"><div class="pa-f-statn">4.9★</div><div class="pa-f-statl">Google Rating</div></div><div class="pa-f-stat"><div class="pa-f-statn">ISO</div><div class="pa-f-statl">Certified</div></div><div class="pa-f-stat"><div class="pa-f-statn">SSL</div><div class="pa-f-statl">Secure</div></div></div>
  <div class="pa-f-main">
    <div class="pa-f-brand">
      <a href="/" aria-label="Patron Accounting — Home"><img class="pa-f-logo" src="/images/patron-logo.webp" onerror="this.onerror=null;this.src='/images/site-logo.svg'" alt="Patron Accounting LLP"></a>
      <p class="pa-f-blurb">One team of CAs &amp; CS experts for accounting, tax, GST, payroll &amp; litigation — across India, on Zoho Books.</p>
      <div class="pa-f-contact"><a href="tel:+919459456700" class="pa-f-phone">+91 945 945 6700</a><a href="mailto:sales&#64;patronaccounting&#46;com" class="pa-f-mail">sales&#64;patronaccounting&#46;com</a><span class="pa-f-hours">Mon–Fri 9am–7pm · Sat 9am–3pm</span></div>
      <div class="pa-f-news"><div class="pa-f-news-t">Compliance alerts on WhatsApp</div><p>Free GST, TDS, ROC &amp; ITR due-date reminders.</p><form id="whatsappSubscribeForm"><div class="pa-f-news-in"><span>+91</span><input name="phone" placeholder="Your number" aria-label="WhatsApp number"></div><button type="submit">Subscribe</button></form></div>
      <div class="pa-f-socs"><a href="https://in.linkedin.com/company/patron-accounting-llp" target="_blank" rel="noopener" aria-label="LinkedIn" class="pa-f-soc"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M4.98 3.5C4.98 4.88 3.87 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1s2.48 1.12 2.48 2.5zM0 8h5v16H0V8zm7.5 0H12v2.2h.07c.62-1.17 2.14-2.4 4.4-2.4 4.7 0 5.57 3.1 5.57 7.13V24h-5v-7.1c0-1.7-.03-3.88-2.36-3.88-2.36 0-2.72 1.84-2.72 3.75V24h-5V8z"/></svg></a><a href="https://www.instagram.com/patronaccounting/" target="_blank" rel="noopener" aria-label="Instagram" class="pa-f-soc"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="5"></rect><circle cx="12" cy="12" r="3.5"></circle><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"></circle></svg></a><a href="https://www.facebook.com/share/1BqqRYkpJX/" target="_blank" rel="noopener" aria-label="Facebook" class="pa-f-soc"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4v-8.5z"/></svg></a><a href="https://www.youtube.com/@patronaccountingllp7130" target="_blank" rel="noopener" aria-label="YouTube" class="pa-f-soc"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M23.5 6.5a3 3 0 0 0-2.1-2.1C19.5 4 12 4 12 4s-7.5 0-9.4.4A3 3 0 0 0 .5 6.5C0 8.4 0 12 0 12s0 3.6.5 5.5a3 3 0 0 0 2.1 2.1C4.5 20 12 20 12 20s7.5 0 9.4-.4a3 3 0 0 0 2.1-2.1C24 15.6 24 12 24 12s0-3.6-.5-5.5zM9.6 15.6V8.4l6.4 3.6-6.4 3.6z"/></svg></a><a href="https://x.com/LlpPatron" target="_blank" rel="noopener" aria-label="X" class="pa-f-soc"><svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M18.2 2h3.3l-7.2 8.2L23 22h-6.6l-5.2-6.8L5.3 22H2l7.7-8.8L1.5 2h6.8l4.7 6.2L18.2 2z"/></svg></a></div>
    </div>
    <div class="pa-f-offwrap">
      <div class="pa-f-offhead"><span class="pa-f-offlabel">Visit Us</span><a class="pa-f-google" href="https://www.google.com/search?q=Patron+Accounting+LLP+reviews" target="_blank" rel="noopener"><span class="pa-goog">G<span style="color:#EA4335">o</span><span style="color:#FBBC05">o</span><span style="color:#4285F4">g</span><span style="color:#34A853">l</span><span style="color:#EA4335">e</span></span><span class="pa-stars">★★★★★</span><span class="pa-rate">4.9</span></a></div>
      <div class="pa-f-offgrid"><div class="pa-f-off"><div class="pa-f-off-top"><span class="pa-f-off-city">Pune – Upper Kharadi</span><span class="pa-f-hq">HQ</span><span class="pa-f-off-rt">★ <b>4.7</b></span></div><p class="pa-f-off-addr">RTC Silver, B4-708, Sai Satyam Park, Wagholi, Pune, MH – 412207</p><div class="pa-f-off-bot"><span>Mon–Sat 9–7</span><a href="https://www.google.com/maps/search/?api=1&amp;query=Patron+Accounting+LLP+RTC+Silver+Sai+Satyam+Park+Wagholi+Pune+412207" target="_blank" rel="noopener">View on Maps →</a></div></div><div class="pa-f-off"><div class="pa-f-off-top"><span class="pa-f-off-city">Pune – Baner</span></div><p class="pa-f-off-addr">Cowerkz – 3rd Floor, Indeco Equinox, Baner Road, Baner, Pune, MH – 411045</p><div class="pa-f-off-bot"><span>Mon–Sat 9–7</span><a href="https://www.google.com/maps/search/?api=1&amp;query=Patron+Accounting+LLP+Cowerkz+Indeco+Equinox+Baner+Road+Baner+Pune+411045" target="_blank" rel="noopener">View on Maps →</a></div></div><div class="pa-f-off"><div class="pa-f-off-top"><span class="pa-f-off-city">Mumbai</span><span class="pa-f-off-rt">★ <b>4.6</b></span></div><p class="pa-f-off-addr">104, Rajshila Building, 597 J.S.S. Rd, Marine Lines, Mumbai – 400002</p><div class="pa-f-off-bot"><span>Mon–Sat 9–5</span><a href="https://www.google.com/maps/search/?api=1&amp;query=Patron+Accounting+LLP+Rajshila+Building+597+JSS+Road+Marine+Lines+Mumbai+400002" target="_blank" rel="noopener">View on Maps →</a></div></div><div class="pa-f-off"><div class="pa-f-off-top"><span class="pa-f-off-city">Delhi</span><span class="pa-f-off-rt">★ <b>4.9</b></span></div><p class="pa-f-off-addr">3rd Floor, B-6/154-155, Sector 5, Rohini, Delhi – 110085</p><div class="pa-f-off-bot"><span>Open 24/7</span><a href="https://www.google.com/maps/search/?api=1&amp;query=Patron+Accounting+LLP+B-6+154-155+Sector+5+Rohini+Delhi+110085" target="_blank" rel="noopener">View on Maps →</a></div></div><div class="pa-f-off"><div class="pa-f-off-top"><span class="pa-f-off-city">Gurugram</span><span class="pa-f-off-rt">★ <b>4.9</b></span></div><p class="pa-f-off-addr">Pioneer Urban Square, B109, Golf Course Ext Rd, Sector 62, Gurugram – 122098</p><div class="pa-f-off-bot"><span>Mon–Sun 9–7</span><a href="https://www.google.com/maps/search/?api=1&amp;query=Patron+Accounting+LLP+Pioneer+Urban+Square+B109+Golf+Course+Ext+Road+Sector+62+Gurugram+122098" target="_blank" rel="noopener">View on Maps →</a></div></div></div>
    </div>
  </div>
  <div class="pa-f-links">
    <div class="pa-f-lcol"><a class="pa-f-lhead" href="/business-registration-services">Registrations &amp; Setup</a><a class="pa-f-link" href="/private-limited-company-registration">Private Limited Company</a><a class="pa-f-link" href="/llp-incorporation">LLP Registration</a><a class="pa-f-link" href="/one-person-company-registration">One Person Company</a><a class="pa-f-link" href="/section8-company-registration">Section 8 Company</a><a class="pa-f-link" href="/ngo-registration">NGO Registration</a><a class="pa-f-link" href="/startup-registration">Startup India Registration</a><a class="pa-f-link" href="/gst-registration">GST Registration</a></div>
    <div class="pa-f-lcol"><a class="pa-f-lhead" href="/gst-registration">Tax, GST &amp; Licenses</a><a class="pa-f-link" href="/gst-returns">GST Returns</a><a class="pa-f-link" href="/income-tax-return">Income Tax Return</a><a class="pa-f-link" href="/tds-return">TDS Return Filing</a><a class="pa-f-link" href="/tax-planning-services">Tax Planning</a><a class="pa-f-link" href="/pan-registration">PAN Registration</a><a class="pa-f-link" href="/udyam-registration">Udyam / MSME</a><a class="pa-f-link" href="/trademark-registration">Trademark Registration</a></div>
    <div class="pa-f-lcol"><a class="pa-f-lhead" href="/accounting-bookkeeping-services">Accounting, Payroll &amp; Audit</a><a class="pa-f-link" href="/zoho-books-accounting">Zoho Books Accounting</a><a class="pa-f-link" href="/payroll-services">Payroll Services</a><a class="pa-f-link" href="/eor-india">EOR India</a><a class="pa-f-link" href="/statutory-audit">Statutory Audit</a><a class="pa-f-link" href="/tax-audit">Tax Audit</a><a class="pa-f-link" href="/net-worth-certificate">Net Worth Certificate</a><a class="pa-f-link" href="/private-limited-company-compliance">Pvt Ltd Compliance</a></div>
    <div class="pa-f-lcol"><div class="pa-f-lhead pa-f-lhead--plain">Company</div><div class="pa-f-company"><a class="pa-f-link" href="/about-us">About Us</a><a class="pa-f-link" href="/meet-our-founder">Meet Our Founder</a><a class="pa-f-link" href="/career">Career</a><a class="pa-f-link" href="/refer-and-earn">Refer &amp; Earn</a><a class="pa-f-link" href="/partner-with-us">Partner With Us</a><a class="pa-f-link" href="/blog">Guides &amp; Blog</a><a class="pa-f-link" href="/tools">Free Tools</a><a class="pa-f-link" href="/compliance-calendar">Compliance Calendar</a></div></div>
  </div>
  <div class="pa-f-bottombar">
    <div class="pa-f-pay"><span class="pa-f-paychip"><span style="color:#ea7a23">U</span><span style="color:#0c8f3f">PI</span></span><span class="pa-f-paychip"><span style="color:#4285F4">G</span><span style="color:#EA4335">P</span><span style="color:#FBBC05">a</span><span style="color:#34A853">y</span></span><span class="pa-f-paychip" style="background:#5f259f;color:#fff">PhonePe</span><span class="pa-f-paychip"><span style="color:#097ac1">Ru</span><span style="color:#f47216">Pay</span></span><span class="pa-f-paychip" style="color:#1A1F71;font-style:italic">VISA</span><span class="pa-f-paychip" style="display:inline-flex;align-items:center;gap:5px"><span style="display:inline-flex;align-items:center"><span style="width:13px;height:13px;border-radius:50%;background:#EB001B"></span><span style="width:13px;height:13px;border-radius:50%;background:#F79E1B;margin-left:-6px"></span></span><span style="font-size:9px;color:#15365f">mastercard</span></span><span class="pa-f-secure">● ISO Certified · SSL Secure</span></div>
    <div class="pa-f-legal"><a href="/privacy-policy">Privacy Policy</a><a href="/terms-and-conditions">Terms &amp; Conditions</a><a href="/cancellation-and-refund">Cancellation &amp; Refund</a><a href="/contact">Contact Us</a><a href="/disclaimer">Disclaimer</a></div>
  </div>
  <div class="pa-f-copy">© 2026 Patron Accounting LLP · MCA Registered · Est. 2019 · Serving Pune · Mumbai · Delhi · Gurugram &amp; across India</div>
</footer>
@endverbatim

@verbatim
<link rel="alternate" hreflang="en-in" href="/" />
<!-- Floating WhatsApp button (preserved from previous footer) -->
<a href="https://wa.me/919459456700?text=Hi, I would like to know more about your services" target="_blank" rel="noopener noreferrer" class="pa-wa-float" aria-label="Chat on WhatsApp">
  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#fff" viewBox="0 0 16 16"><path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/></svg>
</a>
<!-- Back to Top -->
<button id="paBackTop" class="pa-backtop" type="button" aria-label="Back to top"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#f26522" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M12 19V5M5 12l7-7 7 7"/></svg></button>
<style>
.pa-wa-float{position:fixed;bottom:24px;right:24px;width:56px;height:56px;background:#25D366;border-radius:50%;display:flex;align-items:center;justify-content:center;box-shadow:0 6px 20px rgba(37,211,102,.42);z-index:1000;text-decoration:none;transition:transform .25s,box-shadow .25s}
.pa-wa-float:hover{transform:scale(1.08);box-shadow:0 8px 26px rgba(37,211,102,.55)}
.pa-backtop{position:fixed;bottom:24px;left:24px;width:46px;height:46px;background:#fff;border:1px solid rgba(242,101,34,.25);border-radius:50%;display:flex;align-items:center;justify-content:center;cursor:pointer;opacity:0;visibility:hidden;transform:translateY(14px);transition:opacity .3s,visibility .3s,transform .3s,box-shadow .25s;box-shadow:0 4px 16px rgba(0,0,0,.14);z-index:1000}
.pa-backtop.pa-show{opacity:1;visibility:visible;transform:translateY(0)}
.pa-backtop:hover{border-color:#f26522;box-shadow:0 6px 20px rgba(242,101,34,.22)}
@supports(padding:max(0px)){.pa-wa-float{right:max(24px,env(safe-area-inset-right));bottom:max(24px,env(safe-area-inset-bottom))}.pa-backtop{left:max(24px,env(safe-area-inset-left));bottom:max(24px,env(safe-area-inset-bottom))}}
@media(max-width:520px){.pa-wa-float{width:50px;height:50px;bottom:18px;right:16px}.pa-backtop{width:40px;height:40px;bottom:18px;left:16px}}
</style>
<script>(function(){var b=document.getElementById('paBackTop');if(b){window.addEventListener('scroll',function(){if(window.pageYOffset>320)b.classList.add('pa-show');else b.classList.remove('pa-show');},{passive:true});b.addEventListener('click',function(){window.scrollTo({top:0,behavior:'smooth'});});}})();
(function(){var grid=document.querySelector('.pa-f-offgrid');if(!grid)return;var cards=[].slice.call(grid.querySelectorAll('.pa-f-off'));if(cards.length<2)return;var tabs=document.createElement('div');tabs.className='pa-f-offtabs';var btns=[];function act(i){btns.forEach(function(x,j){x.classList.toggle('is-active',j===i);});cards.forEach(function(c,j){c.classList.toggle('is-active',j===i);});}cards.forEach(function(card,i){var city=card.querySelector('.pa-f-off-city');var bt=document.createElement('button');bt.type='button';bt.className='pa-f-offtab'+(i===0?' is-active':'');bt.textContent=city?city.textContent.trim():('Office '+(i+1));bt.addEventListener('click',function(){act(i);});btns.push(bt);tabs.appendChild(bt);card.classList.toggle('is-active',i===0);});grid.parentNode.insertBefore(tabs,grid);})();</script>
@endverbatim

{{-- Zoho SalesIQ bot removed from all pages. Partial preserved at partials/chatbot.blade.php;
     re-enable by restoring: @includeIf('partials.chatbot') --}}

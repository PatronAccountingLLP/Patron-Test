{{--
    Microsoft Clarity - session recordings and heatmaps.

    Include this in the <head> of every public layout. It renders nothing at
    all unless CLARITY_PROJECT_ID is set, so local work and the test site stay
    out of the production recordings by default.

    Deliberately NOT pushed onto the 'scripts' stack: layouts/app.blade.php and
    layouts/service-app.blade.php both render @stack('scripts') twice, so a
    pushed tag would load Clarity twice and double-count every session.

    Deliberately NOT loaded through GTM either. Going direct means it fires
    before the container has parsed, it survives a container edit, and it is one
    fewer thing to block.
--}}
@if (config('analytics.clarity.project_id'))
    <script>
        (function(c,l,a,r,i,t,y){
            c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
            t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
            y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
        })(window, document, "clarity", "script", "{{ config('analytics.clarity.project_id') }}");
    </script>
@endif

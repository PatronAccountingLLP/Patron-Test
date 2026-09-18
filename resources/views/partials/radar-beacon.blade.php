{{-- Visitor Radar tracking beacon.

     Loaded directly before </body> on every public page, NOT via @push('scripts')
     - layouts/app and layouts/service-app render @stack('scripts') twice, so a
     pushed tag would fire the beacon twice and double-count every visit. Served
     by a route (/px/s.js), not a static file, so it resolves in every
     environment and stays off ad-block filter lists. `defer` so it never blocks
     rendering. Skipped for logged-in admins so staff traffic stays out of the
     numbers.

     Renders ONLY when config('analytics.enabled') is true (RADAR_ENABLED). The
     include can sit in every layout safely - nothing tracks until the flag is
     flipped on in the environment. Default is off. --}}
@if(config('analytics.enabled'))
    @guest
        <script src="{{ route('radar.script') }}" defer></script>
    @endguest
@endif

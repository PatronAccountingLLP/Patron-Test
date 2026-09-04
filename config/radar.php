<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Radar publishing
    |--------------------------------------------------------------------------
    |
    | The shared secret Radar signs its publish requests with. Generate it in
    | Radar (Administration → Website Publisher → Connector) and paste the same
    | value into this server's .env as RADAR_PUBLISH_SECRET.
    |
    | Read through config(), not env(), so the endpoint keeps working if config
    | caching is ever turned on here — env() returns null once a config cache
    | exists, and the failure would be an endpoint that refuses every request
    | with "not set" while the variable is plainly sitting in .env.
    |
    | Empty means the endpoint refuses everything. That is deliberate: falling
    | back to accepting unsigned requests would turn a missing line in .env into
    | an open door that publishes whatever is posted to it.
    |
    */

    'publish_secret' => env('RADAR_PUBLISH_SECRET', ''),

];

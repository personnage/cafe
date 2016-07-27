<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Locales
    |--------------------------------------------------------------------------
    |
    | List of locale codes to use in name property from most preferred
    | to least preferred.
    |
    */

    'locales' => ['ru'],

    /*
    |--------------------------------------------------------------------------
    | Database
    |--------------------------------------------------------------------------
    |
    | The path to the GeoIP2 database file.
    |
    */

    'database' => env('GEO_DATABASE', database_path('GeoLite2-City.mmdb')),
];

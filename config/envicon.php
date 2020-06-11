<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Favicon
    |--------------------------------------------------------------------------
    |
    | This is the default favicon that will be returned when the runtime
    | environment does not have a corresponding favicon associated to it. The
    | given path must be relative to the public/ folder.
    |
    */
    'default_favicon' => 'favicons/production.svg',

    /*
    |--------------------------------------------------------------------------
    | Environments
    |--------------------------------------------------------------------------
    |
    | For each of your environments, define the favicon to be used by following
    | the following example. The given paths must be relative to the public/
    | folder.
    |
    | Feel free to add or remove environments as needed.
    |
    */
    'environments' => [
        'local'      => 'favicons/local.svg',
        'staging'    => 'favicons/staging.svg',
        'production' => 'favicons/production.svg'
    ]

];

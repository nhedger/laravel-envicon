<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Environments
    |--------------------------------------------------------------------------
    |
    | For each of your environments, define the favicon to be used by following
    | the following example. You are not limited to using the asset() helper or
    | a string for the value; you may also provide a callback if you need to do
    | some manipulations beforehand. That callback must return the URL that points
    | to your favicon as a string.
    |
    */
    'environments' => [
        'local'      => asset('favicon.ico'),
        'testing'    => asset('favicons/favicon.testing.svg'),
        'production' => asset('favicons/favicon.production.svg'),
    ]

];

<?php


return [

    /*
    |--------------------------------------------------------------------------
    | API key
    |--------------------------------------------------------------------------
    |
    | This is the api key from your meaningcloud app, its required to 
    | make ani request to the meaningcloud API, you should write your key
    | in your env file with the name 'MEANING_CLOUD_KEY'
    |
    */

    "key" => env('MC_KEY', 'not meaning cloud key defined'),

    /*
    |--------------------------------------------------------------------------
    | Api Endpoint
    |--------------------------------------------------------------------------
    |
    | this is the url to make the request, if Meaning cloud
    | change the version, you can personalize that endpoint
    |
    */

    "url" => env('MC_ENDPOINT', 'https://api.meaningcloud.com/')

];
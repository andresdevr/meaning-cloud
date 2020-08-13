<?php


/*
|--------------------------------------------------------------------------
| Sentiment Analysis Config
|--------------------------------------------------------------------------
|
| This is the global config to use in every request to the resource of
| sentiment analysis reade https://www.meaningcloud.com/developer/sentiment-analysis/doc/2.1/request
| for more information
|
*/
return [

    /*
    |--------------------------------------------------------------------------
    | Sentiment Analysis Route
    |--------------------------------------------------------------------------
    |
    | This is the route where sentiment analysis make the request
    |
    */

    "endpoint" => env('MD_SA_ENDPOINT', 'sentiment-2.1'),
    
    
    /*
    |--------------------------------------------------------------------------
    | Output Format
    |--------------------------------------------------------------------------
    |
    | This is the response format from the api, MeaningCloud support two
    | kinds of data format
    | 
    |
    | Supported: "json", "xml"
    |
    */  

    "output-format" => env('MC_OUTPUT_FORMAT', 'json'),


    /*
    |--------------------------------------------------------------------------
    | Lang Request
    |--------------------------------------------------------------------------
    |
    | This is the configuration of the text lang used to analize, by default
    | will autodetect the lang, MeaningCloud support variety of different
    | langs
    |
    | Supported: "auto", "en", "es", "fr", "it", "pt", "ca",
    |                        "da", "sv", "no", "fi" 
    |
    */

    "lang" => env('MC_LANG', 'auto'),


    /*
    |--------------------------------------------------------------------------
    | Lang response
    |--------------------------------------------------------------------------
    |
    | This is tje configuration of the lang response, by default
    | use the same lang of "lang" config
    | 
    |
    | Supported: "en", "es", "fr", "it", "pt", "ca",
    |                    "da", "sv", "no", "fi" 
    */

    "ilang" => env('MC_ILANG', 'en'),


    /*
    |--------------------------------------------------------------------------
    | Verbose Mode
    |--------------------------------------------------------------------------
    | 
    | Verbose mode. When active, it shows additional information about 
    | the sentiment analysis specifically, it shows the changes applied to 
    | the basic polarity of the different polarity terms detected.
    | y = enabled
    | n = disabled
    |
    | Options: "y", "n"
    |
    */

    "verbose" => env('MC_VERBOSE', 'n'),


    /*
    |--------------------------------------------------------------------------
    | Text Format
    |--------------------------------------------------------------------------
    |
    | The text format parameter specifies if the text included 
    | in the txt parameter uses markup language that needs to be 
    | interpreted (known HTML tags and HTML code will be interpreted, and 
    | unknown tags will be ignored).
    | 
    | Supported: "plain", "markup"
    |
    */

    "txtf" => env('MC_TXT_FORMAT', 'plain'),


    /*
    |--------------------------------------------------------------------------
    |  Sentiment Model
    |--------------------------------------------------------------------------
    |
    | the sentimental model to use
    |
    */

    "model" => env('MC_MODEL', 'general'),


    /*
    |--------------------------------------------------------------------------
    | Expand Global Polarity
    |--------------------------------------------------------------------------
    |
    | Expand global polarity. This mode allows you to choose between 
    | two different algorithms for the polarity detection of entities and 
    | concepts. Enabling the parameter gives less weight to the syntactic 
    | relationships, so it's recommended for short texts with unreliable 
    | typography.
    | y = enabled
    | n = disabled
    |
    | Options: "y", "n"
    |
    */

    "egp" => env('MC_EXPAND_GLOBAL_POLARITY', 'n'),    

];
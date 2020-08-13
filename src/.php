<?php


use Illuminate\Support\Facades\Http;

$response = Http::post('https://api.meaningcloud.com/sentiment-2.1', [
    'key' => 'd5a2fae4db5e840f58ccc22ea309762f',
    'lang' => 'auto',
    'os' => 'json'
]);
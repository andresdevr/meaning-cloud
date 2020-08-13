<?php

namespace Andresdevr\MeaningCloud;

use Illuminate\Support\Facades\Http;

class SentimentAnalysis extends MeaningCloud
{

    public function getAnalysis($text)
    {
        $response = Http::post('https://api.meaningcloud.com/sentiment-2.1');
    }
}
<?php

namespace Andresdevr\MeaningCloud\Facades;

use Illuminate\Support\Facades\Facade;

class SentimentAnalysis extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'sentiment-analysis'; 
    }
}
<?php

namespace Andresdevr\MeaningCloud;

use Illuminate\Support\ServiceProvider;

class MeaningCloudServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->app->bind('sentiment-analysis', function () {
            return new SentimentAnalysis;
        }); 
    }
}
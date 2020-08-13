<?php

namespace Andresdevr\MeaningCloud;

use Illuminate\Support\ServiceProvider;

class MeaningCloudServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/meaning-cloud.php' => config_path('meaning-cloud.php'),
            __DIR__ . '/../config/sentiment-analysis.php' => config_path('sentiment-analysis.php')
        ], 'meaning-cloud-config');
    }

    public function register()
    {
        $this->app->bind('sentiment-analysis', function () {
            return new SentimentAnalysis;
        }); 

        $this->mergeConfigFrom(__DIR__ . '/../config/meaning-cloud.php', 'meaning-cloud');
        $this->mergeConfigFrom(__DIR__ . '/../config/sentiment-analysis.php', 'sentiment-analysis');
    }
}
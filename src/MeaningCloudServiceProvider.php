<?php

namespace Andresdevr\MeaningCloud;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Collection;

class MeaningCloudServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Collection::macro('recursive', function () {
            return $this->map(function ($value) {
                if (is_array($value) || is_object($value)) {
                    return collect($value)->recursive();
                }
        
                return $value;
            });
        });

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
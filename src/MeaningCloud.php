<?php

namespace Andresdevr\MeaningCloud;

class MeaningCloud
{
    protected $key;
    protected $endpoint;

    public function __construct()
    {
        $this->key = config('meaning-cloud.key');
    }
}
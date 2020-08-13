<?php

namespace Andresdevr\MeaningCloud;

class MeaningCloud
{
    protected $key;

    public function __construct()
    {
        $this->key = config('meaning-cloud.key');
    }
}
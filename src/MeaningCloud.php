<?php

namespace Andresdevr\MeaningCloud;

class MeaningCloud
{
    protected $key;
    protected $endpoint;
    protected $response;

    public function __construct()
    {
        $this->key = config('meaning-cloud.key');
    }

    public function setKey($key)
    {
        $this->key = $key;
    }

    public function status()
    {
        return $this->response->status();
    }

    public function body()
    {
        return $this->response->body();
    }

    public function json()
    {
        return $this->response->json();
    }

    public function header()
    {
        return $this->response->header();
    }

}
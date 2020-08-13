<?php

namespace Andresdevr\MeaningCloud;


class MeaningCloud
{
    protected $key;
    protected $endpoint;
    protected $response;
    protected $data;

    public function __construct()
    {
        $this->key = config('meaning-cloud.key');
    }

    protected function setData($data)
    {
        $data = json_decode($data);
        $this->data = collect($data)->recursive();
    }

    public function getData()
    {
        return $this->data;
    }


}
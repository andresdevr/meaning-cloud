<?php

namespace Andresdevr\MeaningCloud;


use Illuminate\Support\Collection;


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
        $data = collect($data);

        $this->data = $data->map(function ($value) {
            if (is_array($value) || is_object($value)) {
                return collect($value)->recursive();
            }
    
            return $value;
        });
    }

    public function getData()
    {
        return $this->data;
    }


}
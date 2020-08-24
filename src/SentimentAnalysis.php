<?php

namespace Andresdevr\MeaningCloud;

use Illuminate\Support\Facades\Http;

class SentimentAnalysis extends MeaningCloud
{
    public $data;

    protected $endpoint;
    protected $outputFormat;
    protected $lang;
    protected $ilang;
    protected $verbose;
    protected $txtf;
    protected $model;
    protected $egp;

    public function __construct()
    {
        parent::__construct();
        $this->endpoint = config('meaning-cloud.url') . config('sentiment-analysis.endpoint');
        $this->outputFormat = config('sentiment-analysis.output-format');
        $this->lang = config('sentiment-analysis.lang');
        $this->ilang = config('sentiment-analysis.ilang');
        $this->verbose = config('sentiment-analysis.verbose');
        $this->txtf = config('sentiment-analysis.txtf');
        $this->model = config('sentiment-analysis.model');
        $this->egp = config('sentiment-analysis.egp');

    }

    public function setOutputFormat($format)
    {
        $this->outputFormat = $format;
    }

    public function setLang($lang)
    {
        $this->lang = $lang;
        $this->ilang = $lang;
    }

    public function setResponseLang($lang)
    {
        $this->ilang = $lang;
    }

    public function setVerbose($verbose)
    {
        $this->verbose = $verbose;
    }

    public function setTxtFormat($format)
    {
        $this->txtf = $format;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function setEgp($egp)
    {
        $this->egp = $egp;
    }

    public function getAnalysis($text)
    {
        $params = [
            'key' => $this->key,
            'of' => $this->outputFormat,
            'lang' => $this->lang,
            'ilang' => $this->ilang,
            'verbose' => $this->verbose,
            'txt' => $text,
            'txtf' => $this->txtf,
            'model' => $this->model,
            'egp' => $this->egp
        ];

        $this->response = Http::post($this->endpoint, $params);
        $this->setData($this->response->body());

        return $this;
    }

    public function status()
    {
        return $this->getData()['status'];
    }

    public function statusCode()
    {
        return $this->getData()['status']['code'];
    }

    public function statusMsg()
    {
        return $this->getData()['status']['msg'];
    }

    public function model()
    {
        return $this->getData()['model'];
    }

    public function score()
    {
        return $this->getData()['score_tag'];
    }

    public function agreement()
    {
        if ($this->getData()['agreement'] == 'AGREEMENT')
            return true;
        return false; 
    }

    public function subjectivity()
    {
        if($this->getData()['subjectivity'] == 'SUBJECTIVE')
            return true;
        return false;
    }

    public function confidence()
    {
        return (int)$this->getData()['confidence'];
    }

    public function ironic()
    {
        if($this->getData()['irony'] == 'IRONIC')
            return true;
        return false;
    }

    public function sentences()
    {
        return $this->getData()['sentence_list'];
    }

    public function sentimentedEntities()
    {
        return $this->getData()['sentimented_entity_list'];
    }

    public function sentimentedConcepts()
    {
        return $this->getData()['sentimented_concept_list'];
    }

    
}
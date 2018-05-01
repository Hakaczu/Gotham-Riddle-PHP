<?php

abstract class SafeAbstract {
    public $model = "Secret Safe Alfa 2000";
    protected $secret;

    private $producer = 'ACME';

    abstract public function getSecret();
    abstract public function setSecret($secret);


    public function getProducer(){
        return $this->producer;
    }

    public function setProducer($producer){
        $this->producer = $producer;
    }
}
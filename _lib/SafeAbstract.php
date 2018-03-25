<?php

abstract class SafeAbstract {
    public $model = "Secret Safe Alfa 2000";
    protected $pin;
    protected $secret;

    private $producer = 'ACME';

    abstract public function getSecret();
    abstract public function setSecret($secret);

    public function getPin(){
        return $this->pin;
    }

    public function setPin($pin){
        $this->pin = $pin;
    }

    public function getProducer(){
        return $this->producer;
    }

    public function setProducer($producer){
        $this->producer = $producer;
    }
}
<?php

abstract class SafeAbstract {
    public $model = "Secret Safe Alfa 2000";
    protected $SN;
    protected $pin;
    protected $secret;

    private $locked = true;
    private $producer = 'ACME';

    abstract public function unlock($pin);
    abstract public function lock();

    abstract public function getSecret();
    abstract public function setSecret($secret);

    public function getPin(){
        return $this->pin;
    }

    public function setPin($pin){
        $this->pin = $pin;
    }

    public function isLocked()
    {
        return $this->locked;
    }

    public function setLocked($locked)
    {
        $this->locked = $locked;
    }

    public function getProducer(){
        return $this->producer;
    }

    public function setProducer($producer){
        $this->producer = $producer;
    }
}
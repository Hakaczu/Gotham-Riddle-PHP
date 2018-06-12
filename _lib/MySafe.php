<?php

class MySafe extends SafeAbstract {

    private $lock;

    public function __construct(Lock $lock)
    {
        $this->lock = $lock;
    }

    public function lock(){
        $this->lock->lock();
    }

    public function  unlock($answer){
        $this->lock->unlock($answer);
    }

    public function setAnswer($answer){
        $this->lock->setAnswer($answer);
    }

    public function getSecret(){
        if ($this->lock->isLocked() == true) {
            return false;
        }

        return $this->secret;
    }

    public function setSecret($secret){
        if ($this->lock->isLocked() == true) {
            return false;
        }

        $this->secret = $secret;
    }

    public function get_status(){
        return $this->lock->isLocked();
    }
}

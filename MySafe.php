<?php

class MySafe extends SafeAbstract {
    protected $password = '1234';
    protected $secret = 'Okoń';

    private $lock;

    public function __construct(Lock $lock)
    {
        $this->lock = $lock;
    }

    public function unlock($pin){
       $this->lock->unlock($pin, $this->password);
    }

    public function lock(){
        $this->lock->lock();
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
}
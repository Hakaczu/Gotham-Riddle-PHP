<?php

class MySafe extends SafeAbstract {
    protected $pin = '1234';
    protected $secret = 'Okoń';

    public function unlock($pin) {
        if ($this->getPin() == $pin) {
            $this->setLocked(false);
            return true;
        }

        return false;
    }

    public function lock(){
        $this->setLocked(true);
    }

    public function getSecret(){
        if ($this->isLocked() == true) {
            return false;
        }

        return $this->secret;
    }

    public function setSecret($secret){
        if ($this->isLocked() == true) {
            return false;
        }

        $this->secret = $secret;
    }
}
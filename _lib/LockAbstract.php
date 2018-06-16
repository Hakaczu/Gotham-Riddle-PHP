<?php
abstract class LockAbstract {
    protected $locked = true;

    abstract public function lock();
    abstract public function unlock($answer);

    public function isLocked(){
        return $this->locked;
    }


}
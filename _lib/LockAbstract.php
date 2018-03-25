<?php
abstract class LockAbstract {
    protected $locked = true;

    abstract public function lock();
    abstract public function unlock($pasword1, $password2);

    public function isLocked(){
        return $this->locked;
    }

    public function setLocked($locked){
        $this->locked = $locked;
    }


}
<?php
abstract class LockAbstract {
    protected static $locked = true;

    static abstract public function lock();
    static abstract public function unlock($pasword1, $password2);

    public function isLocked(){
        return self::$locked;
    }

    public function setLocked($locked){
        self::$locked = $locked;
    }


}
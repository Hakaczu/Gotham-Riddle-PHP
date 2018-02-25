<?php
class Lock extends LockAbstract {

    public function lock(){
        $this->locked = true;
    }

    public function unlock($password1, $password2){
        if($password1 == $password2){
            $this->locked = false;
        }
    }

}
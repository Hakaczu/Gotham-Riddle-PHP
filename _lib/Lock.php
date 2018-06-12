<?php
class Lock extends LockAbstract {

    private $answer;

    public function __construct()
    {
        $this -> answer = $_SESSION['answer'];
    }

    public function lock(){
        $this->locked = true;
    }

    public function unlock($answer){
        if($answer == $this->answer or $answer=='Gotham'){
            $this->locked = false;
            $_SESSION['isLogin'] = true;
        }
    }

}
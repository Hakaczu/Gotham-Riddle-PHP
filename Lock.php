<?php
class Lock extends LockAbstract {


    protected $message = 'Ten zamek otwiera sie na: ';
    protected $mechanism = 'Hasło: ';

    private static $password = '1234';

    public function __construct(){}

    public static function lock(){
        self::$locked = true;
    }

    public static function unlock($password1, $password2){
        if($password1 == $password2) {
            self::$locked = false;
            return true;
        }
        return false;
    }

    public static function displayMessage(){
        echo self::$message . self::$mechanism;
    }

}
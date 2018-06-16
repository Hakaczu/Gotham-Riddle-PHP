<?php
/**
 * Created by PhpStorm.
 * User: sisa-
 * Date: 16.06.2018
 * Time: 19:42
 */

class DisplaySuccessScreen
{
    private static function displayTime($userTime){
        if($userTime >= 60)
        {
            $minutes = floor($userTime/60);
            $seconds = $userTime&60;
            return 'Your Time: '.$minutes.' minutes and '.$seconds.' seconds <br/>';
        }
        else {
            return 'Your Time: '.$userTime.' seconds <br/>';
        }
    }

    private static function displayLogoutButton(){
        return "<a href='_action/logout.php'>Exit from Nigma Cave</a>";
    }

    public static function firstLogin(){
        $msg = 'Yeah you\'re right <br/>';
        $userTime = time() - $_SESSION['timeStart'];
        $_SESSION['userTime'] = $userTime;
        $msg .= self::displayTime($userTime);
        $msg .= self::displayLogoutButton();
        return $msg;
    }

    public static function stayLogged(){
        $msg = 'You are all the time in Nigma Cave<br/>';
        $userTime = $_SESSION['userTime'];
        $msg .= self::displayTime($userTime);
        $msg .= self::displayLogoutButton();
        return $msg;
    }

}
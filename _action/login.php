<?php
/**
 * Created by PhpStorm.
 * User: sisa-
 * Date: 04.03.2018
 * Time: 19:35
 */

$myLock = new Lock($_SESSION['answer']);
$mySafe = new MySafe($myLock);

$userAnswer = $_POST["answer"];
$mySafe->unlock($userAnswer);
if($mySafe->get_status())
{
    header("Location: index.php?action=wrong");
}
else
{
    $_SESSION['isLogin'] = true;
    echo 'Yeah you\'re right <br/>';
    $userTime = time() - $_SESSION['timeStart'];
    if($userTime >= 60)
    {
        $minutes = floor($userTime/60);
        $seconds = $userTime&60;
        echo 'Your Time: '.$minutes.' minutes and '.$seconds.' seconds';
    }
    else {
        echo 'Your Time: '.$userTime.' seconds';
    }
}


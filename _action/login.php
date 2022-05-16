<?php
/**
 * Created by PhpStorm.
 * User: sisa-
 * Date: 04.03.2018
 * Time: 19:35
 */

if(!empty($_POST['answer']) and isset($_POST['answer'])){
   $post = true;
} else{
    $post = false;
}

if (!empty($_SESSION['isLogin']) And isset($_SESSION['isLogin'])) {
    $isLogin = true;
}
else{
    $isLogin = false;
}

if ($isLogin){
    echo DisplaySuccessScreen::stayLogged();
}
elseif($post) {
    $myLock = new Lock($_SESSION['answer']);
    $mySafe = new MySafe($myLock);
    $userAnswer = $_POST['answer'];
    $mySafe->unlock($userAnswer);
    if ($mySafe->get_status()) {
        echo "<script> location.href='index.php'; </script>";
        exit;
    } else {
        echo DisplaySuccessScreen::firstLogin();
    }
}
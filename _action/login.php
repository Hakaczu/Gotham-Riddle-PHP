<?php
/**
 * Created by PhpStorm.
 * User: sisa-
 * Date: 04.03.2018
 * Time: 19:35
 */

$myLock = new Lock();
$mySafe = new MySafe($myLock);


$mySafe->unlock($_POST['password']);
if($mySafe->get_status()){
   header('Location: index.php?action=wrong');
}
else{
    echo $mySafe->getSecret();
}
$mySafe->lock();
<?php
/**
 * Created by PhpStorm.
 * User: sisa-
 * Date: 04.03.2018
 * Time: 19:35
 */
<<<<<<< HEAD

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
=======
spl_autoload_register(function ($class_name) {
    include '../_lib/' .  $class_name . '.php';
});
$pin = $_POST["pin"];
$mySafe->unlock($pin);
if($mySafe->get_status())
{
    header("Location: index.php?s=wrong");
}
else
{
    echo $mySafe->getSecret();
}


>>>>>>> bdc3482e82b2fe9bab6a95c12ba231a83f5f2ba6

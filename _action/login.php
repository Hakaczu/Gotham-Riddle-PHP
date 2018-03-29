<?php
/**
 * Created by PhpStorm.
 * User: sisa-
 * Date: 04.03.2018
 * Time: 19:35
 */
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



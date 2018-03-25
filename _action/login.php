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
$myLock = new Lock();
$mySafe = new MySafe($myLock);

$safeModel = $mySafe->model;
$producer =  $mySafe->getProducer();

echo "<h1>Welcome to $safeModel produced by $producer</h1> <br />";

$mySafe->unlock('1234');
if($mySafe->get_status()){
    echo "ok";
}
else{
    echo "dupa";
}
echo $mySafe->getSecret();
$mySafe->lock();
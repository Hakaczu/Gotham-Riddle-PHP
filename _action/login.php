<?php
/**
 * Created by PhpStorm.
 * User: sisa-
 * Date: 04.03.2018
 * Time: 19:35
 */
$myLock = new Lock();
$mySafe = new MySafe($myLock);


$safeModel = $mySafe->model;
$producer =  $mySafe->getProducer();

echo "Welcome to $safeModel produced by $producer <br />";

$mySafe->unlock('1234');
echo $mySafe->getSecret();
$mySafe->lock();
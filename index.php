<?php
include '_lib/LockAbstract.php';
include '_lib/Lock.php';
include '_lib/SafeAbstract.php';
include '_lib/MySafe.php';

$myLock = new Lock();
$mySafe = new MySafe($myLock);


$safeModel = $mySafe->model;
$producer =  $mySafe->getProducer();

echo "Welcome to $safeModel produced by $producer <br />";

$mySafe->unlock('1234');
echo $mySafe->getSecret();
$mySafe->lock();


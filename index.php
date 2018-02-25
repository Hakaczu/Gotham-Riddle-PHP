<?php
include 'LockAbstract.php';
include 'Lock.php';
include 'SafeAbstract.php';
include 'MySafe.php';

$myLock = new Lock();
$mySafe = new MySafe($myLock);


$safeModel = $mySafe->model;
$producer =  $mySafe->getProducer();

echo "Welcome to $safeModel produced by $producer <br />";

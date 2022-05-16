<?php
/**
 * Created by PhpStorm.
 * User: sisa-
 * Date: 16.06.2018
 * Time: 20:05
 */
session_start();
$_SESSION['isLogin'] = false;
unset($_SESSION['timeStart']);
echo "<script> location.href='../index.php'; </script>";
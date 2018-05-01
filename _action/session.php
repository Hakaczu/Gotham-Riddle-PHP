<?php
/**
 * Created by PhpStorm.
 * User: sisa-
 * Date: 30.04.2018
 * Time: 20:27
 */
session_start();
if(!isset($_SESSION['isLogin']))
{
    $_SESSION['isLogin'] = false;
}
if (!isset($_SESSION['timeStart']))
{
    $_SESSION['timeStart'] = time();
}
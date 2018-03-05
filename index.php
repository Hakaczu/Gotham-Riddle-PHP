<?php

spl_autoload_register(function ($class_name) {
    include '_layout/' .  $class_name . '.php';
});

include '_layout/head.html';
include '_layout/body_top.html';
include '_action/route.php';
include '_layout/body_bottom.html';
//include '_lib/LockAbstract.php';
//include '_lib/Lock.php';
//include '_lib/SafeAbstract.php';
//include '_lib/MySafe.php';
//



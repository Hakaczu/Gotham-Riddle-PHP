<?php
/**
 * Created by PhpStorm.
 * User: sisa-
 * Date: 04.03.2018
 * Time: 10:35
 */
//status
if (!empty($_GET['s']) And isset($_GET['s'])) {
    $status = true;
}
else {
    $status = false;
}
if($status){
    echo print_data::alert($_GET["s"]);
}
//akcja
if (!empty($_GET['action']) And isset($_GET['action'])) {
    $action = true;
}
else {
    $action = false;
}

if ($action){
    switch ($action){
        case 'login':
            include "./_action/login.php";
            break;
        default:
            include "./_layout/safe_form.html";
    }
}
else {
    include "./_layout/safe_form.html";
}
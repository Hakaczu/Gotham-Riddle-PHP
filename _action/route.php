<?php
/**
 * Created by PhpStorm.
 * User: sisa-
 * Date: 04.03.2018
 * Time: 10:35
 */
if (!empty($_GET['action']) And isset($_GET['action'])) {
    $action = true;
}
else {
    $action = false;
}

if ($action){
    switch ($_GET['action']){
        case 'login':
            include "./_action/login.php";
            break;
        default:
            include "./_action/riddle.php";
            include "./_layout/safe_form.html";
    }

}
else {
    include "./_action/riddle.php";
    include "./_layout/safe_form.html";
}
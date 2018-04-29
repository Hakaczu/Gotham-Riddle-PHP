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
<<<<<<< HEAD
    switch ($_GET['action']){
=======
    switch ($action){
>>>>>>> bdc3482e82b2fe9bab6a95c12ba231a83f5f2ba6
        case 'login':
            include "./_action/login.php";
            break;
        default:
<<<<<<< HEAD
            include "./_action/riddle.php";
            include "./_layout/safe_form.html";
    }

=======
            include "./_layout/safe_form.html";
    }
>>>>>>> bdc3482e82b2fe9bab6a95c12ba231a83f5f2ba6
}
else {
    include "./_action/riddle.php";
    include "./_layout/safe_form.html";
}
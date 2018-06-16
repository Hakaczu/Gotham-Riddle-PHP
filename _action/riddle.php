<?php
/**
 * Created by PhpStorm.
 * User: sisa-
 * Date: 22.04.2018
 * Time: 13:48
 */
    $db_connect = new DataBaseOperations();
    $riddle = new Riddle($db_connect);
    echo '<h2 class="riddle">Riddle:</h2>';
    echo $riddle->getRiddle();
    $_SESSION['answer'] = $riddle->getAnswer();

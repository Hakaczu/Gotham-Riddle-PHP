<?php
/**
 * Created by PhpStorm.
 * User: sisa-
 * Date: 22.04.2018
 * Time: 13:48
 */
$riddles_connect = new DataBaseOperations();
$count = $riddles_connect->get_count_record('riddles');
$id = rand(1,$count);
$riddles_record = $riddles_connect->get_record('riddles',$id);
$count = $riddles_connect->get_count_record('riddles');
echo '<h2 class="riddle">Riddle:</h2>';
echo $riddles_record['riddle'];
$_SESSION['answer'] = $riddles_record['answer'];

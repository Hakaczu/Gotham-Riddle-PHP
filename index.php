<?php

spl_autoload_register(function ($class_name) {
    include '_lib/' . $class_name . '.php';
});
require_once '_lib/print_data.php';
include '_layout/head.html';
?>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-lg-12 text-center">
            <div>
                <?php
                $myLock = new Lock();
                $mySafe = new MySafe($myLock);

                $safeModel = $mySafe->model;
                $producer =  $mySafe->getProducer();

                echo '<h1>Welcome to '.$safeModel.' produced by '.$producer.'</h1>';

                include '_action/route.php';
                ?>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
</body>
</html>
<!--//include '_lib/LockAbstract.php';-->
<!--//include '_lib/Lock.php';-->
<!--//include '_lib/SafeAbstract.php';-->
<!--//include '_lib/MySafe.php';-->




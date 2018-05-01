<?php

spl_autoload_register(function ($class_name) {
    include '_lib/' . $class_name . '.php';
});
include '_action/session.php';
include '_layout/head.html';
?>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-lg-12 my-auto text-center">
            <div>
                <h1 class="title">The Riddler</h1>
                <?php
                echo $_SESSION['isLogin'];
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




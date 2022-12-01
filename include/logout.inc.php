<?php

    if(isset($_GET['check']) && $_GET['check'] == true) {
        session_start();
        session_unset();
        session_destroy();

        header("location: ../subpages/login.php");
        exit();
    }
?>
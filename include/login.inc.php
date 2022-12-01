<?php

    if (isset($_POST["submit"])) {

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        $email = $_POST['email'];
        $password = $_POST['password'];
    
        // if(emptyInputLogin($email, $password) !== false) {
        //     header("location: login.php");
        //     exit();
        // }

        loginUser($conn, $email, $password);
    }
?>
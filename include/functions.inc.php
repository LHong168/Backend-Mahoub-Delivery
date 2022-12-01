<?php

    function userExist($conn, $email) {
        $sql = "SELECT * FROM user WHERE email = ?;";

        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../subpages/login.php");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);

        $resultStmt = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultStmt)) {
            return $row;
        }
        else {
            return false;
        }

        mysqli_stmt_close($tmt);
        
    }

    function createUser($conn, $username, $firstname, $lastname, $email, $password, $phone_number, $address) {

        session_start();

        $user = userExist($conn, $email);
        if($user != "") { // "" mean false
            $_SESSION['taken'] = true;
            header("location: ../subpages/login.php?");
            exit();
        } 
        else {
            $sql = "INSERT INTO user (username, email, password, firstname, lastname, mobile, address) VALUE (?, ?, ?, ?, ?, ?, ?)";

            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)) {
                header("location: ../subpages/login.php");
                exit();
            }

            $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

            mysqli_stmt_bind_param($stmt, "sssssss", $username, $email, $password, $firstname, $lastname, $phone_number, $address);
            mysqli_stmt_execute($stmt);

            mysqli_stmt_close($stmt);

            $row = userExist($conn, $email);

            $_SESSION['taken'] = false;
            $_SESSION['id'] = $row['userId'];
            $_SESSION['username'] = $row['username'];

            header("location: ../subpages/profile.php");
            exit();
        }
    }

    function emptyInputLogin($email, $password) {
        if (empty($username) || empty($password)) {
            return true;
        }
        else {
            return false;
        }
    }

    function loginUser($conn, $email, $password) {

        session_start();

        $user = userExist($conn, $email);

        if ($user == false) {
            $_SESSION['notExist'] = true;
            header("location: ../subpages/login.php");
            exit();
        }

        $checkPwd = password_verify($password, password_hash($user['password'], PASSWORD_DEFAULT));

        if (!$checkPwd) {
            header("location: ../subpages/login.php");
            exit();
        }
        else {
            $_SESSION['notExist'] = false;
            $_SESSION['id'] = $user['userId'];
            $_SESSION['username'] = $user['username'];
            header("location: ../subpages/profile.php");
            exit();

        }
    }

    function opStatus($dayOff, $open, $close) {
        date_default_timezone_set('Asia/Bangkok');

        $date = new DateTimeImmutable();

        $arr = explode(",", $dayOff);

        if(!in_array($date->format('l'), $arr) && 
        (date('H:i:s', strtotime($open)) <= date('H:i:s') && 
         date('H:i:s', strtotime($close)) >= date('H:i:s')) ) {

            echo "<div class='menu-open' >OPEN</div>";

        }   
        else {

            echo "<div class='menu-close' >CLOSE</div>";

        }
        
    }
?>
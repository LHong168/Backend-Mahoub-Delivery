<?php

    require_once "dbh.inc.php";

    session_start();

    if (isset($_SESSION["username"])) {
        $userId = $_SESSION['id'];
        $username = $_SESSION['username']; 
    
        $sql = "SELECT * FROM user WHERE userId = '".$userId."' AND  username = '".$username."';";
        $sess_sql = mysqli_query($conn, $sql);
    
        while ($data = mysqli_fetch_assoc($sess_sql)) {
            $username = $data['username'];
            $email = $data['email'];
            $firstname = $data['firstname'];
            $lastname = $data['lastname'];
            $mobile = $data['mobile'];
            $address = $data['address'];
        }
    }


?>
<?php
    //if there nothing in the form aftetr submit redirect to the signup again
    if (isset($_POST["submit"])) {

        $username = $_POST['username'];
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone_number = $_POST['mobile'];
        $address = $_POST['address'];

        require_once "../include/dbh.inc.php";
        require_once "../include/functions.inc.php";

        createUser($conn, $username, $firstname, $lastname, $email, $password, $phone_number, $address);

        // if (emptyInputSignup($username, $firstname, $lastname, $email, $password, $phone_number, $address) !== false) {
        //     header("location: ../signup.php?error = emptyinput");
        //     exit(); //stop the script from running entirely 
        // }

        // if (invalidUser($username) !== false) {
        //     header("location: ../signup.php?error = falseEmail");
        //     exit(); //stop the script from running entirely 
        // }

        // if (invalidEmail($email) !== false) {
        //     header("location: ../signup.php?error = falseEmail");
        //     exit(); //stop the script from running entirely 
        // }

        // if(userExist($conn, $email)) {
        //     header("location: ../signup.php?error = falseEmail");
        //     exit(); //stop the script from running entirely 
        // }

    }

?>
<?php
if (isset($_REQUEST['btnRegister'])) {
    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";

    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $password2 = $_REQUEST['password2'];

    if (empty($username)) {
        $errors[0][] = "Username is required";
    }
    if (empty($email)) {
        $errors[1][] = "Email is required";
    }
    if (empty($password)) {
        $errors[2][] = "Password is required";
    }elseif(strlen($password)<8){
        $errors[2][] = "Password should be atleast 8 characters long";
    }
    if (empty($password2)) {
        $errors[3][] = "Please enter the password again";
    }elseif(!($password === $password2)){
        $errors[3][] = "The password does not match";
    }
    if (empty($_REQUEST['agree'])) {
        $errors[4][] = "You need to agree to the term of services to register";
    }

}

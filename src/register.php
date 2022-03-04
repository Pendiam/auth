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
    }
    if (empty($password2)) {
        $errors[3][] = "Please enter the password again";
    }
}

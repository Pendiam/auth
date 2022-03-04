<?php
require_once __DIR__ . '/auth.php';

if (isset($_REQUEST['btnRegister'])) {
    // echo "<pre>";
    // print_r($_REQUEST);
    // echo "</pre>";

    $username = htmlspecialchars($_REQUEST['username'], ENT_COMPAT, 'ISO-8859-1', true);
    $email = filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL);
    $password = strip_tags($_REQUEST['password']);
    $password2 = strip_tags($_REQUEST['password2']);

    if (empty($username)) {
        $errors[0][] = "Username is required";
    }
    if (empty($email)) {
        $errors[1][] = "Email is required";
    }
    if (empty($password)) {
        $errors[2][] = "Password is required";
    } elseif (strlen($password) < 8) {
        $errors[2][] = "Password should be atleast 8 characters long";
    }
    if (empty($password2)) {
        $errors[3][] = "Please enter the password again";
    } elseif (!($password === $password2)) {
        $errors[3][] = "The password does not match";
    }
    if (empty($_REQUEST['agree'])) {
        $errors[4][] = "You need to agree to the term of services to register";
    }

    if (empty($errors)) {
        try {
            $row = find_user_by_email($email);
            if (isset($row['email']) == $email) {
                $errors[1][] = "Email address already registed, please choose another or login instead.";
            } else {
                register_user($email, $username, $password2);
            }
        } catch (PDOException $e) {
            $pdo_error = $e->getMessage();
        }
    }
}

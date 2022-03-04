<?php
require __DIR__ . '/../src/register.php';
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Register</title>
</head>

<body>
    <main>
        <form action="register.php" method="post">
            <h1>Sign Up</h1>
            <div>
                <?php
                if (isset($errors[0])) {
                    foreach ($errors[0] as $unameErrors) {
                        echo "<p class='alert-error'>" . $unameErrors . "</p>";
                    }
                }
                ?>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username">
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <label for="password2">Password Again:</label>
                <input type="password" name="password2" id="password2">
            </div>
            <div>
                <label for="agree">
                    <input type="checkbox" name="agree" id="agree" value="yes" /> I agree
                    with the
                    <a href="#" title="term of services">term of services</a>
                </label>
            </div>
            <button type="submit" name="btnRegister">Register</button>
            <footer>Already a member? <a href="login.php">Login here</a></footer>
        </form>
    </main>
</body>

</html>
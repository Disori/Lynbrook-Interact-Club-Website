<?php
include 'db/init.php';

if(empty($_POST) === false) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) == true || empty($password) == true) {
        $errors[] = 'You need to enter a username and password';
    } else if(user_exists($username) === false) {
        $errors[] = 'This user doesn\'t exists';
    } else if (user_active($username) === false) {
        $errors[] = 'you haven\'t activated your account';
    } else {
        // here
    }

    print_r($errors);
}

?>

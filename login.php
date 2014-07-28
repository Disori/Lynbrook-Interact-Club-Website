<?php
include 'db/init.php';

if(empty($_POST) === false) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) == true || empty($password) == true) {
        $errors[] = 'You need to enter a username and password';
    } else if (user_active($username) === false) {
        $errors[] = 'you haven\'t activated your account';
    } else {
        $login = login($username, $password);
        if ($login === false) {
            $errors[] = 'That username/password combination is incorrect';
        } else {
            echo 'ok';
        }
    }

    print_r($errors);
}

?>

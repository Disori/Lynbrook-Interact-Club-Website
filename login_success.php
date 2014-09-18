<?php
    session_start();
    if(isset($_SESSION['login'])) {
        if($_SESSION['login'] == 1){
            header("location:index.php");
        } else {
            echo "login == 1 check failed";
        }
    } else {
        echo "login failed, incorrect POST variables sent to page or login session is bad";
        var_dump($_SESSION['login']);
    }
?>

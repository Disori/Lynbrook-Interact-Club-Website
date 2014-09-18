<?php
    ob_start();
    session_start();
    $host="localhost"; // Host name
    $username="interact"; // Mysql username
    $password="nimmo99"; // Mysql password
    $db_name="interact"; // Database name
    $tbl_name="users"; // Table name
    // Connect to server and select databse.
    $con = mysqli_connect("$host", "$username", "$password", "$db_name");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    // Define $username and $password
    if(isset($_POST['submit'])) {
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $user = stripslashes($user);
        $pass = stripslashes($pass);
        $user = mysqli_escape_string($con,$user);
        $pass = mysqli_escape_string($con,$pass);
        $sql="SELECT * FROM $tbl_name where username='$user'";
        $result=mysqli_query($con, $sql);
        if (!$result) {
            die('Invalid query: ' . mysqli_error($con));
        }
        // Mysql_num_row is counting table row
        $count=mysqli_num_rows($result);
        // If result matched $username and $password, table row must be 1 row
        if($count==1){
            // Register $username, $password and redirect to file "login_success.php"
            $_SESSION['login'] = 1;
            $_SESSION['user'] = $user;
            $_SESSION['login'] = 1;
            header("location:login_success.php");
        }
        else {
            var_dump($_POST);
        }
    } else {
        header("location:debug.php");
    }
    // To protect MySQL injection (more detail about MySQL injection)

    ob_end_flush();
?>

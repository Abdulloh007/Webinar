<?php

    session_start();
    include_once('../includes/db.php');

    if(!empty($_POST['login'])){
        $login = $_POST['login'];
        $password = $_POST['password'];

        $select = "select * from admin where login = '$login' and password = '$password'";
        $run = mysqli_query($con, $select);
        $num = mysqli_num_rows($run);
        if($num==1){
            header("location: ../index.php?dashboard");
            $_SESSION['login'] = $login;
            $_SESSION['password'] = $password;
        }else{
            header("location: ../login.html");
        }

    }

?>
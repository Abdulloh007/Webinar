<?php
    session_start();
    include("../db.php");
    if(empty($_POST['number'])){
        echo "<script>window.open('/','_self')</script>";
    }else{
        $number = $_POST['number'];

        $select = "select * from user where number = '$number'";
        $run = mysqli_query($con,$select);
        $num = mysqli_num_rows($run);
        $row = mysqli_fetch_array($run);
        $name = $row['name'];
        if($num == 1){
            $_SESSION['number'] = $number;
            echo "<script>alert('Welcome, $name')</script>";
            echo "<script>window.open('/','_self')</script>";
        }else{
            echo "<script>window.open('/','_self')</script>";
        }
    }
?>
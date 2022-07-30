<?php
    session_start();
    include_once('../includes/db.php');

    if(!isset($_SESSION['login']))
        header("location: ../login.html");

    if(isset($_GET['orders_delete'])){
        $products_id = $_GET['orders_delete'];
        $delete = "delete from orders where id = '$products_id'";
        $run = mysqli_query($con, $delete);

        if($run){
            header("location: ../index.php?orders");
        }else{
            header("location: ../index.php?orders");
        }
    }
    ?>
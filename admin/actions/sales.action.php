<?php
    session_start();
    include_once('../includes/db.php');

    if(!isset($_SESSION['login']))
        header("location: ../login.html");

    if(isset($_GET['sales_delete'])){
        $sales_id = $_GET['sales_delete'];
        $delete = "delete from sales where id = '$sales_id'";
        $run = mysqli_query($con, $delete);

        if($run){
            header("location: ../index.php?sales");
        }else{
            header("location: ../index.php?sales");
        }
    }
    if(isset($_GET['sales_edit'])){
        include('../pages/sales_edit.php');
    }
?>
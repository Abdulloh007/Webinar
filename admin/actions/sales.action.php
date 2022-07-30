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
        $id = $_GET['sales_edit'];

        $title = $_POST['title'];
        $koeff = $_POST['koeff'];

        $update = "update sales set title = '$title', koeff = '$koeff' where id = '$id'";
        $run = mysqli_query($con, $update);

        if($run){
            header("location: ../index.php?sales");
        }else{
            header("location: ../index.php?sales");
        }

    }
    if(isset($_GET['sales_add'])){

        $select = "select * from sales order by id DESC";
        $run = mysqli_query($con,$select);
        $row = mysqli_fetch_array($run);
            $id = $row['id'];
            $id++;

        $title = $_POST['title'];
        $koeff = $_POST['koeff'];

        $update = "insert into sales set title = '$title', koeff = '$koeff'";
        $run = mysqli_query($con, $update);

        if($run){
            header("location: ../index.php?sales");
        }else{
            header("location: ../index.php?sales");
        }

    }
?>
<?php

   session_start();
   include('db.php');

    if(!isset($_SESSION['number'])){
        echo "<script>alert('Сначала войдите в свой ЛК')</script>";
    }else{
        
        $id = $_GET['product'];
        $user_id = $_SESSION['id'];

        $insert = "insert into cart set user_id = '$user_id', product_id = '$id'";
        $run = mysqli_query($con,$insert);
        if($run){
            echo "<script>alert('Готово добавлено в Корзину')</script>";
            echo "<script>window.open('/','_self')</script>";
        }
    
    }

?>
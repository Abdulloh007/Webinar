<?php
    session_start();
    include_once('../includes/db.php');

    if(!isset($_SESSION['login']))
        header("location: ../login.html");

    if(isset($_GET['products_delete'])){
        $products_id = $_GET['products_delete'];
        $delete = "delete from products where id = '$products_id'";
        $run = mysqli_query($con, $delete);

        if($run){
            header("location: ../index.php?products");
        }else{
            header("location: ../index.php?products");
        }
    }
    if(isset($_GET['products_edit'])){
        $id = $_GET['products_edit'];

        extract($_POST);

        $image = $_FILES['image']['name'];
        $tmp_image = $_FILES['image']['tmp_name'];
        $image = "prod_".$id.".png";
        if(is_uploaded_file($tmp_image)){
            move_uploaded_file($tmp_image, "../../public/assets/img/$image"); 
        }
        $image = "./public/assets/img/".$image;
        $update = "update products set title = '$title', rating = '$rating', price_with_card = '$price_with_card', price_without_card = '$price_without_card', image = '$image', sales_id = '$sales_id' where id = '$id'";
        $run = mysqli_query($con, $update);

        if($run){
            header("location: ../index.php?products");
        }else{
            header("location: ../index.php?products");
        }

    }
    
    if(isset($_GET['products_add'])){

        extract($_POST);

        $select = "select * from products order by id DESC";
        $run = mysqli_query($con,$select);
        $row = mysqli_fetch_array($run);
            $id = $row['id'];
            $id++;

        $image = $_FILES['image']['name'];
        $tmp_image = $_FILES['image']['tmp_name'];
        $image = "prod_".$id.".png";
        if(is_uploaded_file($tmp_image)){
            move_uploaded_file($tmp_image, "../../public/assets/img/$image"); 
        }
        $image = "./public/assets/img/".$image;
        $update = "insert into products set title = '$title', rating = '$rating', price_with_card = '$price_with_card', price_without_card = '$price_without_card', image = '$image', sales_id = '$sales_id'";
        $run = mysqli_query($con, $update);

        if($run){
            header("location: ../index.php?products");
        }else{
            header("location: ../index.php?products");
        }

    }
?>
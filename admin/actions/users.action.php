<?php
    session_start();
    include_once('../includes/db.php');

    if(!isset($_SESSION['login']))
        header("location: ../login.html");

    if(isset($_GET['users_delete'])){
        $users_id = $_GET['users_delete'];
        $delete = "delete from user where id = '$users_id'";
        $run = mysqli_query($con, $delete);

        if($run){
            header("location: ../index.php?users");
        }else{
            header("location: ../index.php?users");
        }
    }
    if(isset($_GET['users_edit'])){
        $id = $_GET['users_edit'];

        extract($_POST);

        
        $image = $_FILES['image']['name'];
        $tmp_image = $_FILES['image']['tmp_name'];
        $image = "user_".$id.".png";
        if(is_uploaded_file($tmp_image)){
            move_uploaded_file($tmp_image, "../../public/assets/img/$image"); 
        }
        $image = "./public/assets/img/".$image;

        $update = "update user set name = '$name',number = '$number', surname='$surname', login = '$login', password = '$password', address = '$address', image = '$image' where id = '$id'";
        $run = mysqli_query($con, $update);

        if($run){
            header("location: ../index.php?users");
        }else{
            header("location: ../index.php?users");
        }

    }
    if(isset($_GET['users_add'])){

        $select = "select * from user order by id DESC";
        $run = mysqli_query($con,$select);
        $row = mysqli_fetch_array($run);
            $id = $row['id'];
            $id++;

            extract($_POST);
            
            $image = $_FILES['image']['name'];
            $tmp_image = $_FILES['image']['tmp_name'];
            $image = "user_".$id.".png";
            if(is_uploaded_file($tmp_image)){
                move_uploaded_file($tmp_image, "../../public/assets/img/$image"); 
            }
            $image = "./public/assets/img/".$image;
    
            $update = "insert into user set name = '$name', surname='$surname',number = '$number', login = '$login', password = '$password', address = '$address', image = '$image'";
            $run = mysqli_query($con, $update);

        if($run){
            header("location: ../index.php?users");
        }else{
            header("location: ../index.php?users");
        }

    }
?>
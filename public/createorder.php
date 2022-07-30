<?php

    session_start();
    include("../db.php");
    $user_id = $_SESSION['id'];
    $array = [];
    $select = "select * from cart where user_id = '$user_id'";
    $run = mysqli_query($con, $select);
    $i = 0;
    while($row = mysqli_fetch_assoc($run)){
        extract($row);
        $array[$i]['id'] = $product_id;
        $s = "select * from products where id = '$product_id'";
        $r = mysqli_query($con,$s);
        $ro = mysqli_fetch_array($r);
            $price_without_card = $ro['price_without_card'];
        $summary+=$price_without_card;
        $i++;
    }
    $json_arr = json_encode($array);

    $insert = "insert into orders set user_id = '$user_id', products = '$json_arr', summary = '$summary'";
    $run = mysqli_query($con,$insert);
    if($run){
        echo "<script>alert('Готово заказ оформлен, ждите курьера')</script>";
        echo "<script>window.open('/','_self')</script>";
    }else{
        echo "<script>alert('Ошибка')</script>";
        echo "<script>window.open('/','_self')</script>";
    }

?>
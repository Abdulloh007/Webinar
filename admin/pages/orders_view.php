<?php
     $select ="select * from orders";
     $run = mysqli_query($con,$select);
     $row = mysqli_fetch_array($run);
         extract($row);
         $sales_give ="select * from user where id = '$user_id'";
         $run1 = mysqli_query($con,$sales_give);
         $row1 = mysqli_fetch_array($run1);
             extract($row1, EXTR_PREFIX_ALL, 'user');
?>
<style>
    .space-between{
        display: flex !important;
        justify-content: space-between;
    }
    .product{
        border: 3px solid #000;
        border-radius: 3px;
        padding: 10px 15px;
        margin: 30px 30px;
    }
    .product img{
        width: 150px;
        height: 150px;
        object-fit: cover;
    }
</style>
<div class="col-xs-12">
    <section class="content">
        <div class="row">    
            <div class="col">   
                <div class="col-md-2 col-md-offset-1">
                    <img src="../../<?= $user_image; ?>" class="img-responsive">
                    <h4 class="space-between">ИФ: <span><?= $user_name, " ", $user_surname; ?></span></h4>
                    <h4 class="space-between">Адресс: <b><?= $user_address; ?></b></h4>
                </div>   
                <div class="col-md-8 col-md-offset-1">
                    <h3>Продукты</h3>
                    <?php
                            $array = json_decode($products);
                            $i=0;
                            while($i < count($array)){
                                $array2 = get_object_vars($array[$i]);
                                $id = $array2['id'];
                                $select ="select * from products where id = '$id'";
                                $run = mysqli_query($con,$select);
                                $row = mysqli_fetch_array($run);
                                extract($row);
                                ?>
                        <div class="product col-md-2">  
                            <img src="../../<?= $image; ?>" alt="">
                            <h5><?= $title; ?></h5>
                            <h5><?= $price_with_card; ?> &nbsp; &nbsp; С картой</h5>
                            <h5><?= $price_without_card; ?> &nbsp; &nbsp; Обычный</h5>
                        </div>
                        <?
                        $i++;
                        }
                    ?>
                </div>
            </div><!-- /.col -->
            div.
        </div><!-- /.row -->
    </section><!-- /.content -->
</div>

  
<?php
    session_start();
    if(!isset($_SESSION['login']))
        header("location: login.html");
    if(isset($_GET['products_edit'])){
        $action = "actions/products.action.php?products_edit=<?= $id; ?>";
        $id = $_GET['products_edit'];
        $select ="select * from products where id = '$id'";
        $run = mysqli_query($con,$select);
        $row = mysqli_fetch_array($run);
        extract($row);
      }
    if(isset($_GET['products_add'])){
      $action = "actions/products.action.php?products_add";
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Северяночка</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  </head>
  <body>
    <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Продукты    
            <small>Изменение</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Главная</a></li>
            <li><a href="#">Продукты</a></li>
            <li class="active">Изменение продуктов</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Изменение продуктов</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?= $action; ?>" method="post" enctype="multipart/form-data">
                  <div class="box-body row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title">Наименование</label>
                            <input type="text" name="title" class="form-control" id="title" value="<?= $title; ?>" placeholder="Скидка">
                        </div>
                        <div class="form-group">
                            <label for="rating">Рейтинг</label>
                            <input type="text" name="rating" class="form-control" value="<?= $rating; ?>" id="rating" placeholder="Рейтинг">
                        </div>
                        <div class="form-group">
                            <label for="price_with_card">Цена по карте</label>
                            <input type="text" name="price_with_card" class="form-control" value="<?= $price_with_card; ?>" id="price_with_card" placeholder="Цена по карте">
                        </div>
                        <div class="form-group">
                            <label for="price_without_card">Обычная цена</label>
                            <input type="text" name="price_without_card" class="form-control" value="<?= $price_without_card; ?>" id="price_without_card" placeholder="Обычная цена">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="image">Фото</label>
                            <input type="file" name="image" class="form-control" id="image" value="<?= $image; ?>" placeholder="Фото">
                        </div>
                        <div class="form-group">
                            <label for="sales">Скидка</label>
                            <select name="sales_id" id="sales" class="form-control" value="<?= $sales_id; ?>">
                                <option value="0" selected disabled> Скидки... </option>
                                <?php
                                    $select ="select * from sales";
                                    $run = mysqli_query($con,$select);
                                    while($row = mysqli_fetch_array($run)){
                                        extract($row);
                                ?>    
                                   <option value="<?= $id; ?>"><?= $title; ?></option>
                                <? } ?>
                            </select>
                        </div>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer ">
                    <button type="submit" name="send" class="btn btn-primary col-md-4">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
            </div>
          </div>
        </section>
</body>
</html>
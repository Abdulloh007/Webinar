<?php
    session_start();
    if(!isset($_SESSION['login']))
        header("location: login.html");
    if(isset($_GET['users_edit'])){
        $action = "actions/users.action.php?users_edit=$id";
        $id = $_GET['users_edit'];
        $select ="select * from user where id = '$id'";
        $run = mysqli_query($con,$select);
        $row = mysqli_fetch_array($run);
        extract($row,EXTR_PREFIX_ALL,'user');
      }
    if(isset($_GET['users_add'])){
      $action = "actions/users.action.php?users_add";
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
            Пользователи    
            <small>Изменение</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Главная</a></li>
            <li><a href="#">Пользователи</a></li>
            <li class="active">Изменение пользователей</li>
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
                  <h3 class="box-title">Изменение пользователей</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?= $action; ?>" method="post" enctype="multipart/form-data">
                  <div class="box-body row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Имя</label>
                            <input type="text" name="name" class="form-control" id="name" value="<?= $user_name; ?>" placeholder="Имя">
                        </div>
                        <div class="form-group">
                            <label for="surname">Фамилия</label>
                            <input type="text" name="surname" class="form-control" value="<?= $user_surname; ?>" id="surname" placeholder="Фамилия">
                        </div>
                        <div class="form-group">
                            <label for="price_with_card">Логин</label>
                            <input type="text" name="login" class="form-control" value="<?= $user_login; ?>" id="login" placeholder="Логин">
                        </div>
                        <div class="form-group">
                            <label for="password">Пароль</label>
                            <input type="text" name="password" class="form-control" value="<?= $user_password; ?>" id="password" placeholder="Пароль">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="number">Номер телефона</label>
                            <input type="text" name="number" class="form-control" id="number" value="<?= $user_number; ?>" placeholder="Номер телефона">
                        </div>   
                        <div class="form-group">
                            <label for="address">Адрес</label>
                            <input type="text" name="address" class="form-control" id="address" value="<?= $user_address; ?>" placeholder="Адрес">
                        </div>   
                        <div class="form-group">
                            <label for="image">Фото</label>
                            <input type="file" name="image" class="form-control" id="image" value="<?= $user_image; ?>" placeholder="Фото">
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
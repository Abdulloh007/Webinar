<?php
    session_start();
    if(!isset($_SESSION['login']))
        header("location: login.html");
    if(isset($_GET['sales_edit'])){
        $action = "actions/sales.action.php?sales_edit=<?= $id; ?>";
        $id = $_GET['sales_edit'];
        $select ="select * from sales where id = '$id'";
        $run = mysqli_query($con,$select);
        $row = mysqli_fetch_array($run);
            extract($row);
    }
    if(isset($_GET['sales_add'])){
      $action = "actions/sales.action.php?sales_add";
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
            Скидки
            <small>Изменение</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Главная</a></li>
            <li><a href="#">Скидки</a></li>
            <li class="active">Изменение скидок</li>
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
                  <h3 class="box-title">Изменение Скидок</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?= $action; ?>" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="title">Скидка</label>
                      <input type="text" name="title" class="form-control" id="title" value="<?= $title; ?>" placeholder="Скидка">
                    </div>
                    <div class="form-group">
                      <label for="koeff">Коэффициент</label>
                      <input type="text" name="koeff" class="form-control" value="<?= $koeff; ?>" id="koeff" placeholder="Коэффициент">
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" name="send" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
            </div>
          </div>
        </section>
</body>
</html>
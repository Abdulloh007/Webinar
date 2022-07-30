<div class="col-xs-12">
    <section class="content">
        <div class="row">    
            <div class="col">   
                <div class="box">
                    <div class="box-header">
                    <h3 class="box-title">Data Table With Full Features</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <a href="index.php?users_add" class="btn btn-success">Добавить</a>
                        <br>
                        <br>
                        <tr>
                            <th> № </th>
                            <th>Имя</th>
                            <th>Фамилия</th>
                            <th>Номер телефона</th>
                            <th>Адрес</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $i=0;
                            $select ="select * from user";
                            $run = mysqli_query($con,$select);
                            while($row = mysqli_fetch_array($run)){
                                extract($row);
                                $i++;
                        ?>
                        <tr>
                            <td> <?= $i; ?> </td>
                            <td><?= $name; ?></td>
                            <td><?= $surname; ?></td>
                            <td><?= $number; ?></td>
                            <td><?= $address;?></td>
                            <td>
                                <!-- <a href="" class="btn btn-info"><i class="fa fa-search-plus"></i></a> -->
                                <a href="index.php?users_edit=<?= $id; ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                <a href="actions/users.action.php?users_delete=<?= $id; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <? } ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th> № </th>
                            <th>Имя</th>
                            <th>Фамилия</th>
                            <th>Номер телефона</th>
                            <th>Адрес</th>
                            <th>Действия</th>
                        </tr>
                        </tfoot>
                    </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
</div>

  
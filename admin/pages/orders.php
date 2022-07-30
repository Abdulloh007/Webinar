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
                        <tr>
                            <th> № </th>
                            <th>Фио</th>
                            <th>Адрес</th>
                            <th>Дата и время</th>
                            <th>Сумма</th>
                            <th>Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $i=0;
                            $select ="select * from orders";
                            $run = mysqli_query($con,$select);
                            while($row = mysqli_fetch_array($run)){
                                extract($row);
                                $array = json_decode($products);
                                $i++;
                                $sales_give ="select * from user where id = '$user_id'";
                                $run1 = mysqli_query($con,$sales_give);
                                $row1 = mysqli_fetch_array($run1);
                                    extract($row1, EXTR_PREFIX_ALL, 'user');
                                
                        ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $user_name, ' ', $user_surname; ?></td>
                            <td><?= $user_address; ?></td>
                            <td><?= $at; ?></td>
                            <td><?= $summary; ?></td>
                            <td>
                                <a href="index.php?orders_view=<?= $id; ?>" class="btn btn-info"><i class="fa fa-search-plus"></i></a>
                                <a href="actions/orders.action.php?orders_delete=<?= $id; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <? } ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th> № </th>
                            <th>Фио</th>
                            <th>Адрес</th>
                            <th>Дата и время</th>
                            <th>Сумма</th>
                            <th>Действие</th>
                        </tr>
                        </tfoot>
                    </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
</div>

  
<div class="col-xs-12">
    <section class="content">
        <div class="row">    
            <div class="col">   
                <div class="box">
                    <div class="box-header">
                    <h3 class="box-title">Data Table With Full Features</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                    <a href="index.php?products_add" class="btn btn-success">Добавить продукт</a>
                    <br>
                    <br>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th> № </th>
                            <th>Наименование</th>
                            <th>Рейтинг</th>
                            <th>Цена по карте</th>
                            <th>Обычная цена</th>
                            <th>Фото</th>
                            <th>Скидка</th>
                            <th>Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $i=0;
                            $select ="select * from products";
                            $run = mysqli_query($con,$select);
                            while($row = mysqli_fetch_array($run)){
                                extract($row);
                                $i++;
                                if($sales_id != 0){
                                    $sales_give ="select * from sales where id = '$sales_id'";
                                    $run1 = mysqli_query($con,$sales_give);
                                    $row1 = mysqli_fetch_array($run1);
                                        extract($row1, EXTR_PREFIX_ALL, 'sales');
                                }
                        ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $title; ?></td>
                            <td><?= $rating; ?></td>
                            <td><?= $price_with_card; ?></td>
                            <td><?= $price_without_card; ?></td>
                            <td><?= $image;?></td>
                            <td><?= $sales_id == 0 ? "Без скидок" : $sales_title; ?></td>
                            <td>
                                <!-- <a href="" class="btn btn-info"><i class="fa fa-search-plus"></i></a> -->
                                <a href="index.php?products_edit=<?= $id; ?>" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                <a href="actions/products.action.php?products_delete=<?= $id; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <? } ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th> № </th>
                            <th>Наименование</th>
                            <th>Рейтинг</th>
                            <th>Цена по карте</th>
                            <th>Обычная цена</th>
                            <th>Фото</th>
                            <th>Скидка</th>
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

  
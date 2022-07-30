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
                            <th>Скидка</th>
                            <th>Коэффициент</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $i=0;
                            $select ="select * from sales";
                            $run = mysqli_query($con,$select);
                            while($row = mysqli_fetch_array($run)){
                                extract($row);
                                $i++;
                        ?>
                        <tr>
                            <td> <?= $i; ?> </td>
                            <td><?= $title; ?></td>
                            <td><?= $koeff; ?></td>
                            <td>
                                <a href="" class="btn btn-info"><i class="fa fa-search-plus"></i></a>
                                <a href="actions/sales.action.php?sales_edit=<?= $id; ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                <a href="actions/sales.action.php?sales_delete=<?= $id; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <? } ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th> № </th>
                            <th>Скидка</th>
                            <th>Коэффициент</th>
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

  
<?php
    include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Manage Product</h4>
                
                            </div>

        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Manage Product
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Category ID</th>
                                            <th>Product Name</th>
                                            <th>Description</th>
                                            <th>Product Image</th>
                                            <th>Main Price</th>
                                            <th>Disc Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        foreach($product_arr as $c)
                                        {
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $c->prod_id;?></td>
                                            <td><?php echo $c->cate_id;?></td>
                                            <td><?php echo $c->prod_name;?></td>
                                            <td class="center"><?php echo $c->sort_desc;?></td>
                                            <td class="center"><img src="assets/img/products/<?php echo $c->img;?>" alt="" width="50px"/></td>
                                            <td class="center"><?php echo $c->main_price;?></td>
                                            <td class="center"><?php echo $c->disc_price;?></td>
                                            <td class="center">
                                            <a href="delete?prod_del=<?php echo $c->prod_id;?>"class="btn btn-danger">Delete</a>
                                                <a href="" class="btn btn-primary">Edit</a>
                                            </td>
                                        </tr>
                                        
                                      <?php
                                        }
                                      ?>  
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
               
    </div>
    </div>
    <?php
        include_once('footer.php');
    ?>
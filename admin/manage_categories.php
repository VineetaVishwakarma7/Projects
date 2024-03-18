<?php
    include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Manage Category</h4>
                
                            </div>

        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Manage Category
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Category Name</th>
                                            <th>Category Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        foreach($categories_arr as $c)
                                        {
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $c->cate_id;?></td>
                                            <td><?php echo $c->cate_name;?></td>
                                            <td><img src="assets/img/category/<?php echo $c->cate_img;?>" alt="" width="50px"/></td>
                                            <td class="center">
                                            <a href="delete?cate_del=<?php echo $c->cate_id;?>"class="btn btn-danger">Delete</a>
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
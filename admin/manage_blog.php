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
                                            <th>Blog Image </th>
                                            <th>Blog Name</th>
                                            <th>Blog Comment</th>
                                            <th>Blog Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        foreach($blogs_arr as $c)
                                        {
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $c->id;?></td>
                                            <td><img src="assets/img/blog/<?php echo $c->img;?>" alt="" width="50px"/></td>
                                            <td><?php echo $c->name;?></td>
                                            <td><?php echo $c->comment;?></td>
                                            <td><?php echo $c->description;?></td>
                                            <td class="center">
                                            <a href="delete?blog_del=<?php echo $c->id;?>"class="btn btn-danger">Delete</a>
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
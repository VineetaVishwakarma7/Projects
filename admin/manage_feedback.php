<?php
    include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Manage Feedback</h4>
                
                            </div>

        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Manage Feedback
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Employee ID</th>
                                            <th>Customer ID</th>
                                            <th>Comment </th>
                                            <th>Raiting</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach($feedback_arr as $c)
                                    {
                                    ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $c->feed_id;?></td>
                                            <td><?php echo $c->emp_id;?></td>
                                            <td><?php echo $c->cust_id;?></td>
                                            <td class="center"><?php echo $c->comment;?></td>
                                            <td class="center"><?php echo $c->raiting;?></td>
                                            <td class="center">
                                            <a href="delete?feed_del=<?php echo $c->feed_id;?>"class="btn btn-danger">Delete</a>
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
                <!-- /. ROW  -->
           
    </div>
    </div>
    <?php
        include_once('footer.php');
    ?>
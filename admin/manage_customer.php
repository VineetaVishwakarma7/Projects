<?php
    include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Manage Customer</h4>
                
                            </div>

        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Manage Customer
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>User Name</th>
                                            <th>User Email</th>
                                            <th>User Mobile</th>
                                            <th>User Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach($customer_arr as $c)
                                    {
                                    ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $c->cust_id;?></td>
                                            <td><?php echo $c->cust_name;?></td>
                                            <td><?php echo $c->cust_email;?></td>
                                            <td class="center"><?php echo $c->cust_mobile;?></td>
                                            <td class="center"><img src="assets/img/customer/<?php echo $c->img;?>" alt="" width="50px"/></td>
                                            <td class="center">
                                                <a href="delete?cust_del=<?php echo $c->cust_id;?>"class="btn btn-danger">Delete</a>
                                                <a href=""class="btn btn-primary">Edit</a>
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
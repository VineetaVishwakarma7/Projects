<?php
    include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Manage Employee</h4>
                
                            </div>

        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Manage Employee
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID </th>
                                            <th>Employee Name</th>
                                            <th>Employee Email</th>
                                            <th>Employee No.</th>
                                            <th>Employee Address</th>
                                            <th>Employee Country</th>
                                            
                                            <th> Employee Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        foreach($employee_arr as $c)

                                        {
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $c->emp_id;?></td>
                                            <td><?php echo $c->emp_name;?></td>
                                            <td><?php echo $c->emp_email;?></td>
                                            <td class="center"><?php echo $c->emp_no;?></td>
                                            <td class="center"><?php echo $c->emp_address;?></td>
                                            <td class="center"><?php echo $c->c_id;?></td>
                                            <td class="center"><img src="assets/img/employee/<?php echo $c->img;?>" alt="" width="50px"/></td>
                                            <td class="center">
                                            <a href="delete?emp_del=<?php echo $c->emp_id;?>"class="btn btn-danger">Delete</a>
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
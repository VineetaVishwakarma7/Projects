<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Add Employee</h4>
                
                            </div>

        </div>
             <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           Add Employee
                        </div>
                        <div class="panel-body">
                            <form role="form" action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Enter Name</label>
                                            <input class="form-control" type="text" name="emp_name" />
                                        </div>
                                 <div class="form-group">
                                            <label>Enter Email</label>
                                            <input class="form-control" type="email" name="emp_email"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Mobile Number</label>
                                            <input class="form-control" type="number" name="emp_no"/>
                                        </div>
                                            <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" rows="3" name="emp_address"></textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                        <label>Enter Country</label>
                                        <select class="form-control" name="c_id" required>
                                            <option>----- Select Country -----</option>
                                            <?php
                                            foreach($arr_country as $c)
                                            {
                                            ?>
                                            <option value="<?php echo $c->c_id;?>"><?php echo $c->c_name;?></option>
                                            <?php		
                                            }
                                            ?>
                                        </select>
                                    
                                        <div class="form-group">
                                            <label>Employee Image</label>
                                            <input class="form-control" type="file" name="img"/>
                                        </div>
                                        <button type="submit"name="submit" class="btn btn-info">Submit </button>

                                    </form>
                            </div>
                        </div>
                            </div>

        </div>
    </div>
    </div>
     <?php
        include_once('footer.php');
     ?>
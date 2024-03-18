<?php
    include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">ADD CATEGORY </h4>
                
                            </div>

        </div>
             <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           ADD CATEGORY
                        </div>
                        <div class="panel-body">
                            <form role="form" action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Enter Name</label>
                                            <input class="form-control" type="text" name="cate_name" />
                                        </div>
                                 <div class="form-group">
                                            <label>Upload Image</label>
                                            <img src="">
                                            <input class="form-control" type="file" name="cate_img" />
                                        </div>
                                         <button type="submit"name="submit" class="btn btn-danger">Submit </button>
                                        
                                    </form>
                            </div>
                        </div>
                            </div>

    </div>
    </div>
    <?php
        include_once('footer.php');
    ?>
<?php
    include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">ADD Blog </h4>
                
                            </div>

        </div>
             <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           ADD BLOG
                        </div>
                        <div class="panel-body">
                            <form role="form" action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 margin">
                                            <div class="form-group">
                                                 <img src="">
                                                 <label>Upload Blog Image</label>
                                                <input class="form-control" type="file" name="img" />
                                             </div>
                                             <div class="form-group">
                                                 <label>Blog Name</label>
                                                <input class="form-control" type="text" name="name" />
                                             </div>
                                             <div class="form-group">
                                                 <label>Blog Comment</label>
                                                <input class="form-control" type="" name="comment" />
                                             </div>
                                             <div class="form-group">
                                                 <label>Blog Description </label>
                                                <input class="form-control" type="" name="description" />
                                             </div>                                            </div>
                                         </div>
                              
                                         <button type="submit"name="submit" class="btn btn-dark">Submit </button>
                                        
                                    </form>
                            </div>
                        </div>
                            </div>

    </div>
    </div>
    <?php
        include_once('footer.php');
    ?>
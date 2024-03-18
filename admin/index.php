<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Lighten  Admin Panal</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index">

                    <img src="assets/img/admin.jpg"width="280px"/>
                </a>

            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="index" >ADMIN LOGIN</a></li>
                             
                    </div>
                </div>

            </div>
        </div>
    </section>
     <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="col-md-12">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
            <h3 align="center">Admin Login</h3><hr/>
                           <div class="panel-body">
                               <form role="form" action="" method="post">
                                    <div class="form-group input-group">
                                           <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                           <input type="text" name="aunm" class="form-control" placeholder="Your Username " />
                                       </div>
                                        <div class="form-group input-group">
                                           <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                           <input type="password"  name="apass"  class="form-control"  placeholder="Your Password" />
                                       </div>
                            
                                    
                                    <input align="center" type="submit" name="" value="Login Here" class="btn btn-primary">
                                  <br><br>
                                   <div class="form-group">
                                           <label class="checkbox-inline">
                                               <input type="checkbox" /> Remember me
                                           </label>
                                           <span class="pull-right">
                                                  <a href="#" >Forget password ? </a> 
                                           </span>
                                       </div>
                                       <hr/>
                                   Not register ? <a href="#" >click here </a> or go to <a href="#">Home</a> 
                                   </form>
                           </div>
                          
                       </div> 
        </div>
    </div>
    <?php
        include_once('footer.php');
    ?>
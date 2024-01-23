<!DOCTYPE html>
<html>
<head>
	<title>Log In | Employee Management System</title>
	<link rel="stylesheet" type="text/css" href="stylelogin.css">
</head>
<body>
	<header>
		<nav>
			<h1>Employee Management System</h1>
			<ul id="navli">
				<li><a class="homeblack" href="index>HOME</a></li>
				<li><a class="homered" href="elogin">Employee Login</a></li>
				<li><a class="homeblack" href="alogin">Admin Login</a></li>
				
			</ul>
		</nav>
	</header>
	<div class="divider"></div>

	<div class="loginbox">
    <img src="assets/avatar.png" class="avatar">
        <h1>Employee Login Here</h1>
        <form action="process/eprocess.php" method="POST">
            <p>Email</p>
            <input type="text" name="mailuid" placeholder="Enter Email Address" required="required">
            <p>Password</p>
            <input type="password" name="pwd" placeholder="Enter Password" required="required">
            <input type="submit" name="login-submit" value="Login">
           
        </form>
        
    </div>
			
			
</body>
</html>
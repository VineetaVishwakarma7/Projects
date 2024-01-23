<?php



class control 
{
    function __construct()
    {
        
        $url=$_SERVER['PATH_INFO'];	
		
		switch($url)
		{
            case '/index':
			include_once('index.php');
            break;
            
            case '/aboutus':
			include_once('aboutus.php');
            break;
            
            case '/addemp':
			include_once('addemp.php');
            break;

            case '/alogin':
			include_once('alogin.php');
            break;

            case '/aloginwel':
			include_once('aloginwel.php');
            break;

           
           
            case '/delete':
			include_once('delete.php');
            break;
           
            case '/edit':
			include_once('edit.php');
            break;
           
            case '/elogin':
			include_once('elogin.php');
            break;
           
            case '/eloginwel':
			include_once('eloginwel.php');
            break;
           
            
            case '/myprofile':
			include_once('myprofile.php');
            break;

            case '/myprofileup':
			include_once('myprofileup.php');
            break;


            case '/salaryemp':
			include_once('salaryemp.php');
            break;

            case '/viewemp':
			include_once('viewemp.php');
            break;

           
           
        }
    }
}

$obj=new control;

?>

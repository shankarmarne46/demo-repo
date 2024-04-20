<?php
session_start();
if($_SERVER['HTTP_HOST']=="localhost")
{
	define("DB_USERNAME",'root');
	define("DB_PASSWORD",'');
	define("DB_DNAME",'');
	define("DB_HOST",'localhost');
}
else
{	
	define("DB_USERNAME",'nbb_elite');
	define("DB_PASSWORD",'EliteDesignLeads#@!');
	define("DB_DNAME",'nbb_elite');
	define("DB_HOST",'localhost');	
}	


$con = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_DNAME);
if($con->connect_errno > 0)
{
	die('Unable to connect to database ['.$dbquery->connect_error.']');
}




function redirect_to($url)
 {
 	echo '<script>window.location = "'.$url.'";</script>';
 }



?>
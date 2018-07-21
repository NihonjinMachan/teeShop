<?php
	session_start();	  
	$hostname="localhost"; //local server name default localhost
	$dbusername="root";  //mysql username default is root.
	$password="";       //blank if no password is set for mysql.
	$database="teeshop";  //database name which you created
	$con=mysql_connect($hostname,$dbusername,$password);
	if(!$con || !$database)
		{
			die('Connection Failed'.mysql_error());
		}

	mysql_select_db($database,$con);

	if(isset($_SESSION['login_user'])){
		$username=$_SESSION['login_user'];
		$email=$_SESSION['login_email'];
		$id = $_SESSION['login_id'];
		$qry = mysql_query("SELECT customerPoints FROM Customer WHERE userName=\"$username\"");
		$arr = mysql_fetch_array($qry);
		$points = $arr['customerPoints'];
	}

	mysql_close();
	//http://www.formget.com/login-form-in-php/

?>
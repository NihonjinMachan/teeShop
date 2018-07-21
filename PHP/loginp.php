<link rel="stylesheet" type="text/css" href="pstyles.css">
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
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
	$query="SELECT * FROM Customer WHERE userName='$_POST[login]' AND password='$_POST[password]'";
	$resource = mysql_query($query);

   	$nrows = mysql_num_rows($resource);
   	
	if ($nrows > 0) {
	$rows = mysql_fetch_array($resource);
	$_SESSION['login_user']=$rows['userName'];
	$_SESSION['login_email']=$rows['email'];
	$_SESSION['login_id']=$rows['custID'];
	$_SESSION['login_points']=$rows['customerPoints'];
	$link=$_POST['link'];

		if (strpos($link,'shirt') == true){
			header("location:" . $link); 
		} else{
				header("location: profile.php");
		}

	} else {
	$error = "Username or Password is invalid";
	echo ("<p style=\"font-family: 'Raleway', sans-serif;\">$error</p>
   	<form action=\"login.php\">
      <p id=\"buttone\"><input type=\"submit\" value=\"Go back\"></p>
    </form>");
	}

	  
	mysql_close($con);
	//http://www.formget.com/login-form-in-php/
	//http://www.sitepoint.com/forums/showthread.php?586625-Redirect-using-_SERVER-http_referer

?>
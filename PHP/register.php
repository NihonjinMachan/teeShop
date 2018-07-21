<link rel="stylesheet" type="text/css" href="pstyles.css">
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<?php
	$hostname="localhost"; //local server name default localhost
	$username="root";  //mysql username default is root.
	$password="";       //blank if no password is set for mysql.
	$database="teeshop";  //database name which you created
	$con=mysql_connect($hostname,$username,$password);
	if(!$con || !$database)
		{
			die('Connection Failed'.mysql_error());
		}

	mysql_select_db($database,$con);
	$sql="INSERT INTO Customer (userName, password, email, customerPoints) VALUES ('$_POST[username]','$_POST[password]','$_POST[email]', '0')"; 

if ( !mysql_query($sql) ){
   // 
   //die (mysql_error());
   die('Query Failed'.mysql_error());
} else {

   echo ('<p style="font-family: \'Raleway\', sans-serif;">Thank you for your registration!</p>
   	<form action="login.php">
      <p id="buttone"><input type="submit" value="Log in now!"></p>
    </form>');

}
	  
	mysql_close($con);


?>
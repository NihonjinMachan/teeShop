<link rel="stylesheet" type="text/css" href="pstyles.css">
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<?php
	include('session.php');
	$productID = $_GET['shirt'];
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
				$resource = mysql_query("SELECT * FROM Product WHERE productName = \"$productID\"");
				$query = "SELECT * FROM Product WHERE productName = \"$productID\"";


				if ( !mysql_query($query) ){
   						die('Query Failed'.mysql_error());
					} else {
						$rows = mysql_fetch_array($resource);
						$productName = $rows['productName'];
            			$price = $rows['price'];
            			$loyaltyPoints = $rows['loyaltyPoints'];
            			$realID = $rows['productID'];
					}

				$custp = mysql_query("SELECT customerPoints FROM Customer WHERE userName=\"$username\"");
				$points = mysql_fetch_array($custp);


				if ($points['customerPoints'] > $price){
					$newpoints = $points['customerPoints'] - $price;
					$newprice = 0;
				} else {
					$newprice = $price - $points['customerPoints'];
					$newpoints = 0;
				}	
				mysql_query("UPDATE Customer SET customerPoints=$newpoints WHERE userName=\"$username\"");
				mysql_query("INSERT INTO Purchase VALUES ($id, $realID)");
				mysql_close($con);

		echo ("<p style=\"font-family: 'Raleway', sans-serif;\">You have successfully bought $productID for the discounted price of <span style=\"color: #336E7B\">AED $newprice.</span><br>You now have $newpoints loyalty point(s).</br>
			</p>
   	<form action=\"profile.php\">
      <p id=\"buttone\"><input type=\"submit\" value=\"Continue\"></p>
    </form>");
?>

<?php
	include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Designed for Geeks!</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="pstyles.css">
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>
<body>

	<header>

		<div class="logoarea">
			<a href="index.php"><img width="100" height="50" alt="teeshop logo" src="images/logo.png"></a>
		</div>

		<nav>
			<ul>
				<li class="about"><a href="">About Us</a>
					<div class="dropdown">
    				<a href="#">The Story</a>
    				<a href="#">Customer Gurantee</a>
  					</div>
  					</li>
				<li><a href="products.php">Products</a></li>
				<li><a href="">Contact Us</a></li>
				<li class="about">
				<?php
					if(isset($username)){
					echo("<a href=\"#\">$username</a>					
					<div class=\"dropdown\">
    				<a href=\"profile.php\" style='color: white'>Profile</a>
    				<a href=\"logout.php\" style='color: white'>Log out</a>
  					</div>"
					);}
					else{
					echo("<a href=\"login.php\">Log In</a>");
					}
				?>
				</li>
			</ul>
		</nav>

	</header>

<div class="page">
<div id="logincontainer">
  <div class="login">
    <h1>Welcome, <?php echo("$username"); ?>!</h1>
    <p>Email : <span style="color: black"><?php echo("$email"); ?></span></p>
    <p>Loyalty Points : <span style="color: black"><?php echo("$points"); ?></span></p>
    <br>
    <p style="font-size: 1.3em">Previous Purchases:</p>
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
			$resource = mysql_query("SELECT productName FROM Product p, Purchase u WHERE p.productID = u.productID AND $id = u.custID");

				        while($rows = mysql_fetch_array($resource)):
            			$productName = $rows['productName'];
            			echo ("<p style=\"color: black\">$productName</p>");

            			endwhile;
 	?>
  </div>
</div>
</div>
	<footer id="loginfooter">
		<ul>
		<li><a href="legal.html">Legal</a></li>
		<li><a href="sitemap.html">Site Map</a></li>
		</ul>
	</footer>
</body>
</html>
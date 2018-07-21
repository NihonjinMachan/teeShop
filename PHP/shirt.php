<?php
	include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Products: Alien Shirt</title>
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
			<ul class="breadcrumbs">
				<li><a href="index.php">Home</a> > </li> 
				<li><a href="products.php">Products</a> > </li> 
				<li class="currlink"><a href="#">Description</a></li> 
			</ul>

		<div class="product">
				<?php
				$hostname="localhost"; //local server name default localhost
				$username="root";  //mysql username default is root.
				$password="";       //blank if no password is set for mysql.
				$database="teeshop";  //database name which you created
				$productID = $_GET['pName'];
				$con=mysql_connect($hostname,$username,$password);
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
            			$imgSrc = $rows['bimgSrc'];
            			$description = $rows['description'];
            			$loyaltyPoints = $rows['loyaltyPoints'];
						echo ("<div class=\"shirtpic\">
						<img width=\"270\" height=\"360\" alt=\"alien shirt picture\" src=\"$imgSrc\">
						</div><div class=\"text\">
						<h1>$productName</h1>
						<h2>AED $price</h2>
						<p>$description <span style=\"color: #336E7B;\">You will receive $loyaltyPoints loyalty point(s) on this purchase. 1 loyalty point is equivalent to 1 AED.</span></p>
						</div>");
					}
				mysql_close($con);
				?>

			<div class="options">
			<label>Color: </label>
			<form>
				<input name="color" type="radio" checked="" value="red"> Red
   				<input name="color" type="radio" value="blue"> Blue
  				<input name="color" type="radio" value="black"> Black
			</form>

			<label>Size: </label>
			<form>
				<input name="size" type="radio" checked="" value="S"> S
   				<input name="size" type="radio" value="M"> M
  				<input name="size" type="radio" value="L"> L
  				<input name="size" type="radio" value="XL"> XL
			</form>

			<?php
				if(isset($_SESSION['login_user'])){
				echo("<div class=\"buttdiv\">
					<form method=\"post\" action=\"checkout.php?shirt=$productID\"><input type=\"submit\" value=\"Buy\"></form>
					</div>
					<div class=\"buttdiv\">
					<form method=\"post\" action=\"redemption.php?shirt=$productID\"><input type=\"submit\" value=\"Redeem points\"></form>
				</div>");}
				else{
				echo("<form method=\"post\" action=\"login.php\">
			<input type=\"submit\" value=\"Log in to buy\">
			</form>");}
			?>
			</div>
			</div>

			<div class="table">
			<img width="270" height="150" alt="sizing information" src="images/table.png">
			</div>
	
	<footer>
		<ul>
		<li><a href="legal.html">Legal</a></li>
		<li><a href="sitemap.html">Site Map</a></li>
		</ul>
	</footer>
	</div>

</body>
</html>
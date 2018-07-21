<?php
	include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>teeshop: Products</title>
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

		<div id="container">
			<ul class="breadcrumbs">
				<li><a href="index.php">Home</a> > </li> 
				<li class="currlink"><a href="products.php">Products</a></li>
			</ul>

			<div id="sidebar">
				<ul id= "first">
					<li> PRICE </li>
					<li><a href="#"> &gt; AED 100 </a></li>
					<li><a href= "#"> AED 75-100 </a></li>
				<li><a href="#"> &lt; AED 75 </a></li>
			</ul>

				<ul id= "second">
				<li> CATEGORY  </li>
				<li><a href="#" >  Gaming </a></li>
				<li><a href= "#"> Pop Culture </a></li>
				<li><a href="#">  Music </a></li>
			</ul> 
			</div>

			<div id="content">
				<ul> 
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
				$resource = mysql_query("SELECT * FROM Product");
				$query = "SELECT * FROM Product";

				if ( !mysql_query($query) ){
   						die('Query Failed'.mysql_error());
					} else {

	        			while($rows = mysql_fetch_array($resource)):
            			$productName = $rows['productName'];
            			$price = $rows['price'];
            			$imgSrc = $rows['imgSrc'];
            			echo ("<li> 
								<a href=\"shirt.php?pName=$productName\"><img src=\"$imgSrc\" height=\"200\" width=\"200\" alt=\"alien shirt picture\" /></a>
								<p>$productName</p>
								<p class=\"price\"> AED $price </p>
								</li>");

            			endwhile;
					}
	  
				mysql_close($con);

				//http://forums.htmlhelp.com/index.php?showtopic=13686
				?>
				</ul>
			</div>
		</div>

		<footer>
		<ul>
		<li><a href="legal.html">Legal</a></li>
		<li><a href="sitemap.html">Site Map</a></li>
		</ul>
		</footer>
</body>
</html>
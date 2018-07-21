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
	<div id="coverflow">
		<div class="covers">
			<ul>
				<li><div class="imgdiv">
						<a>
							<img src="coverflow/img/coverflow1.png" alt="coverflow 1">
						</a>
					</div>
					<div class="text">
						
					</div>
				</li>
				<li><div class="imgdiv">
						<a>
							<img src="coverflow/img/coverflow2.png" alt="coverflow 2">
						</a>
					</div>
					<div class="text">
						
					</div>
				</li>
				<li><div class="imgdiv">
						<a>
							<img src="coverflow/img/coverflow3.png" alt="coverflow 3">
						</a>
					</div>
					<div class="text">
						
					</div>
				</li>
				</ul>
		</div>
	</div>
	
	<footer>
		<ul>
		<li><a href="legal.html">Legal</a></li>
		<li><a href="sitemap.html">Site Map</a></li>
		</ul>
	</footer>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<script src="coverflow/js/coverflow.min.js"></script>
	<script> $coverflow = $("#coverflow").coverflow({"path":"file:///D:/Naqeeb/CS/Sem%202/Web%20Design/Coursework/htdocs/coverflow"}); </script>
</body>
</html>
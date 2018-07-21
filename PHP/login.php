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
				<li><a href="login.php">Log In</a></li>
			</ul>
		</nav>

	</header>

<div class="page">
<div id="logincontainer">
  <div class="login">
    <h1>Login</h1>
    <form method="post" action="loginp.php">
      <p><input type="text" name="login" value="" placeholder="Username"></p>
      <p><input type="password" name="password" value="" placeholder="Password"></p>
		<input type="hidden" name="link" value="<?php echo htmlentities($_SERVER['HTTP_REFERER']) ?>"/>
      <p class="submit"><input type="submit" name="commit" value="Submit"></p>
      <p id="registerlink">Not a member? Register <a href="registration.html">here</a></p>
    </form>
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
<link rel="stylesheet" type="text/css" href="pstyles.css">
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
   echo ('<p style="font-family: \'Raleway\', sans-serif;">You have successfully logged out.</p>
   	<form action="index.php">
      <p id="buttone"><input type="submit" value="Main Page"></p>
    </form>');
}
?>
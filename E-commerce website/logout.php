<!DOCTYPE html>
<html>
    <head>
    	<title>Logout</title>
    </head>
    <body>
    	   <?php
session_start();
unset($_SESSION['username']);
session_destroy();

header("Location: index.php");
exit;
?>
<div class="container" style="padding: 50px 0 0 100px">
    			<h2>Logged-out successfully. 
    			</h2>
    			<h3>Thank you for visiting LifeStyle. <a href="boot.html">Click here</a> to visit again.</h3>
    			</div>
</ul>
    </body>


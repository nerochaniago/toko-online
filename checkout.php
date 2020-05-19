<?php 
session_start();
 $koneksi = new mysqli("localhost","root","","nerotoko");

?>



<!DOCTYPE html>
<html>
<head>
	<title>Check Out</title>
</head>
<body>

	<nav class="navbar navbar-default">
		<div class="container">
			<ul class="nav navbar-nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="keranjang.php">keranjang</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="checkout.php">Check-Out</a></li>
				
			</ul>
		</div>
	</nav>

</body>
</html>
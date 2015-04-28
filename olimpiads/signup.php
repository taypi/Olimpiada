<?php
	session_start();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href=’http://fonts.googleapis.com/css?family=Droid+Sans’ rel=’stylesheet’ type=’text/css’>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		print_r($_SESSION);
	?>
	<nav>
		<ul>
			<li> <a href="media.php">Media</a> </li>
			<li> <a href="index.php">Homepage</a> </li>
			<li> <a href="signup.php">Signup</a> </li>
	    </ul>
    </nav>
	<section>
		<form action="">
			Email <input type="email" name="email" required>
			Zip Code <input type="number" name="number" required>
			<textarea rows="4" columns="50">
			</textarea>
			<input type="submit" value="submit">
		</form>
	</section>
</body>
</html>
<?php
	session_start();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Media</title>
	<link href=’http://fonts.googleapis.com/css?family=Droid+Sans’ rel=’stylesheet’ type=’text/css’>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		$_SESSION["favcolor"] = "yellow";
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
		<video>
			<source src="video.mp4"></source>
			<source src="video.webm"></source>
			Sorry, your browser does not seem to support HTML5.
		</video>
		<audio>
			<source src="song.mp3"></source>
			<source src="song.ogg"></source>
			Sorry, your browser does not seem to support HTML5.
		</audio>
	</section>
</body>
</html>
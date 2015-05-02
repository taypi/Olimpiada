<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Your Home Page</title>
	<link href="style.css" rel="stylesheet" type="text/css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="olimpiada.js"></script>
</head>
<body>
	<div id="profile">
		<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
		<b id="logout"><a href="logout.php">Log Out</a></b>
	</div>
	<div id="play">
		<img src="botao_Jogar.png">
	</div>
</body>
</html>
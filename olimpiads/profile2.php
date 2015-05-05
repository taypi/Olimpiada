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
	<div id="etapa">
		<a id="etapa1" href="profile.php">Etapa 1</a>
		<a id="etapa2">Etapa 2</a>
		<a id="etapa3" href="profile3.php">Etapa 3</a>
	</div>
	<div id="profile">
		<br><br><b id="welcome">Welcome : <i><?php echo $login_session; ?></i> <br> Classe : <?php echo $user_class; ?></b>
		
	</div>
	<div id="logout"><b><a href="logout.php">Log Out</a></b></div>
</body>
</html>
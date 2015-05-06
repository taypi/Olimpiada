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

    <div id="etapa">
		<a id="etapa1" href="profile.php">Etapa 1</a>
		<a id="etapa2">Etapa 2</a>
		<a id="etapa3" href="profile3.php">Etapa 3</a>
	</div>
</head>
<body>
	<div id="profile">
		<br><br><b id="welcome">Welcome : <i><?php echo $login_session; ?></i> <br> Classe : <?php echo $user_class; ?></b>
		
	</div>
	<div id="logout"><b><a href="logout.php">Log Out</a></b></div>
	<button id="start">Start!</button>
	<div id="enunciado">
		<form id="problema1">
			<label>Respostas:</label>
			<input type="radio"
				name="alternativas"
				id="letra_a"
				value="a"
				checked="checked">
			<label for="letra_a">a)</label>

			<input type="radio"
				name="alternativas"
				id="letra_b"
				value="b">
			<label for="letra_b">b)</label>

			<input type="radio"
				name="alternativas"
				id="letra_c"
				value="c">
			<label for="letra_c">c)</label>

			<input type="radio"
				name="alternativas"
				id="letra_d"
				value="d">
			<label for="letra_d">d)</label>
		</form>
		<button id="btn1" type="submit" value="Submit">Enviar</button>
	    <form id="problema2">
	    	<label>Respostas:</label>
	    	<input type="radio"
				name="alternativas2"
				id="letra_2a"
				value="a"
				checked="checked">
			<label for="letra_a">a)</label>

			<input type="radio"
				name="alternativas2"
				id="letra_2b"
				value="b">
			<label for="letra_b">b)</label>

			<input type="radio"
				name="alternativas2"
				id="letra_2c"
				value="c">
			<label for="letra_c">c)</label>

			<input type="radio"
				name="alternativas2"
				id="letra_2d"
				value="d">
			<label for="letra_d">d)</label>
	    </form>
	    <button id="btn2" type="submit" value="Submit">Enviar</button>
	</div>
</body>
</html>
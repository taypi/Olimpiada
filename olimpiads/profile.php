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
	<!--div do enunciado, com as alternativas e o button de enviar a resposta.-->
	<!-- tem que pegar do banco de dados-->
	<div id="enunciado">
		<p id="problema1">
			<label>Respostas:</label>
			<input type="radio"
				name="alternativas"
				id="letra_a"
				value="a"
			<label for="letra_a">a)</label>

			<input type="radio"
				name="alternativas"
				id="letra_b"
				value="b"
			<label for="letra_b">b)</label>

			<input type="radio"
				name="alternativas"
				id="letra_c"
				value="c"
			<label for="letra_c">c)</label>

			<input type="radio"
				name="alternativas"
				id="letra_d"
				value="d"
			<label for="letra_d">d)</label>

		</p>
		<button type="submit" value="Submit">Enviar</button>
	</div>
	<div id="envio">Reposta enviada!</div>
</body>
</html>
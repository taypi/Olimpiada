<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="olimpiada.js"></script>
</head>
<body>
<div id="main">
<h1>#1 Olimpiada de Matematica e Logica do BTI</h1>
<div id="login">
<h2>Login Form</h2>
<form action="" method="post">
<label>Usuario :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Senha :</label>
<input id="password" name="password" placeholder="**********" type="password">
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>
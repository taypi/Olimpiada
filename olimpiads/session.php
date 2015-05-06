<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "umbrella7");
$connection = mysql_connect("localhost", "root", "password");
// Selecting Database
$db = mysql_select_db("olimpiads", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select usuario from alunos where usuario='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['usuario'];
// Pegando a classe da sessão
$ses_sql2=mysql_query("select id_classe from alunos where usuario='$user_check'", $connection);
$row2 = mysql_fetch_assoc($ses_sql2);
$class_session =$row2['id_classe'];
switch($class_session){
	case 1:
		$user_class ="Guerreiro";
		break;
	case 2:
		$user_class ="Mago";
		break;
	case 3:
		$user_class ="Arqueiro";
		break;
	case 4:
		$user_class ="Clérigo";
		break;
	case 5:
		$user_class ="Ladino";
		break;
}
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>
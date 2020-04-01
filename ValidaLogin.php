<?php
session_start();
$login = $_GET['login'];
$senha = $_GET['senha'];
$_session['login'] = $login;
$conexao = mysqli_connect('localhost','pwtech62_wesley','vwf849700','pwtech62_teste');
$res = mysqli_query($conexao, "SELECT usuario AND senha FROM usuarios WHERE login = '$login' AND senha = '$senha'");
$row = mysqli_fetch_array($res);
if ($login == $res) {
	
}else{
	echo "login e/ou senha invalidos, tente novamente";//adicionar animação em java script com um alerta na tela.
}
(mysql_close($conexao);
?>
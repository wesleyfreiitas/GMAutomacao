<?php
$login = $_get['login'];
$senha = $_get['senha'];
$email = $_get['email'];

$conexao = mysqli_connect('localhost','pwtech62_wesley','vwf849700','pwtech62_teste');
$insere = mysqli_query($conexao, "INSERT INTO usuarios (login, senha, email) VALUES ('$login','$senha','$email')");

if ($login == "") {
	$resp = "Preencha todos os dados.";
echo '<script type="text/javascript">alert("'.$resp.'");
window.location="login.html"</script>';
}elseif ($senha == "") {
	$resp = "Preencha todos os dados.";
echo '<script type="text/javascript">alert("'.$resp.'");
window.location="login.html"</script>';
}elseif ($email == "") {
	$resp = "Preencha todos os dados.";
echo '<script type="text/javascript">alert("'.$resp.'");
window.location="login.html"</script>';
}else {$resp = "Sua mensagem foi eviada com sucesso.";
echo '<script type="text/javascript">alert("'.$resp.'");
window.location="login.html"</script>';
exit;
}
?>
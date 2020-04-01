<?php
#cabeçalho
include 'views/header.php';
#conteudo
if (isset($_GET['pagina'])) {
	$pagina = 	$_GET['pagina'];
}else{
	$pagina = 'views/home';
}
switch ($pagina) {
	case 'servicos': 
		include 'views/servicos.php';
		break;
	case 'sistemas':
		include 'views/sistemas.php';
		break;
	case 'quemsomos':
		include 'views/quemsomos.php';
		break;
	case 'produtos':
		include 'views/produto.php';
		break;
	case 'contato':
		include 'views/contato.php';
		break;
	case 'restrito':
		include 'views/restrito.php';
		break;
	default:
		include 'views/home.php';
		break;
}
#rodapé
include 'views/footer.php';
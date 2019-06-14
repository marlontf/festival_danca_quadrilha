<?php
/*chama o arquivo onde foi definido com qual banco estamos nos conectando. Se é o development ou production*/
require "environment.php";

$config = array();

//verifica a configuração do environment e puxa a configuração do servidor local ou externo;
if (ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/calouros.com/");
	$config['dbname'] 	= 'db_concursos_calouros';
	$config['host']		= 'localhost';
	$config['dbuser']	= 'suporte';
	$config['dbpass']	= '';	
}else{
	define("BASE_URL", "http://sgcpd.teofilootoni.mg.gov.br/");
	$config['dbname'] 	= 'db_concursos_calouros';
	$config['host']		= 'localhost';
	$config['dbuser']	= 'root';
	$config['dbpass']	= '';
}

global $pdo;
//conexão com o banco de dados
try {

	$pdo = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);

} catch (PDOException $e) {
	echo "Erro:".$e->getMessage();
	exit();
}
?>
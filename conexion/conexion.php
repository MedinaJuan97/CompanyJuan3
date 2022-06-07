<?php
$servidor="mysql:dbname=Company;host=127.0.0.1";
$usuario="root";
$password="jua123";

try {
	$pdo= new PDO($servidor,$usuario,$password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
	//echo "Conectado..";

} catch (PDOException $e) {

	echo "Conexión mala".$e->getMessage();

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Verifica</title>
	<meta charset="utf-8">
</head>
<body>
<?php 

$nome = $_POST['NomeCliente'];
$sobrenome = $_POST['SobrenomeCliente'];
$idade = $_POST['IdadeCliente'];
$email = $_POST['EmailCliente'];
$erro  = 0;


//if (empty($nome) OR strstr($nome, '')==false) {
//	echo "Favor digitar o seu nome corretamente.<br>";
//	$erro = 1;
//}


if (strlen($email)< 8 || strstr($email, '@')==false) {
	echo "Favor digitar o seu email corretamente.<br>";
	$erro = 1;
}


//if ( ( ! isset( $idade ) || ! is_numeric( $idade ) ) && !$erro ) {
	//$erro = 'A idade deve ser um valor número.';
//}

//if (empty($sobrenome) OR strstr($sobrenome, '')==false) {
	//echo "Favor digitar o seu sobrenome corretamente.<br>";
	//$erro = 1;
//}

if ($erro == 0) {
	echo "Todos os dados foram digitados corretamente.<br>";
	include 'Cadastro.php';
}
    
    ?> 
    
 </body>
    
    
</html>
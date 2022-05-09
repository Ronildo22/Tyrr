<?php
$nome = $_POST['NomeCliente'];
$sobrenome = $_POST['SobrenomeCliente'];
$idade = $_POST['IdadeCliente'];
$email = $_POST['EmailCliente'];
$strcon = mysqli_connect('localhost','root','','banco') or
die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO cadastro VALUES ";
$sql .= "('$nome', '$sobrenome', '$idade', '$email')";
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Cliente cadastrado com sucesso!";
echo "<a href='Formulario.php'>Clique aqui para realizar um novo
cadastro</a><br>";
echo "<a href='consulta.php'>Clique aqui para realizar uma consulta</a>
<br>";
?>
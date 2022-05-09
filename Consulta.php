<?php
// Conectando ao banco de dados:
include_once("Consulta.php");
// Criando tabela e cabeçalho de dados:
echo "<table border=1>";
echo "<tr>";
echo "<th>NOME</th>";
echo "<th>SOBRENOME</th>";
echo "<th>IDADE</th>";
echo "<th>EMAIL</th>";
echo "</tr>";

$strcon = mysqli_connect('localhost','root','','banco') or
die('Erro ao conectar ao banco de dados');

$sql = "SELECT * FROM cadastro";
$resultado = mysqli_query ($strcon,$sql) or die("Erro ao retornar dados");
// Obtendo os dados por meio de um loop while
while ($registro = mysqli_fetch_array($resultado))
{
 $nome = $registro['NomeCliente'];
 $sobrenome = $registro['SobrenomeCliente'];
 $idade = $registro['IdadeCliente'];
 $email = $registro['EmailCliente'];
 echo "<tr>";
 echo "<td>".$nome."</td>";
 echo "<td>".$sobrenome."</td>";
 echo "<td>".$idade."</td>";
 echo "<td>".$email."</td>";
 echo "</tr>";
}
mysqli_close($strcon);
echo "</table>";
?>
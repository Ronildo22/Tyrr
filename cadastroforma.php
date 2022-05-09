<?php
$pagamento = $_POST['Metododepagamento'];
$cartao = $_POST['NumerodoCartao'];
$strcon = mysqli_connect('localhost','root','','banco3') or
die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO cadastro VALUES ";
$sql .= "('$pagamento','$cartao')";
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Compra Efetuada com sucesso!";

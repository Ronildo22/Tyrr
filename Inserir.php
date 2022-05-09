<?php
$nome = $_POST['NomeCliente'];
$email = $_POST['EmailCliente'];
$pergunta1 = $_POST['Qualestilodejogosvoce'];
$pergunta2 = $_POST['Qualplataformavocêprefere'];
$pergunta3 = $_POST['Oquevocêachadonossosite'];
$pergunta4 = $_POST['Quaisdestesjogosvocêjoganomomento'];
$pergunta5 = $_POST['Emumjogovocêprefere'];
$pergunta6 = $_POST['Vocêpreferejogosnovosouantigos'];
$pergunta7 = $_POST['Vocêpreferejogosonlineouoffline'];
$strcon = mysqli_connect('localhost','root','','banco2') or
die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO cadastro VALUES ";
$sql .= "('$nome','$email','$pergunta1','$pergunta2','$pergunta3','$pergunta4','$pergunta5','$pergunta6','$pergunta7')";
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Cliente cadastrado com sucesso!";
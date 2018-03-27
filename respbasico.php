<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Respostas básico</title>
</head>
<body>




<?php

$questao1 = $_POST['questao1'];
$questao2 = $_POST['questao2'];
$questao3 = $_POST['questao3'];
$questao4 = $_POST['questao4'];
$questao5 = $_POST['questao5'];
$questao6 = $_POST['questao6'];
$questao7 = $_POST['questao7'];
$questao8 = $_POST['questao8'];
$questao9 = $_POST['questao9'];
$questao10 = $_POST['questao10'];


echo "<h1>Suas Respostas:</h1>";
echo"Questao 1 = $questao1<br>";
echo"Questao 2 = $questao2<br>";
echo"Questao 3 = $questao3<br>";
echo"Questao 4 = $questao4<br>";
echo"Questao 5 = $questao5<br>";
echo"Questao 6 = $questao6<br>";
echo"Questao 7 = $questao7<br>";
echo"Questao 8 = $questao8<br>";
echo"Questao 9 = $questao9<br>";
echo"Questao 10 = $questao10<br>";


echo "<h1>Resultado:</h1>";

$resposta1 = "a";
$resposta2 = "c";
$resposta3 = "c";
$resposta4 = "a";
$resposta5 = "c";
$resposta6 = "d";
$resposta7 = "a";
$resposta8 = "c";
$resposta9 = "a";
$resposta10 = "c";

$acertou = 0;
$errou = 0;
if ($questao1 == $resposta1){
$acertou++;
echo " Questao 1: <font color = green>correta<br></font>";
}
else
{
$errou++;
echo " Questao 1: <font color = red>errada<br></font>";
}
if ($questao2 == $resposta2){
$acertou++;
echo " Questao 2: <font color = green>correta<br></font>";
}
else
{
$errou++;
echo " Questao 2: <font color = red>errada<br></font>";
}
if ($questao3 == $resposta3){
$acertou++;
echo " Questao 3: <font color = green>correta<br></font>";
}
else
{
$errou++;
echo " Questao 3: <font color = red>errada<br></font>";
}
if ($questao4 == $resposta4){
$acertou++;
echo " Questao 4: <font color = green>correta<br></font>";
}
else
{
$errou++;
echo " Questao 4: <font color = red>errada<br></font>";
}
if ($questao5 == $resposta5){
$acertou++;
echo " Questao 5: <font color = green>correta<br></font>";
}
else
{
$errou++;
echo " Questao 5: <font color = red>errada<br></font>";
}
if ($questao6 == $resposta6){
$acertou++;
echo " Questao 6: <font color = green>correta<br></font>";
}
else
{
$errou++;
echo " Questao 6: <font color = red>errada<br></font>";
}
if ($questao7 == $resposta7){
$acertou++;
echo " Questao 7: <font color = green>correta<br></font>";
}
else
{
$errou++;
echo " Questao 7: <font color = red>errada<br></font>";
}
if ($questao8 == $resposta8){
$acertou++;
echo " Questao 8: <font color = green>correta<br></font>";
}
else
{
$errou++;
echo " Questao 8: <font color = red>errada<br></font>";
}
if ($questao9 == $resposta9){
$acertou++;
echo " Questao 9: <font color = green>correta<br></font>";
}
else
{
$errou++;
echo " Questao 9: <font color = red>errada<br></font>";
}
if ($questao10 == $resposta10){
$acertou++;
echo "Questao 10: <font color = green>correta<br></font>";
}
else
{
$errou++;
echo " Questao 10: <font color = red>errada<br></font>";
}
echo "<br>No total você obteve $acertou acertos, e errou $errou vezes.";

?> 

</body>
</html>

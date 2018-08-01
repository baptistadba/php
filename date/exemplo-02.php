<?php 

//pega o timestamp da data
echo "Data do aniversario.</br>";
$ts= strtotime("1988-08-08");
echo date("l, d/m/Y",$ts);
echo "</br>";
echo "</br>";


echo "Data atual.</br>";
$ts2= strtotime("now");
echo date("l, d/m/Y",$ts2);
echo "</br>";
echo "</br>";

echo "Data de amanha.</br>";
$ts3= strtotime("+1 day");
echo date("l, d/m/Y",$ts3);
echo "</br>";
echo "</br>";

echo "Data uma semana após.</br>";
$ts4= strtotime("+1 week");
echo date("l, d/m/Y",$ts4);
echo "</br>";
echo "</br>";

echo "Data um ano após.</br>";
$ts5= strtotime("+1 year");
echo date("l, d/m/Y",$ts5);
echo "</br>";
echo "</br>";

 ?>
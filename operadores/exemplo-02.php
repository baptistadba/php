<?php 

$valorTotal = 0;
$valorTotal += 100;
$valorTotal += 150;
$valorTotal += 250;
$valorTotal -= 250;
echo "<strong>"."Valor total: "."</strong>";
echo $valorTotal;
echo "</br>";

echo "<strong>"."Valor -30: "."</strong>";
$valorTotal -= 30;
echo $valorTotal;
echo "</br>";

echo "<strong>"."Valor *5: "."</strong>";
$valorTotal *= 5;
echo $valorTotal;
echo "</br>";

echo "<strong>"."Valor / 2: "."</strong>";
$valorTotal /= 2;
echo $valorTotal;
echo "</br>";
echo "</br>";
echo "--------------------------------------------</br>";
$a=5;
$b=2;
echo "<strong>"."valor de a:"."</strong>".$a."</br>";
echo "<strong>"."valor de b:"."</strong>".$b."</br>";
echo "<strong>"."Valor de a+b:"."</strong>".($a+$b)."</br>";
echo "<strong>"."Valor de a-b:"."</strong>".($a-$b)."</br>";
echo "<strong>"."Valor de a*b:"."</strong>".($a*$b)."</br>";
echo "<strong>"."Valor de a/b:"."</strong>".($a/$b)."</br>";
echo "<strong>"."Valor de a%b:"."</strong>".($a%$b)."</br>";
echo "<strong>"."Valor de a**b:"."</strong>".($a**$b)."</br>";
 ?>
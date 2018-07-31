<?php 

//timestamp de um dia especifico para travar o horario.
echo date("d/m/Y H:i:s",365896800);
echo "</br>";

//timestamp (conta os segundos apartir 01/01/1970)
echo time();
echo "</br>";
echo "</br>";
echo "</br>";

$nextWeek = time() + (7 * 24 * 60 * 60);
                   // 7 days; 24 hours; 60 mins; 60secs
echo 'Now:       '. date('Y-m-d') ."\n</br>";
echo 'Next Week: '. date('Y-m-d', $nextWeek) ."\n</br>";
// or using strtotime():
echo 'Next Week: '. date('Y-m-d', strtotime('+1 week')) ."\n</br>";

 ?>
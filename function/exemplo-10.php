<?php 

//funcoes anonimas
function test($callback)
{

	$callback();

}

echo test(function(){

	echo 'Terminou!!';
});


 ?>
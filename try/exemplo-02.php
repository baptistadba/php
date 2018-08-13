<?php 

function TrataNome($name){

	if (!$name) {
		
		throw new Exception("Nenhum nome foi informado.", 1);
		
	}

	echo ucfirst($name)."</br>";

}

try {
	
	TrataNome("Fulano");
	TrataNome("");

} catch (Exception $e) {
	
	echo $e->getMessage();

} finally {

	echo "O bloco Try funcionou!";
}


 ?>
<?php 

//aula de metodos staticos

class Documento{

	private $numero;

	public function getNumero(){
		return $this->numero;

	}

	public function setNumero($numero){
		$resultado = Documento::validarCPF($numero);

		if ($resultado === false) {
			throw new Exception("Cpf informado nao é valido.", 1);
			
		}else{
			echo "CPF  $numero é Válido!!";
		}

		$this->numero = $numero;
	}

	public static function validarCPF($cpf){
		//VERIFICA SE UM NUMERO FOI INFORMADO
		if (empty($cpf)) return false;

		//ELIMINA POSSIVEL MASCARA
		$cpf = preg_match('/[0-9]/',$cpf)?$cpf:0;
		$cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

		//VERIFICA SE O NUMERO DE DIGITOS INFORMADO É IGUAL A 11
		if (strlen($cpf) != 11){
			echo "lenght";
			return false;
		}
		//VERIFICA SE NENHUMA DAS SEQUENCIAS INVALIDAS ABAIXO FOI DIGITADA.
		//CASO AFIRMATIVO RETORNA FALSO.
		elseif ($cpf== '00000000000' ||
			$cpf== '11111111111' ||
			$cpf== '22222222222' ||
			$cpf== '33333333333' ||
			$cpf== '44444444444' ||
			$cpf== '55555555555' ||
			$cpf== '66666666666' ||
			$cpf== '77777777777' ||
			$cpf== '88888888888' ||
			$cpf== '99999999999'){
				return false;
			//CALCULA OS DIGITOS VERIFICADORES PARA SABER SE O CPF É VALIDO
		} else{

			for ($t = 9; $t < 11; $t++) {

				for ($d= 0 , $c = 0; $c < $t ; $c++) {
					$d += $cpf{$c} * (($t + 1) - $c);				
				 } 

				$d = ((10* $d) % 11 ) % 10;
				if($cpf{$c} != $d) {
					return false;
				}
			}

			return true;
		}

	}
}

$cpf = new Documento();
$cpf->setNumero("17417351140"); 

echo "</br>";
echo "</br>";
echo "Resultado de acessar o objeto diretamente</br>";
//mostrando o resultado da função testa o cpf
var_dump($cpf);

echo "</br>";
echo "</br>";

echo "Usando a classe validarCPF diretamente, chamando o metodo do objeto.</br>";
//mostrando o resultado da função testa o cpf
var_dump($cpf->getNumero());


echo "</br>";
echo "</br>";

echo "Usando a classe validarCPF diretamente.</br>";
//usando a classe diretamente
var_dump(Documento::validarCPF("14755563909"));
 ?>
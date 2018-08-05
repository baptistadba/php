<?php 

class Usuario{

	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

	//USUARIO
	public function getIdusuario(){
		return $this->idusuario;
	}

	public function setIdusuario($value){
		$this->idusuario=$value;		
	}

	//LOGIN
	public function getDeslogin(){
		return $this->deslogin;
	}

	public function setDeslogin($value){
		$this->deslogin=$value;		
	}

	//SENHA
	public function getDessenha(){
		return $this->dessenha;
	}

	public function setDessenha($value){
		$this->dessenha=$value;		
	}

	//DATA CADASTRO
	public function getDtcadastro(){
		return $this->dtcadastro;
	}

	public function setDtcadastro($value){
		$this->dtcadastro=$value;		
	}

	//funçao carrega 1 usuario
	public function loadById($id){
		$sql = new SQL;
		$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID",array(
								":ID"=>$id

		));


		//if (isset($results[0])){
		if (count($results) > 0){

			$row =$results[0];

			$this->setIdusuario($row['idusuario']);
			$this->setDeslogin($row['deslogin']);
			$this->setDessenha($row['dessenha']);
			$this->setDtcadastro(new DateTime($row['dtcadastro']));		

		}

	}

	//funcao getList
	public static function getList(){
		
		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

	}

	//busca por login
	public static function search($login){

		$sql =  new Sql();

		return $sql->select("SELECT * FROM tb_usuarios where deslogin like :SEARCH ORDER BY deslogin", array(
						':SEARCH'=>"%".$login."%"
		));

	}


	//funcao busca dados apos efetuar login usando a senha correta.
	public function login($login,$senha){
		$sql = new SQL;
		$results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :SENHA",array(
								":LOGIN"=>$login,
								":SENHA"=>$senha

		));


		//if (isset($results[0])){
		if (count($results) > 0){

			$row =$results[0];

			$this->setIdusuario($row['idusuario']);
			$this->setDeslogin($row['deslogin']);
			$this->setDessenha($row['dessenha']);
			$this->setDtcadastro(new DateTime($row['dtcadastro']));		

		} else {

			throw new Exception("Login e/ou senha inválidos.", 1);
			

		}


	}

	public function __toString(){
		return json_encode(array(
				"idusuario"=>$this->getIdusuario(),
				"deslogin"=>$this->getDeslogin(),
				"dessenha"=>$this->getDessenha(),
				"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")

		));

	}


}

 ?>
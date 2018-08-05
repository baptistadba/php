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
		
		$this->setData($results[0]);

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


			$this-setData($results[0]);	

		} else {

			throw new Exception("Login e/ou senha inválidos.", 1);
			

		}


	}


	public function setData($data){

		$this->setIdusuario($data['idusuario']);
		$this->setDeslogin($data['deslogin']);
		$this->setDessenha($data['dessenha']);
		$this->setDtcadastro(new DateTime($data['dtcadastro']));	

	}


	public function insert(){

		$sql= new Sql();
		$results = $sql->select("CALL sp_usuarios_insert(:LOGIN ,:SENHA)",array(
						":LOGIN"=>$this->getDeslogin() ,
						":SENHA"=>$this->getDessenha()


		));

		if (count($results) > 0){
			$this->setData($results[0]);
		}



	}

	//funcao atualizar login e senha
	public function update($login,$senha){
		$this->setDeslogin($login);
		$this->setDessenha($senha);

		$sql = new Sql();
		$sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN,dessenha=:SENHA WHERE idusuario=>:ID",array(
							":LOGIN"=>$this->getDeslogin(),
							":SENHA"=>$this->getDessenha(),
							":ID"=>$this->getIdusuario()

		));
	}


	public function delete(){
		$sql = new Sql();
		$sql->query("DELETE FROM tb_usuarios WHERE idusuario= :ID",array(
				":ID"=>$this->getIdusuario()
		));

		$this->setIdusuario(0);
		$this->setDeslogin("");
		$this->setDessenha("");
		$this->setDtcadastro(new DateTime());
		
	}


	public function __construct($login = "", $senha=""){
		$this->setDeslogin($login);
		$this->setDessenha($senha);

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
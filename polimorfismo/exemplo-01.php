<?php 

abstract class Animal {

	public function falar()
	{
		return "Som";
	}

	public function mover()
	{
		return "Anda";
	}


}

class Cachorro extends Animal{
	public function falar()
	{
		echo get_class($this)."</br>";
		return "Late";
	}

}

class Gato extends Animal{
	public function falar(){
		echo get_class($this)."</br>";
		return "Mia";
	}

}
class Passaro extends Animal{
	public function falar(){
		echo get_class($this)."</br>";
		return "Canta";
	}

	public function mover(){
		return "Voa".",".parent::mover();
	}

}

$dog = new Cachorro();
echo $dog->falar()."</br>";
echo $dog->mover()."</br>";
echo "</br>";
echo "------------------------------------------";
echo "</br>";
$cat = new Gato();
echo $cat->falar()."</br>";
echo $cat->mover()."</br>";
echo "</br>";
echo "------------------------------------------";
echo "</br>";
$bird = new Passaro();
echo $bird->falar()."</br>";
echo $bird->mover()."</br>";




 ?>
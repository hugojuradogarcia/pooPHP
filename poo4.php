<?php 
	interface  miInterface
	{
		public function conectar();
		public function desconectar();
	}

	class MiClase implements  miInterface
	{
		public function conectar()
		{
			echo "Conectar";
		}
		public function desconectar()
		{
			echo "Desconectar";
		}
	}
	class ConexionOracle implements miInterface
	{
		public function conectar()
		{
			echo "Conexion con Oracle";
		}
		public function desconectar()
		{
			echo "Desconectar con Oracle";
		}
	}
	class MiClass
	{
		public $nombre;
		public function imprimirNombre()
		{
			echo "Nombre: ".$this->nombre;
		}
	}
	//Objeto a
	$a = new MiClass();
	$a->nombre="Claudio";
	$a->imprimirNombre();
	// Objeto b
	//$b = $a;
	$b = clone $a;
	$b->nombre="Maria";
	$b->imprimirNombre();

	$a->imprimirNombre();

	/**
	* 
	*/
	class Padre
	{
		
		public function a() 
		{
			echo "a";
		}
	}

	class Hijo extends Padre
	{
		public function a()
		{
			echo "<br>Hijo<br>";
		}
	}
	$obj = new Hijo();
	$obj->a();

	class SinPropiedades
	{
		private $datos = array();
		public function __set($name, $value)
		{
			$this->datos[$name]=$value;
		}
		public function __get($name)
		{
			echo "<br><br>Valor: ".$this->datos[$name];
		}
	}
	$a = new SinPropiedades();
	$a->nombre="Luis";
	echo $a->nombre;

?>
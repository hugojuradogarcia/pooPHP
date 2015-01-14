<?php 
	// Clase abstract
	abstract class MiClase
	{
		public function metodo()
		{
			echo "<br>padre";
		}
		abstract protected function miMetodo();
	}

	// Clase hija
	class MiClaseB extends MiClase
	{
		public function miMetodo()
		{
			echo "Hola mundo";
		}
	}

	$a = new MiClaseB();
	$a->miMetodo();
	$a->metodo();

	// Metodos Magicos
	class NuevaClase
	{
		function __construct()
		{
			echo "<br>Al inicio (__construct)";
		}
		function __destruct()
		{
			echo "<br>Al final (__destruct)";
		}
		public function __call($name, $arguments)
		{
			echo "<br>- El metodo con nombre ".$name;
			echo " no existe, consulta la doc <br>- Argumentos: ";
			print_r($arguments);
		}
		public function __set($name, $value)
		{
			echo "<br>Nombre: ". $name;
		}
		public function __get($name)
		{
			echo "<br>Usar $name";	
		}
		public function __isset($name)
		{
			echo "<br>usar $name";
		}
	}
	$b = new NuevaClase();
	$b->miMetodo("a", "b");
	$b->nombre=10;
	echo $b->nuevo;
	isset($b->control);
	echo "<br>hola a todos";

?>
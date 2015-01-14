<?php 
	class Padre
	{
		// Propiedades
		private $nombre = 'Claudio';
		protected $salario = '';
		public $edad = '';

		// Metodo
		public function decirNombre()
		{
			echo "<br>Nombre: ".$this->nombre;
		}
		public static $VarStat;
		public static function sinCrear()
		{
			echo '<br>Sin crear objeto';
		}
	}	

	// Herencia de la clase padre a la clase hijo con (public o protected)
	class Hijo extends Padre
	{
		public function modificarSalario($a)
		{
			if($a>10)
			{
				$this->salario=$a;
			}
			else
			{
				echo "Salario muy bajo";
			}
		}
		public function mostrarSalario()
		{
			$this->decirNombre();
			echo "<br>Salario: ".$this->salario;
		}
	}

	//Instanciando = $a = Objeto
	$a = new Hijo();
	$a->edad=25;
	echo $a->edad;
	$a->modificarSalario(50);
	$a->mostrarSalario();
	//$a->decirNombre();
	Padre::$VarStat =356;
	echo "<br>Static: ".Padre::$VarStat;

	Padre::sinCrear();
	?>
<?php
	class MiClaseDePHP
	{
			function __construct($var)
			{
				echo "cuando se inicia";
				echo '<br>valor: '.$var;

			}
			
			public $nombre = 'Hugo';
			protected $nombre2 = "Hugo2";
			private $nombre3 = "Hugo3";

			public function accion($men,$complemento)
			{
					echo 'Hola mundo! ' .$men.' accion:'.$complemento;
					//echo $this->nombre3;
			}
	}
	// Objeto
	$a = new MiClaseDePHP('Luis');

	//$b = new MiClaseDePHP();
	
	$a->accion('Diego','accion');

	/*$a->nombre='Luis';
	echo $a->nombre;
	echo $a->nombre3;
	//$b = new MiClaseDePHP();
	//$b->accion();

?>
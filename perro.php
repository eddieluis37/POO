
<?php

class Perro
{
	/*
	public: Acceso desde cualquier método de la clase u objeto que lo invoque
	private: Acceso sólo desde los métodos de la clase, los objetos no los pueden invocar
	protected: Acceso sólo desde los métodos de la clase y subclase que la heredan,
	los objetos no los pueden invocar
	*/
	// ATRIBUTOS

	public $nombre;
	public $raza;
	public $edad;
	public $sexo;
	public $adiestrado;
	public $foto;
	public $comida;
	private $pulgas;
	public static $mejor_amigo = 'Hombre';


	// MÉTODOS MÁGICOS
	/*
	CONSTRUCTOR: método que se ejecuta automaticamente al inicio de instanciar la clase.
	*/

	public function __construct ($n, $r, $e, $s, $a, $f, $p)
	{
		$this->nombre = $n;
		$this->raza = $r;
		$this->edad = $e . 'años';
		$this->sexo = ($s) ? 'Macho' : 'Hembra';
		$this->adiestrado = ($a) ? 'Adiestrado' : 'NO entrenado';
		$this->foto = $f;
		$this->pulgas =$p;

		echo '<p><mark>Hola soy el CONSTRUCTOR de la clase</mark></p>';
	}

	/*
	DESTRUCTOR: método que se ejecuta automaticamente al final de instanciar la clase.
	*/
	public function __destruct ()
	{
		echo '<p><mark>Adios soy el DESCONSTRUCTOR de la clase</mark></p>';
	}

	// MÉTODOS
	public function ladrar ()
	{
		echo '<p><mark>GUAUUUU GUAUUUU !!!</mark></p>';
	}
	public function comer ($c)
	{
		$this->comida = $c;
		echo '<p>' . $this->nombre . ' come ' . $this->comida . '</p>';


	}
	public function aparecer ()
	{
		echo '<img src="' . $this->foto . '">';
	}

	public function tiene_Pulgas ()
	{
		echo ($this->pulgas) ? '<p>Tiene Pulgas</p>' : '<p>No tiene Pulgas</p>';

	}

	public function mas_Info ()
	{
		self::ladrar();
		Perro::comer('huesos');
		echo '<p> El mejor amigo del perro es el' . Perro::$mejor_amigo . '</p>';
		echo '<p> La mejor cualidad del perro es la ' . self::MEJOR_CUALIDAD . '</p>';
	}

	public function ladrar_y_comer ()
	{
		self::ladrar();
		Perro::comer('huesos');
		echo Perro::$mejor_amigo;
	}


}

// Instanciar un objeto de la clase

$kenai = new Perro('KEnAi', 'Firefox', 3, true, true, 'http://jonmircha.github.io/slides-poo-js/img/kenai.jpg', false);
//var_dump($kenai);
echo '<h1>' . $kenai->nombre . '</h1>';
echo '<h2>' . $kenai->raza . '</h2>';
echo '<h3>' . $kenai->edad . '</h3>';
echo '<h4>' . $kenai->sexo . '</h4>';
echo '<h5>' . $kenai->adiestrado . '</h5>';
echo '<h6>' . $kenai->foto . '</h6>';


$kenai->ladrar();
$kenai->comer('croquetas');
$kenai->comer('tacos');
$kenai->aparecer();
$kenai->tiene_Pulgas();
$kenai->ladrar_y_comer();
$kenai->mas_Info();

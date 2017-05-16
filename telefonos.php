<?php
class Telefono
{
	/**
	*
	*/
	public $marca;
	public $modelo;
	protected $alambrico = true;
	protected $comunicacion;

	public function __construct($marca, $modelo)
	{
		$this->marca = $marca;
		$this->modelo = $modelo;
		$this->comunicacion = ($this->alambrico) ? 'Alambrico' :
		'Inalambrico' ;
	}

	public function llamar()
	{
		print('<p>Riniing Riniing !!! </p>');
	}

	public function mas_info()
	{
		return print('<ul>
		<li>Marca <b>' . $this->marca . '</b></li>
		<li>Modelo <b>' . $this->modelo . '</b></li>
		<li>Comunicación <b>' . $this->comunicacion . '</b></li>
		</ul>');
	}

}
class Celular extends Telefono
{

}

final class SmartPhone extends Celular
{

}

echo '<h1>Evolción del Telefono:</h1>';
echo '<h2>Telefono</h2>';
$tel_casa = new Telefono('Panasonic', '	KX-TS550');
$tel_casa->llamar();
$tel_casa->mas_info();

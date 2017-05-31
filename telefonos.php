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
        $this->comunicacion = ($this->alambrico) ? 'Alambrico' : 'Inalambrico';
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
    protected $alambrico = false;
    public function __construct($marca, $modelo)
    {
        parent:: __construct($marca, $modelo);
    }
}

final class SmartPhone extends Celular
{
    public $alambrico = false;
    public $internet = true;
    public function __construct($marca, $modelo)
    {
        parent::__construct($modelo, $marca);
    }
    public function mas_info()
    {
        return print('<ul>
		<li>Marca <b>' . $this->marca . '</b></li>
		<li>Modelo <b>' . $this->modelo . '</b></li>
		<li>Comunicación <b>' . $this->comunicacion . '</b></li>
		<li>Dispositivo con Acceso a Internet</li>
		</ul>');
    }
}

echo '<h1>Evolción del Telefono:</h1>';
echo '<h2>Telefono</h2>';
$tel_casa = new Telefono('Panasonic', '	KX-TS550');
$tel_casa->llamar();
$tel_casa->mas_info();

echo '<h1>Celular:</h1>';
$tel_cel = new Celular('Nokia', '5120');
$tel_cel->llamar();
$tel_cel->mas_info();

echo '<h2>SmartPhone:</h2>';
$mi_sp = new SmartPhone('Motorola', 'G3');
$mi_sp->llamar();
$mi_sp->mas_info();

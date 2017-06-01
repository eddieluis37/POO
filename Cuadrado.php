<?php
class Cuadrado extends Poligono
{
    private $lado;
   
    public function __construct($l)
    {
        $this->lados = 4;
        $this->lado = $l;
       
    }

    public function perimetro()
    {
        return $this->lados * $this->lado;
    }

    public function area()
    {
        return pow($this->lado, 2);
    }

    public function lados()
    {
        return 'Un <mark> ' . get_called_class() . '</mark> tiene <mark>'  . 
        $this->lados . '</mark> lados';
    }

}

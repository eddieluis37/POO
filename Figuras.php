<?php
require 'Poligono.php';
require 'Triangulo.php';
require 'Cuadrado.php';
require 'Rectangulo.php';
require 'Hexagono.php';

echo '
    <h1>Polígonos</h1>
    <p>Figura geometrica plana que esta limitada por tres o mas rectas y
    tiene tres o más ángulos y vértices.</p>

    <h2>Perimetro</h2>
    <p>El perimetro de un poligono es igual a la suma de las longitudes de sus lados.</p>

    <h2>el área de un poligono es la medida de la región o superfici encerrada por un poligono.</h2>

    <hr>

';

echo '
    <h3>Tríangulo</h3>
    <img src="http://bextlan.com/img/para-cursos/poo-triangulo.png">
';

$triangulo = new Triangulo(3, 6, 9, 10);
echo '<p>' . $triangulo->lados() . '</p>';
echo '<p>Perímetro del '. get_class($triangulo) . ': <mark>' . $triangulo->
perimetro() . '</mark></p>';

echo '<p>Área del '. get_class($triangulo) . ': <mark>' . $triangulo->
area() . '</mark></p>';

echo '<hr>';


echo '
    <h3>Cuadrado</h3>
    <img src="http://bextlan.com/img/para-cursos/poo-cuadrado.png">
';

$cuadrado = new Cuadrado(7);
echo '<p>' . $cuadrado->lados() . '</p>';
echo '<p>Perímetro del '. get_class($cuadrado) . ': <mark>' . $cuadrado->
perimetro() . '</mark></p>';

echo '<p>Área del '. get_class($cuadrado) . ': <mark>' . $cuadrado->
area() . '</mark></p>';

echo '<hr>';

echo '
    <h3>Rectangulo</h3>
    <img src="http://bextlan.com/img/para-cursos/poo-rectangulo.png">
';

$rectangulo = new Rectangulo(5, 6);
echo '<p>' . $rectangulo->lados() . '</p>';
echo '<p>Perímetro del '. get_class($rectangulo) . ': <mark>' . $rectangulo->
perimetro() . '</mark></p>';

echo '<p>Área del '. get_class($rectangulo) . ': <mark>' . $rectangulo->
area() . '</mark></p>';

echo '<hr>';
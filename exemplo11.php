<?php

class AreaCalc
{
    public static $pi = 3.141517;

    static function areaCircunferencia($raio)
    {
        return $raio * $raio * (AreaCalc::$pi);
    }
}

$raioAtual = 10;
$area = AreaCalc::areaCircunferencia($raioAtual);
$valor = AreaCalc::$pi;
echo "Área cincurnferência de raio $raioAtual é $area <br>";
echo "VAlor de pi $valorPi <br>";
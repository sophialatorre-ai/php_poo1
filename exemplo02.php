<?php 

function calcularDescontos($salario, $previdencia) {
    return number_format($salario*0.275 + $previdencia, 2, ',', ',');
}

$joaoNome = "João filho";
$joaoDescontos = calcularDescontos(1000, 100);

$mariaNome = "Maria Rute";
$mariaDescontos = calcularDescontos(2000, 200);

$joseNome = "José Salgado";
$joseDescontos = calcularDescontos(3000, 300);

echo "O valor do desconto de $joaoNome é de R$ $joaoDescontos. <br>";
echo "O valor do desconto de $mariaNome é de R$ $mariaDescontos. <br>";
echo "O valor do desconto de $joseNome é de R$ $joseDescontos. <br>";

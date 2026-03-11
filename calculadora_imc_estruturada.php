<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculadora de IMC - Estruturada</h1>

    <form action="calculadora_imc_estruturada.php" method="post">
        <label for="peso">Peso (kg):</label>
        <input type="number" id="peso" name="peso" step="0.01" required><br><br>

        <label for="altura">Altura (m):</label>
        <input type="number" id="altura" name="altura" step="0.01" required><br><br>

        <input type="submit" value="Calcular IMC">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];

        function calcularIMC($peso, $altura) {
            if ($altura <= 0) {
                throw new Exception("A altura deve ser maior que zero.");
            }
            return $peso / ($altura * $altura);
        }

        function classificarIMC($imc) {
            if ($imc < 18.5) {
                return "Abaixo do peso";
            } elseif ($imc >= 18.5 && $imc < 25) {
                return "Peso normal";
            } elseif ($imc >= 25 && $imc < 30) {
                return "Sobrepeso";
            } else {
                return "Obesidade";
            }
        }

        try {
            $imc = calcularIMC($peso, $altura);
            $classificacao = classificarIMC($imc);

            echo "<h2>Resultado</h2>";
            echo "Seu IMC é: " . number_format($imc, 2) . "<br>";
            echo "Classificação: " . $classificacao;
        } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    ?>
    

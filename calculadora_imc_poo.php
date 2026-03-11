<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora de IMC</h1>

    <form action="calculadora_imc_poo.php" method="post">
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

        class CalculadoraIMC {
            private $peso;
            private $altura;

            public function __construct($peso, $altura) {
                $this->peso = $peso;
                $this->altura = $altura;
            }

            public function calcularIMC() {
                if ($this->altura <= 0) {
                    throw new Exception("A altura deve ser maior que zero.");
                }
                return $this->peso / ($this->altura * $this->altura);
            }

            public function classificarIMC() {
                $imc = $this->calcularIMC();
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
        }

        try {
            $calculadora = new CalculadoraIMC($peso, $altura);
            $imc = $calculadora->calcularIMC();
            $classificacao = $calculadora->classificarIMC();

            echo "<h2>Resultado</h2>";
            echo "<p>Seu IMC é: " . round($imc, 2) . "</p>";
            echo "<p>Classificação: " . $classificacao . "</p>";
        } catch (Exception $e) {
            echo "<p>Erro: " . $e->getMessage() . "</p>";
        }
    }
    ?>
</body>
</html>
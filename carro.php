<?php
class Carro{
    // 🚩 RISCO: Atributo público permite valores ilegais
    private $modelo;
    private $velocidade;

    public function __construct($modelo, $velocidade)
    {
        $this->modelo = $modelo;
        $this->velocidade = $velocidade;
    }

    public function getVelocidade()
    {
        return $this->velocidade;
    }
    public function getCarro()
    {
        return $this->modelo;
    }

    public function SetVelo($novaVelocidade)
    {
        if($novaVelocidade >= 0 && $novaVelocidade <201){
            $this->velocidade = $novaVelocidade;

        }else{
            echo "ERRO: Velocímetro ultrapassou o limite de velocidade<br>";
        }
    }
}

// --- TESTE DO VEÍCULO ---
$meuCarro = new Carro("Senai-Mobile", 0);

// O desastre: alteração direta sem validação
$meuCarro->SetVelo(200); // Velocidade de foguete?


echo "Modelo: " . $meuCarro->getCarro(). "<br>";
echo "Velocidade atual: " . $meuCarro->getVelocidade(). " km/h";

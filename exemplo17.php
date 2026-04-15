<?php

class Visilidade {
    public $varPublic;
    protected $varProtected;
    private $varPrivate;

    public function __construct($varPublic, $varProtected, $varPrivate)
    {
        $this->varPublic = $varPublic;
        $this->varProtected = $varProtected;
        $this->varPrivate = $varPrivate;
    }

    public function publicFunc(){
        echo "Método Público<br>";
    }
    protected function protectedFunc(){
        echo "Método Protegido<br>";
    }
    private function privateFunc(){
        echo "Método Private<br>";
    }
}

$teste = new Visilidade(1,2,3);

echo "Atributo Public = $teste->varPublic";
// echo "Atributo Protected = $teste->varProtected";
// echo "Atributo Private= $teste->varPrivate";

echo "<br>";

$teste->publicFunc();
$teste->protectedFunc();
$teste->privateFunc();
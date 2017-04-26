<?php

class Auto {
    public $geschwindigkeit = 0;

    public function beschleunigen() {
        $this->geschwindigkeit +=5;
    }
}

class Rennauto extends Auto {
    public function turboAnschalten() {
        $this->geschwindigkeit +=10;
    }

    public function beschleunigen() {
        // parent::beschleunigen();
        $this->turboanschalten();
    }
}

$normalesAuto = new Auto();
$normalesAuto->beschleunigen();
echo "Normal: " . $normalesAuto->geschwindigkeit . "<br>";

$rennAuto = new Auto();
$rennAuto->beschleunigen();
echo "Renn: " . $rennAuto->geschwindigkeit . "<br>";
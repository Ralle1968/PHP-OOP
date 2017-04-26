<?php

class Auto {
    public $marke;

    public function __construct($marke = "Unbekannt") {
        $this->marke = $marke;
    }

    public function getMarke() {
        return $this->marke;
    }
}

$bmw = new Auto("BMW");
echo $bmw->getMarke() . "<br>";

$auto = new Auto();
echo $auto->getMarke() . "<br>";
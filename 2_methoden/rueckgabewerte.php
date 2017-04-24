<?php

class Rueckgabewerte {
    public function addieren($x, $y) {
        return ($x + $y);
    }
}

$meinObjekt = new Rueckgabewerte();
$summe = $meinObjekt->addieren(3, 12);
echo "3 + 12 = " . $summe;
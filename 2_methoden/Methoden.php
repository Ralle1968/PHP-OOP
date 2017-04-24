<?php

class Methoden {
    function addieren($x, $y) {
        echo "$x + $y = " . ($x + $y);
    }
}
$objekt = new Methoden();
$objekt->addieren(3, 17);
echo "<br>";
$objekt2 = new Methoden();
$objekt2->addieren(17, 4);
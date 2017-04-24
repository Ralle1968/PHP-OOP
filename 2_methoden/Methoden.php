<?php

class Methoden {
    function addieren() {
        echo "4 + 6 = " . (4 + 6);
    }
}
$objekt = new Methoden();
$objekt->addieren();
echo "<br>";
$objekt2 = new Methoden();
$objekt2->addieren();
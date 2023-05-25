<?php

// Aldi Cahya Ramadhani

function printNumbers($N) {
    $count = 0;
    $num = 3;
    while ($count < $N) {
        if ($num % 3 == 0 && $num % 7 == 0) {
            echo "Z, ";
            $count++;
        } elseif ($num % 3 == 0 || $num % 7 == 0) {
            echo $num . ", ";
            $count++;
        }
        $num++;
    }
}

// Contoh penggunaan fungsi
$jumlahBilangan = 13;
printNumbers($jumlahBilangan);

?>
<?php

// Aldi Cahya Ramadhani

function generatePattern($N) {
    if ($N % 2 == 0) {
        return "Harus bilangan ganjil";
    }

    $pattern = "";
    $middle = ($N + 1) / 2;

    for ($row = 1; $row <= $N; $row++) {
        for ($col = 1; $col <= $N; $col++) {
            if ($row == 1 || $row == $N || $col == 1 || $col == $N || $row == $col || $col == $N - $row + 1) {
                $pattern .= "X";
            } else {
                $pattern .= "O";
            }
        }
        $pattern .= "\n";
    }

    return $pattern;
}

// Contoh penggunaan fungsi
$N1 = 5;
$output1 = generatePattern($N1);
echo $output1 . "\n";

$N2 = 3;
$output2 = generatePattern($N2);
echo $output2 . "\n";

$N3 = 7;
$output3 = generatePattern($N3);
echo $output3 . "\n";

$N4 = 2;
$output4 = generatePattern($N4);
echo $output4 . "\n";

?>
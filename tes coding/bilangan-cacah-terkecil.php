<?php

// Aldi Cahya Ramadhani

function findMissingNumber($numbers) {
    $min = min($numbers);
    $max = max($numbers);

    for ($i = $min; $i <= $max; $i++) {
        if (!in_array($i, $numbers)) {
            return $i;
        }
    }

    return $max + 1;
}

// Contoh penggunaan fungsi
$input1 = [5, 2, 8, 4, 3, 10];
$output1 = findMissingNumber($input1);
echo $output1 . "\n";

$input2 = [2, 3, 4, 6];
$output2 = findMissingNumber($input2);
echo $output2 . "\n";

$input3 = [8, 6, 7, 12];
$output3 = findMissingNumber($input3);
echo $output3;


?>
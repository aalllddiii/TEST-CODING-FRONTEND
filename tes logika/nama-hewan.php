<?php

// Aldi Cahya Ramadhani

function searchWords($text) {
    $words = array("sang gajah", "serigala", "harimau");
    $output = "";

    foreach ($words as $word) {
        $count = substr_count(strtolower($text), strtolower($word));
        for ($i = 0; $i < $count; $i++) {
            $output .= $word . " - ";
        }
    }

    // Hapus tanda '-' di akhir output
    $output = rtrim($output, " - ");

    return $output;
}

// Contoh penggunaan fungsi
$input = "Berikut adalah kisah sang gajah. Sang gajah memiliki teman serigala bernama DoeSang. Gajah sering dibela oleh serigala ketika harimau mendekati gajah.";
$output = searchWords($input);
echo $output;

?>
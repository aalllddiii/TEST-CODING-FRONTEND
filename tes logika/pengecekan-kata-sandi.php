<?php

// Aldi Cahya Ramadhani

function checkPassword($password) {
    $length = strlen($password);

    // Pengecekan panjang kata sandi
    if ($length < 8 || $length > 32) {
        return "Kata sandi harus terdiri dari 8 hingga 32 karakter";
    }

    // Pengecekan karakter awal
    if (ctype_digit($password[0])) {
        return "Karakter awal tidak boleh berupa angka";
    }

    // Pengecekan keberadaan angka
    if (!preg_match('/[0-9]/', $password)) {
        return "Kata sandi harus mengandung minimal satu angka";
    }

    // Pengecekan keberadaan huruf kapital dan huruf kecil
    if (!preg_match('/[a-z]/', $password) || !preg_match('/[A-Z]/', $password)) {
        return "Kata sandi harus mengandung huruf kapital dan huruf kecil";
    }

    // Kata sandi valid
    return "Kata sandi valid";
}

// Contoh penggunaan fungsi
$password1 = "5andiwara";
$result1 = checkPassword($password1);
echo $result1 . "\n";

$password2 = "sandiwar4";
$result2 = checkPassword($password2);
echo $result2 . "\n";

$password3 = "Sandiwar4";
$result3 = checkPassword($password3);
echo $result3;

?>
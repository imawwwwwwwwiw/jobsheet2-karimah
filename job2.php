<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>CEK ANGKA GANJIL GENAP</h2>
<?php
// Fungsi untuk menentukan apakah sebuah bilangan ganjil atau genap
function cekGanjilGenap($angka) {
    if ($angka % 2 == 0) {
        return "genap";
    } else {
        return "ganjil";
    }
}

// Fungsi untuk menampilkan deret bilangan ganjil atau genap hingga batas tertentu
function tampilkanDeret($batas) {
    echo "Deret bilangan ganjil:\n <br> ";
    for ($i = 1; $i <= $batas; $i++) {
        if (cekGanjilGenap($i) == "ganjil") {
            echo $i . " ";
        }
    }

    echo " <br> \n\nDeret bilangan genap: \n <br>";
    for ($i = 1; $i <= $batas; $i++) {
        if (cekGanjilGenap($i) == "genap") {
            echo $i . " ";
        }
    }
}

// Contoh penggunaan
$batasDeret = 99;

echo "Cek apakah bilangan $batasDeret ganjil atau genap:<br>";
if (cekGanjilGenap($batasDeret) == "ganjil") {
    echo "$batasDeret adalah bilangan ganjil \n <br> ";
} else {
    echo "$batasDeret adalah bilangan genap \n <br>";
}

tampilkanDeret($batasDeret);

?>


</body>
</html>
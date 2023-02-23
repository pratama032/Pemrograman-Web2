<?php 
// ini sebuah komentar
/* ini juga sebuah komentar */
# ini komentar pake kres

//  echo "Hello World <br>";
//  echo 'Hello World <br>';
//  print_r("Putra Rafly Pratama <br>");
//  var_dump("STT Nurul Fikri");

// Membuat Variable User
$nama = "Putra Rafly Pratama";
$umur = 18;
$berat = 70.2;
$mahasiswa= true;

// echo "Nama saya adalah $nama <br>";
// echo "Umur saya $umur <br>";
// echo "Berat badan saya mencapai $berat kg";

// Membuat Variable Sistem
// echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
// echo "<br>";
// echo 'Nama File '.$_SERVER["PHP_SELF"];

// Membuat Variable Konstanta 
define('PHI',3.14);
$jari = 10;
$luas = PHI * $jari *$jari;
$keliling = 2 * PHI * $jari;

// echo "Luas lingkaran dengan jari-jari $jari = $luas <br>";
// echo "Keliling lingkaran $luas = $keliling";

// Membuat Array
$programs = ["PHP","Javascript","HTML","CSS"];
// echo $programs[0];
// echo "Jumlah data variabel program sebanyak " .count($programs);
foreach($programs as $program){
    echo "Bahasa $program <br>";
}
?>
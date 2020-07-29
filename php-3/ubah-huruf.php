<?php
function ubah_huruf($string){
//kode di sini
// pcode
// kita buat manual dulu perpustakaan abjad alphabet
// loop per karakter pada parameter string
// tampung ke variabel penampung: karakter pada posisi $i+1 di alphabet
// return penampung
$huruf = "abcdefghijklmnopqrstuvwxyz";
$output = "";
for($i=0; $i < strlen($string); $i++){
    $position = strpos($huruf, $string[$i]);
    $output .= substr($huruf, $position+1, 1);
}
return $output;
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo "<br>" . ubah_huruf('developer'); // efwfmpqfs
echo "<br>" . ubah_huruf('laravel'); // mbsbwfm
echo "<br>" . ubah_huruf('keren'); // lfsfo
echo "<br>" . ubah_huruf('semangat'); // tfnbohbu

?>
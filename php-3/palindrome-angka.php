<?php

function palindrome($str) {
  // tulis kode di sini
  $output = false;
  if(strrev($str) == $str){
    $output = true;
  }
  return $output;
}

function palindrome_angka($angka){
  if($angka >= 1 && $angka <=8){
    return $angka+1;
  }
  if(palindrome($angka)){
    return $angka++;
  }
  while(palindrome($angka) == false){
    $angka++;
  }
  return $angka++;
}
// TEST CASES
echo palindrome_angka(8); // 9
echo "<br>" . palindrome_angka(10); // 11
echo "<br>" . palindrome_angka(117); // 121
echo "<br>" . palindrome_angka(175); // 181
echo "<br>" . palindrome_angka(1000); // 1001

?>
<?php 
// Lt. 1 tersedia 5 buah loker, nomor 1-5
// Lt. 2 tersedia 6 buah loker, nomor 6-11
// Lt. 3 tersedia 7 buah loker, nomor 12-18
// Lt. 4 tersedia 5 buah loker, nomor 19-23
// Lt. 5 tersedia 6 buah loker, nomor 24-29
// Lt. 6 tersedia 7 buah loker, nomor 30-36
// Dan seterusnya...
// Buat sebuah fungsi yang menerima parameter nomor loker, dan mengembalikan angka lantai
function getLantai($loker){
$totalLoker = 0;
$lantai = 1;

while ($loker > $totalLoker){
    $jmlLoker = 5 + (($lantai - 1) % 3);
    $totalLoker += $jmlLoker;
    $lantai++;
      }
    
    return $lantai - 1;
    }
  
    $loker = 1000;
    $lantai = getLantai($loker);
    echo $lantai;
?>
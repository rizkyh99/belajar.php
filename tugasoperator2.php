<?php

$saldoawal = 1000000;
$bunga = 0.03; 
$bulan = 11;


$saldoakhir = $saldoawal + (1 + $bunga)* $bulan;
 
echo "Saldo akhir setelah " . $bulan . " bulan adalah: Rp " . $saldoakhir . ",-";

?>
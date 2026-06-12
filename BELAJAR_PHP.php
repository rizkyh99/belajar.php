<?php

function hitungtotal($harga, $jumlah) {
    $total = $harga * $jumlah;
    return $total;

}
function berikandiskon($total, $diskon){
$harga_barang = 100;
$jumlah_barang = 5;
$diskon_persen = 0.1; //10% diskon

$total_harga = hitungtotal($harga_barang, $jumlah_barang);
$total_setelah_diskon = berikandiskon($total_harga, $diskon_persen);

echo "total belanja: $total_harga";
echo "total setelah diskon: $total_setelah_diskon";

}



?>





<?php
$siswa = array ("nama" => "anita", "usia" => 19, "kelas" => "XII");

echo "nama" . $siswa["nama"] . "<br/>";
echo "usia" . $siswa["usia"] . " tahun <br/>";
echo "kelas" . $siswa["kelas"];

"<br/>";

$buah = array("apel", "kesemek", "sirsak", "anggur");

foreach ($buah as $item){
    echo "buah: " . $item ."<br/>";
}
?>
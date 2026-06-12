<?php




$nilai1 = 17;
$nilai2 = 3;

$samadengan = $nilai1 == $nilai2;
$tidaksamadengan = $nilai1 != $nilai2;
$kurangdari = $nilai1 < $nilai2;
$lebihdari = $nilai1 > $nilai2;
$kurangdariatausamadengan = $nilai1 <= $nilai2;
$lebihdariatausamadengan = $nilai1 >= $nilai2;

echo "sama dengan" . $samadengan;
echo "tidak sama dengan" . $tidaksamadengan;
echo "kurang dari" . $kurangdari;
echo "lebih dari" . $lebihdari;
echo "kurang dari atau sama dengan" . $kurangdariatausamadengan;
echo "lebih dari atau sama dengan" . $lebihdariatausamadengan;

?>




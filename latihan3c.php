<!DOCTYPE html>
<html lang="en">

<?php
function pangkat($angka, $pangkat) {
    $a = $angka;
    $b = $pangkat;
    $hasil = pow ($a, $b);
    return $hasil;
}  
$hasil = pangkat (5,4);
echo "5 pangkat 4 =$hasil";

?>
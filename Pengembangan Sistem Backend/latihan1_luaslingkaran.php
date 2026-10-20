<?php

function hitungLuasLingkaran($jari) {
    return 3.14 * $jari * $jari;
}

$jari = 7;
$luas = hitungLuasLingkaran($jari); 


echo "Luas lingkaran dengan jari-jari $jari adalah $luas";
?>
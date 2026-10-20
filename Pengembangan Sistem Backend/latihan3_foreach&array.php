<?php
// Array berisi 5 nama mahasiswa
$mahasiswa = ["Andi", "Budi", "Citra", "Dika", "Eka"];

$no = 1; // variabel penghitung nomor urut


foreach ($mahasiswa as $nama) {
    echo "$no. $nama <br>";
    $no++; // nomor urut naik 1 setiap putaran
}
?>
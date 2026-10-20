<?php
$angka = range(1, 20);

echo "Angka yang habis dibagi 3: <br>";


foreach ($angka as $n) {
    
    if ($n % 3 == 0) {
        echo $n . " ";
    }
}
?>
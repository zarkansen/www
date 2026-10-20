<?php
// Perulangan for dari 1 sampai 10
for ($i = 1; $i <= 10; $i++) {
    // Bilangan genap jika sisa bagi 2 sama dengan 0
    if ($i % 2 == 0) {
        echo "$i = Genap <br>";
    } else {
        echo "$i = Ganjil <br>";
    }
}
?>
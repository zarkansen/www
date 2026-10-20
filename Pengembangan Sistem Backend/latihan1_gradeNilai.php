<?php
$nilai = 85; 


if ($nilai >= 90) {
    $grade = "A";
} elseif ($nilai >= 80) {   // 80-89
    $grade = "B";
} elseif ($nilai >= 70) {   // 70-79
    $grade = "C";
} elseif ($nilai >= 60) {   // 60-69
    $grade = "D";
} else {                    // di bawah 60
    $grade = "E";
}

echo "Nilai: $nilai <br>";
echo "Grade: $grade";
?>
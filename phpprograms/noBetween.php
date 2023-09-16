<?php
$start = 100;
$end = 200;
$sum = 0;

echo "Numbers between $start and $end, divisible by 9:\n";

for ($i = $start; $i <= $end; $i++) {
    if ($i % 9 === 0) {
        echo "$i ";
        $sum += $i;
    }
}

echo "\nSum of the numbers: $sum\n";
?>

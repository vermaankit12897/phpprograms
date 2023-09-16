<?php
// Read the value of n from user input
$n = readline("Enter the number of terms: ");

// Initialize variables for sum
$sum = 0;

// Display the first n natural numbers and calculate their sum
echo "The first $n natural numbers are:";

for ($i = 1; $i <= $n; $i++) {
    echo " $i";
    $sum += $i;
}

echo "\nThe Sum of Natural Numbers up to $n terms: $sum\n";
?>

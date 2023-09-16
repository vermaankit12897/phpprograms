<?php
// Read the value of x and the number of terms from user input
echo "Input the Value of x: ";
$x = readline();
echo "Input the number of terms: ";
$terms = readline();

// Initialize variables for sum and factorial
$sum = 1; // The first term is always 1
$termValue = 1;
$sign = -1;

// Calculate the sum of the series
for ($i = 1; $i < $terms; $i++) {
    $termValue *= $x * $x / ((2 * $i) * (2 * $i + 1));
    $sign = -$sign; // Alternate the sign
    $sum += $sign * $termValue;
}

// Display the result
echo "The sum = " . number_format($sum, 6) . "\n";
echo "Number of terms = $terms\n";
echo "Value of x = " . number_format($x, 6) . "\n";
?>

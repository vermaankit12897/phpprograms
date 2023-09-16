<?php
// Read the number of terms from user input
echo "Input the number of terms: ";
$terms = readline();

// Initialize variables for the sum and the series
$sum = 0;
$series = "";

// Calculate the sum and build the series
for ($i = 1; $i <= $terms; $i++) {
    $term = 1 / $i; // Calculate the current term (1 divided by the current term number)
    $sum += $term; // Add the current term to the running sum
    $series .= "1/$i"; // Build the series by concatenating the current term

    if ($i != $terms) {
        $series .= " + "; // Add a "+" sign if it's not the last term
    }
}

// Display the series and the sum
echo "$series\n"; // Display the harmonic series
echo "Sum of Series up to $terms terms: " . number_format($sum, 6) . "\n"; // Display the sum, formatted to six decimal places
?>

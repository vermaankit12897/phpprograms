<!-- find the sum of the series [x - x^3 + x^5 + ...] as follows:

php
Copy code -->
<?php
// Read the value of x and the number of terms from user input
echo "Input the value of x: ";
$x = readline();
echo "Input number of terms: ";
$terms = readline();

// Initialize variables for the sum and the series
$sum = 0;
$term = $x;
$sign = 1;

// Calculate the sum and display the series
echo "The values of the series:\n";
for ($i = 1; $i <= $terms; $i++) {
    echo $term . "\n"; // Display the current term
    $sum += $term;
    $term *= -1 * $x * $x; // Calculate the next term by multiplying with -x^2 and changing the sign
}

// Display the sum
echo "The sum = " . $sum . "\n";
?>
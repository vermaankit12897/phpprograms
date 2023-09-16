<?php
// Initialize variables for sum and count
$sum = 0;
$count = 10;

// Read 10 numbers from the user
echo "Input the 10 numbers:\n";
for ($i = 1; $i <= $count; $i++) {
    $input = readline("Number-$i: ");
    $number = (float)$input; // Convert input to a floating-point number
    $sum += $number;
}

// Calculate the average
$average = $sum / $count;

// Display the sum and average
echo "The sum of $count numbers is: $sum\n";
echo "The Average is: " . number_format($average, 6) . "\n"; // Format the average to 6 decimal places
?>

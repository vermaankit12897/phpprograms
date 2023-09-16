<?php
// Read the starting and ending range from user input
echo "Input the starting range or number: ";
$start = intval(readline());
echo "Input the ending range of number: ";
$end = intval(readline());

// Initialize an array to store perfect numbers
$perfectNumbers = [];

// Loop through the range and check for perfect numbers
for ($number = $start; $number <= $end; $number++) {
    $sum = 0;

    // Find divisors and calculate the sum of divisors
    for ($divisor = 1; $divisor <= $number / 2; $divisor++) {
        if ($number % $divisor === 0) {
            $sum += $divisor;
        }
    }

    // Check if the number is perfect and add it to the array
    if ($sum === $number) {
        $perfectNumbers[] = $number;
    }
}

// Display the perfect numbers
if (!empty($perfectNumbers)) {
    echo "The Perfect numbers within the given range: " . implode(' ', $perfectNumbers) . "\n";
} else {
    echo "No Perfect numbers within the given range.\n";
}
?>

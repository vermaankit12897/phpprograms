<?php
// Read the number from user input
echo "Input a number: ";
$number = readline();

// Initialize variables for the sum of cubes and the original number
$sumOfCubes = 0;
$originalNumber = $number;

// Calculate the sum of cubes of digits
while ($number > 0) {
    $digit = $number % 10; // Extract the last digit
    $sumOfCubes += pow($digit, 3); // Cube the digit and add to the sum
    $number = (int)($number / 10); // Remove the last digit
}

// Check if it's an Armstrong number
if ($sumOfCubes === $originalNumber) {
    echo "$originalNumber is an Armstrong number\n";
} else {
    echo "$originalNumber is not an Armstrong number\n";
}
?>

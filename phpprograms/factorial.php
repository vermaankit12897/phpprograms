<?php
// Read the number from user input
echo "Input the number: ";
$number = readline();

// Check if the input is a valid non-negative integer
if (!ctype_digit($number) || $number < 0) {
    echo "Invalid input. Please enter a non-negative integer.\n";
} else {
    // Initialize the factorial to 1
    $factorial = 1;

    // Calculate the factorial
    for ($i = 1; $i <= $number; $i++) {
        $factorial *= $i;
    }

    // Display the result
    echo "The Factorial of $number is: $factorial\n";
}
?>

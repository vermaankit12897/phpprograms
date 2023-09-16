<?php
// Ask the user for the number 'n' for the multiplication table
echo "Enter a number 'n' to generate the multiplication table from 1 to 'n': ";
$n = readline();

// Check if the input is a valid positive integer
if (!ctype_digit($n) || $n < 1) {
    echo "Invalid input. Please enter a positive integer.\n";
} else {
    // Display the multiplication table
    echo "Multiplication table from 1 to $n:\n";

    // Loop through the multipliers from 1 to 10
    for ($multiplier = 1; $multiplier <= 10; $multiplier++) {
        // Loop through the numbers from 1 to 'n'
        for ($number = 1; $number <= $n; $number++) {
            $result = $number * $multiplier;
            echo "$number x $multiplier = $result";
            if ($number != $n) {
                echo ", ";
            } else {
                echo "\n";
            }
        }
    }
}
?>

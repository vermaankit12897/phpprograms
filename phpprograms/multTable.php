<?php
// Read the number for the multiplication table from the user
$number = readline("Input the number (Table to be calculated): ");

// Check if the input is a valid positive integer
// ctype_digit: This is a PHP function used to check the type of characters in a string.
if (!ctype_digit($number) || $number < 1) {
    echo "Invalid input. Please enter a positive integer.\n";
} else {
    // Display the multiplication table
    echo "Multiplication table for $number:\n";
    for ($i = 1; $i <= 10; $i++) {
        $result = $number * $i;
        echo "$number X $i = $result\n";
    }
}
?>

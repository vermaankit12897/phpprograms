<?php
// Read the number from user input
echo "Input a number: ";
$number = readline();

// Initialize a variable to store the reversed number
$reverse = "";

// Convert the number to a string
$numberStr = (string)$number;

// Reverse the number by iterating through its characters
for ($i = strlen($numberStr) - 1; $i >= 0; $i--) {
    $reverse .= $numberStr[$i];
}

// Display the reversed number
echo "The number in reverse order is: $reverse\n";
?>

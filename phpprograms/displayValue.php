<!-- Write a php program to read the value of an integer m and display the value of n is 1 when m is larger than 0, 0 when m is 0 and -1 when m is less than 0.
Test Data : -5
ChatGPT
Certainly! Here's a PHP program that reads the value of an integer m and displays the value of n based on the conditions you specified:

php
Copy code -->
<?php
// Read the value of an integer m
$m = -5;

// Initialize the variable n
$n = 0;

// Check the value of m and set n accordingly
if ($m > 0) {
    $n = 1;
} elseif ($m < 0) {
    $n = -1;
}

// Display the value of n
echo "The value of n = $n";
?>
<!-- In this program:

We read the value of the integer m, which is initially set to -5 in this example.

We initialize the variable n to 0.

We use an if statement to check the value of m. If m is greater than 0, we set n to 1. If m is less than 0, we set n to -1.

Finally, we display the value of n based on the conditions, and the output will be "The value of n = -1" for the provided test data (-5). -->
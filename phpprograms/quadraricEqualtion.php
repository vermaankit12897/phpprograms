 <!-- Certainly! Here's a PHP program to calculate the roots of a quadratic equation, and it will handle cases where the roots are imaginary: -->

<?php
// Coefficients of the quadratic equation: ax^2 + bx + c = 0
$a = 1;
$b = 5;
$c = 7;

// Calculate the discriminant
$discriminant = $b * $b - 4 * $a * $c;

// Initialize variables for roots
$root1 = null;
$root2 = null;

// Check the value of the discriminant
if ($discriminant > 0) {
    // Real and distinct roots
    $root1 = (-$b + sqrt($discriminant)) / (2 * $a);
    $root2 = (-$b - sqrt($discriminant)) / (2 * $a);
} elseif ($discriminant == 0) {
    // Real and equal roots
    $root1 = -$b / (2 * $a);
} else {
    // Imaginary roots
    echo "Roots are imaginary; No solution.";
    exit; // Exit the program as there are no real roots
}

// Display the roots
if ($root1 !== null) {
    echo "Root 1: $root1<br>";
}
if ($root2 !== null) {
    echo "Root 2: $root2";
}
?>
<!-- In this program:

We define the coefficients a, b, and c of the quadratic equation.

We calculate the discriminant using the formula: discriminant = b^2 - 4ac.

We initialize variables $root1 and $root2 to store the roots. These variables are initially set to null.

We check the value of the discriminant to determine the type of roots:

If the discriminant is greater than 0, there are real and distinct roots.
If the discriminant is equal to 0, there are real and equal roots.
If the discriminant is less than 0, there are imaginary roots, and we output "Roots are imaginary; No solution."
If there are real roots (either distinct or equal), we calculate and store them in $root1 and $root2.

Finally, we display the roots if they are real. If both roots are real, both values will be displayed; otherwise, only the real root will be displayed.

For the provided test data (coefficients a = 1, b = 5, and c = 7), the program will output: "Roots are imaginary; No solution." -->
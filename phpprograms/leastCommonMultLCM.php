<?php
// Function to find the GCD (Greatest Common Divisor) using Euclidean algorithm
function findGCD($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

// Function to find the LCM using the GCD
function findLCM($num1, $num2) {
    $gcd = findGCD($num1, $num2);
    $lcm = ($num1 * $num2) / $gcd;
    return $lcm;
}

// Input
echo "Input 1st number for LCM: ";
$firstNumber = (int)readline();

echo "Input 2nd number for LCM: ";
$secondNumber = (int)readline();

// Find LCM
$lcm = findLCM($firstNumber, $secondNumber);

// Output
echo "The LCM of $firstNumber and $secondNumber is: $lcm\n";
?>

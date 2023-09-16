<?php
// Function to check if a number is a palindrome
function isPalindrome($number) {
    $originalNumber = $number;
    $reverse = 0;

    while ($number > 0) {
        $digit = $number % 10;
        $reverse = $reverse * 10 + $digit;
        $number = (int)($number / 10);
    }

    if ($originalNumber == $reverse) {
        return true;
    } else {
        return false;
    }
}

// Input
echo "Input a number: ";
$number = (int)readline();

// Check if it's a palindrome
if (isPalindrome($number)) {
    echo "$number is a palindrome number.\n";
} else {
    echo "$number is not a palindrome number.\n";
}
?>

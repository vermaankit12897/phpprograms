<?php
// Define the year you want to check for leap year
$year = 2024;

// Check if the year is divisible by 4
if ($year % 4 == 0) {
    // If divisible by 4, it's a potential leap year.

    // Check if the year is not divisible by 100 (or divisible by 100 with no remainder)
    // Note: Years divisible by 100 but not by 400 are not leap years.
    if ($year % 100 != 0) {
        // If not divisible by 100, it's a leap year.
        echo "$year is a leap year.";
    } else {
        // If divisible by 100 but not by 400, it's not a leap year.
        echo "$year is not a leap year.";
    }
} else {
    // If not divisible by 4, it's not a leap year.
    echo "$year is not a leap year.";
}
?>

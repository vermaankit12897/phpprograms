<?php
// Define the number of rows for the triangle
$rows = 4;

// Loop through each row
for ($i = 1; $i <= $rows; $i++) {
    // Loop to print numbers from 1 to the current row number
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "\n";
}
?>

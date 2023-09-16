<?php
// Function to count uppercase, lowercase, and other characters
function countCharacters($input) {
    $uppercaseCount = 0;
    $lowercaseCount = 0;
    $otherCount = 0;

    for ($i = 0; $i < strlen($input); $i++) {
        $char = $input[$i];
        
        if (ctype_upper($char)) {
            $uppercaseCount++;
        } elseif (ctype_lower($char)) {
            $lowercaseCount++;
        } else {
            $otherCount++;
        }
    }

    echo "Input characters: $input\n";
    echo "Uppercase letters: $uppercaseCount\n";
    echo "Lowercase letters: $lowercaseCount\n";
    echo "Other characters: $otherCount\n";
}

// Input
echo "Input characters: ";
$input = readline();

// Call the function to count characters
countCharacters($input);
?>

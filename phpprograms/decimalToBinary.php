<?php
// Function to convert decimal to binary
function decimalToBinary($decimal) {
    $binary = "";
    
    // Loop until the decimal number becomes 0
    while ($decimal > 0) {
        // Find the remainder when dividing by 2
        $remainder = $decimal % 2;
        
        // Add the remainder to the beginning of the binary string
        $binary = $remainder . $binary;
        
        // Integer division by 2 to move to the next bit
        $decimal = (int)($decimal / 2);
    }
    
    // Pad with zeros to make it 32 bits (assuming 32-bit integers)
    $binary = str_pad($binary, 32, "0", STR_PAD_LEFT);
    
    return $binary;
}

// Input
echo "Input a decimal number: ";
$decimal = (int)readline();

// Convert to binary
$binary = decimalToBinary($decimal);

// Output
echo "Binary number equivalent to the decimal number is: $binary\n";
?>

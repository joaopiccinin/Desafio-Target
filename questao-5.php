<?php
function reverseString($string) {
    $reversed = '';
    $length = strlen($string);

    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $string[$i];
    }

    return $reversed;
}

$inputString = "Exemplo de string";

$reversedString = reverseString($inputString);
echo "Original: $inputString\n";
echo "Reversed: $reversedString\n";
?>

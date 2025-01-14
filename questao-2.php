<?php
function isFibonacci(int $number): bool {
    $a = 0;
    $b = 1;

    if ($number == $a || $number == $b) {
        return true;
    }

    while ($b < $number) {
        $temp = $b;
        $b = $a + $b;
        $a = $temp;
    }

    return $b == $number;
}

$number = 21;

if (isFibonacci($number)) {
    echo "The number $number belongs to the Fibonacci sequence.";
} else {
    echo "The number $number does not belong to the Fibonacci sequence.";
}
?>

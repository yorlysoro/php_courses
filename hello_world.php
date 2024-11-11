<?php
echo "Hello World\n";

function calculator($a, $b, $operator) {
    switch ($operator) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            return $a / $b;
        default:
            return "Invalid operator";
    }
}

echo calculator(1, 2, '+') . "\n";
echo calculator(1, 2, '-') . "\n";
echo calculator(1, 2, '*') . "\n";
echo calculator(1, 2, '/') . "\n";
echo calculator(1, 2, '%') . "\n";


?>

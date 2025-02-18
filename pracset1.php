<?php

function calculateTotalPrice(array $items): float {
    $total = 0;
    foreach ($items as $item) {
        $total += $item['price'];
    }
    return $total;
}

$items = [
    ['name' => 'Widget A', 'price' => 10],
    ['name' => 'Widget B', 'price' => 15],
    ['name' => 'Widget C', 'price' => 20],
];

$totalPrice = calculateTotalPrice($items);
echo "Total price: $" . $totalPrice;

function formatString(string $inputString): string {
    $inputString = str_replace(' ', '', $inputString);
    return strtolower($inputString);
}

$string = "This is a poorly written program with little structure and readability.";
$modifiedString = formatString($string);
echo "\nModified string: " . $modifiedString;

function checkEvenOrOdd(int $number): string {
    return ($number % 2 === 0) ? "The number $number is even." : "The number $number is odd.";
}

$number = 42;
echo "\n" . checkEvenOrOdd($number);
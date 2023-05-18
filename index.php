<?php

$primeNumbers = array();
function isPrime($number) {
    if ($number <= 1) return false;
    if ($number == 2) return true;
    if ($number % 2 == 0) return false;
    for ($i = 3; $i <= sqrt($number); $i += 2) {
        if ($number % $i == 0) return false;
    }
    return true;
}

$number = 2;
while (count($primeNumbers) < 1000) {
    if (isPrime($number)) {
        array_push($primeNumbers, $number);
    }
    $number++;
}

$product = "1";
foreach ($primeNumbers as $prime) {
    $product = bcmul($product, (string)$prime);
}

echo "Добуток перших 1000 простих чисел: " . $product;





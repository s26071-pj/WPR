<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rozdział 9 zadanie 2</title>
</head>
<body>
<?php


function factorialRecursive($n) {
    if ($n === 0) {
        return 1;
    } else {
        return $n * factorialRecursive($n - 1);
    }
}


function factorialIterative($n) {
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}


function fibonacciRecursive($n) {
    if ($n <= 1) {
        return $n;
    } else {
        return fibonacciRecursive($n - 1) + fibonacciRecursive($n - 2);
    }
}


function fibonacciIterative($n) {
    $first = 0;
    $second = 1;
    if ($n === 0) {
        return $first;
    } elseif ($n === 1) {
        return $second;
    } else {
        for ($i = 2; $i <= $n; $i++) {
            $next = $first + $second;
            $first = $second;
            $second = $next;
        }
        return $second;
    }
}

function measureTime($function, $argument) {
    $start = microtime(true);
    $result = $function($argument);
    $end = microtime(true);
    $time = $end - $start;
    return [$result, $time];
}

$argument = 10;

// Liczenie silni rekurencyjnie
[$resultRecursive, $timeRecursive] = measureTime('factorialRecursive', $argument);
echo "Silnia rekurencyjnie: $resultRecursive, Czas wykonania: $timeRecursive sekundy\n";

// Liczenie silni nierekurencyjnie
[$resultIterative, $timeIterative] = measureTime('factorialIterative', $argument);
echo "Silnia nierekurencyjnie: $resultIterative, Czas wykonania: $timeIterative sekundy\n";

// Liczenie ciągu Fibonacciego rekurencyjnie
[$resultRecursive, $timeRecursive] = measureTime('fibonacciRecursive', $argument);
echo "Ciąg Fibonacciego rekurencyjnie: $resultRecursive, Czas wykonania: $timeRecursive sekundy\n";

// Liczenie ciągu Fibonacciego nierekurencyjnie
[$resultIterative, $timeIterative] = measureTime('fibonacciIterative', $argument);
echo "Ciąg Fibonacciego nierekurencyjnie: $resultIterative, Czas wykonania: $timeIterative sekundy\n";

?>
</body>
</html>
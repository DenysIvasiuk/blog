<?php

echo "<h1>Lab 2 - Arrays in PHP</h1>";

echo "<hr>";

// 1
echo "<h3>1. Product of array</h3>";
$input = "1,2,3,4,5";
$arr = explode(",", $input);

$product = 1;
foreach ($arr as $n) {
    $product *= (int)$n;
}

echo "<p>$product</p>";

// 2
echo "<h3>2. Perfect numbers</h3>";

function isPerfect($n) {
    $sum = 0;
    for ($i = 1; $i < $n; $i++) {
        if ($n % $i == 0) $sum += $i;
    }
    return $sum == $n;
}

$arr2 = [];
for ($i = 0; $i < 15; $i++) {
    $arr2[] = rand(1, 1000);
}

$perfect = [];

foreach ($arr2 as $n) {
    if (isPerfect($n)) {
        $perfect[] = $n;
    }
}

echo "<p>" . (!empty($perfect) ? implode(", ", $perfect) : "None") . "</p>";

// 3
echo "<h3>3. Count zeros</h3>";

$arr3 = [0,1,0,5,0,3];

$countZero = 0;
foreach ($arr3 as $n) {
    if ((int)$n == 0) $countZero++;
}

echo "<p>$countZero</p>";

// 4
echo "<h3>4. Sum squares of odd</h3>";

$arr4 = [];
for ($i = 0; $i < 20; $i++) {
    $arr4[] = rand(1, 50);
}

$sumOdd = 0;

foreach ($arr4 as $n) {
    if ($n % 2 != 0) {
        $sumOdd += $n * $n;
    }
}

echo "<p>$sumOdd</p>";

// 5
echo "<h3>5. Swap first and last</h3>";

$arr5 = [1,2,3,4,5,6,7,8];

$temp = $arr5[0];
$arr5[0] = $arr5[count($arr5)-1];
$arr5[count($arr5)-1] = $temp;

echo "<p>" . implode(", ", $arr5) . "</p>";

// 6
echo "<h3>6. Average positive</h3>";

$arr6 = [];
for ($i = 0; $i < 10; $i++) {
    $arr6[] = rand(-50, 50);
}

$sumPos = 0;
$countPos = 0;

foreach ($arr6 as $n) {
    if ($n > 0) {
        $sumPos += $n;
        $countPos++;
    }
}

$avg = $countPos ? round($sumPos / $countPos, 2) : 0;

echo "<p>$avg</p>";

// 7
echo "<h3>7. Email format</h3>";

$name = "Гарбузюк Олег";
$name = mb_strtolower($name);

$parts = explode(" ", $name);

$email = $parts[0] . "." . $parts[1] . "@example.com";

echo "<p>$email</p>";

// 8
echo "<h3>8. Divisible by 400</h3>";

$year = 1600;

echo "<p>" . ($year % 400 == 0 ? "Yes" : "No") . "</p>";

// 9
echo "<h3>9. Index task</h3>";

$arr9 = [];
for ($i = 0; $i < 10; $i++) {
    $arr9[] = rand(0, 100);
}

$product2 = 1;
$oddValues = [];

for ($i = 0; $i < count($arr9); $i++) {
    if ($i % 2 == 0 && $arr9[$i] > 0) {
        $product2 *= $arr9[$i];
    }

    if ($i % 2 != 0 && $arr9[$i] > 0) {
        $oddValues[] = $arr9[$i];
    }
}

echo "<p>Odd index values: " . implode(", ", $oddValues) . "</p>";
echo "<p>Product: $product2</p>";

// 10
echo "<h3>10. Leap year</h3>";

$year = 2024;

$isLeap = ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0);

echo "<p>" . ($isLeap ? "Yes" : "No") . "</p>";

?>

<?php

echo "<h2>Lab 2 - Arrays</h2>";

// 1. Добуток масиву
$arr1 = [2, 3, 4, 5];
$product = 1;
foreach ($arr1 as $num) {
    $product *= $num;
}
echo "1. Product: $product <br>";

// 2. Досконалі числа
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

echo "2. Perfect numbers: ";
foreach ($arr2 as $num) {
    if (isPerfect($num)) echo $num . " ";
}
echo "<br>";

// 3. Нулі
$arr3 = [0, 2, 0, 5, 0, 7];
$countZero = 0;
foreach ($arr3 as $num) {
    if ($num == 0) $countZero++;
}
echo "3. Zeros: $countZero <br>";

// 4. Сума квадратів непарних
$arr4 = [];
for ($i = 0; $i < 20; $i++) {
    $arr4[] = rand(1, 50);
}

$sum = 0;
foreach ($arr4 as $num) {
    if ($num % 2 != 0) $sum += $num * $num;
}
echo "4. Sum squares odd: $sum <br>";

// 5. swap first last
$arr5 = [1, 2, 3, 4, 5, 6, 7, 8];
$temp = $arr5[0];
$arr5[0] = $arr5[count($arr5)-1];
$arr5[count($arr5)-1] = $temp;
echo "5. Swapped array: ";
print_r($arr5);
echo "<br>";

// 6. average positive
$arr6 = [];
for ($i = 0; $i < 10; $i++) {
    $arr6[] = rand(-50, 50);
}

$sum = 0;
$count = 0;
foreach ($arr6 as $num) {
    if ($num > 0) {
        $sum += $num;
        $count++;
    }
}
echo "6. Avg positive: " . ($count ? $sum/$count : 0) . "<br>";

// 7. email
$name = "Гарбузюк Олег";
$name = mb_strtolower($name);
$parts = explode(" ", $name);
$email = $parts[0] . "." . $parts[1] . "@example.com";
echo "7. Email: $email <br>";

// 8. divisible 400
$year = 1600;
echo "8. Divisible by 400: " . ($year % 400 == 0 ? "Yes" : "No") . "<br>";

// 9. product + odd indexes
$arr9 = [];
for ($i = 0; $i < 10; $i++) {
    $arr9[] = rand(0, 100);
}

$product = 1;
echo "9. Odd index elements: ";
for ($i = 0; $i < count($arr9); $i++) {
    if ($i % 2 != 0 && $arr9[$i] > 0) {
        echo $arr9[$i] . " ";
    }
    if ($i % 2 == 0 && $arr9[$i] > 0) {
        $product *= $arr9[$i];
    }
}
echo "<br>Product even index >0: $product <br>";

// 10. leap year
$year = 2024;
$isLeap = ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0);
echo "10. Leap year: " . ($isLeap ? "Yes" : "No");

?>

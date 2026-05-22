<?php

echo "<h1>Lab 2 - Arrays processing</h1>";

// 1
echo "<h3>Task 1 - Product of numbers</h3>";

$numbers = array_map('intval', explode(",", "1,2,3,4,5"));

$result = 1;
foreach ($numbers as $value) {
    $result *= $value;
}

echo "<p>Result: $result</p>";


// 2
echo "<h3>Task 2 - Perfect numbers search</h3>";

function checkPerfect($num)
{
    $sum = 0;

    for ($i = 1; $i < $num; $i++) {
        if ($num % $i === 0) {
            $sum += $i;
        }
    }

    return $sum === $num;
}

$list = [];
for ($i = 0; $i < 15; $i++) {
    $list[] = rand(1, 1000);
}

$found = [];

foreach ($list as $value) {
    if (checkPerfect($value)) {
        $found[] = $value;
    }
}

echo "<p>" . (count($found) ? implode(" | ", $found) : "No perfect numbers") . "</p>";


// 3
echo "<h3>Task 3 - Zero counter</h3>";

$data = [0, 1, 0, 5, 0, 3];

$zeros = 0;

for ($i = 0; $i < count($data); $i++) {
    if ($data[$i] === 0) {
        $zeros++;
    }
}

echo "<p>Zeros found: $zeros</p>";


// 4
echo "<h3>Task 4 - Odd squares sum</h3>";

$nums = [];

for ($i = 0; $i < 20; $i++) {
    $nums[] = rand(1, 50);
}

$total = 0;

foreach ($nums as $n) {
    if ($n % 2 !== 0) {
        $total += pow($n, 2);
    }
}

echo "<p>Sum: $total</p>";


// 5
echo "<h3>Task 5 - Swap edges</h3>";

$edge = [1,2,3,4,5,6,7,8];

$tmp = $edge[0];
$edge[0] = $edge[array_key_last($edge)];
$edge[array_key_last($edge)] = $tmp;

echo "<p>" . implode(", ", $edge) . "</p>";


// 6
echo "<h3>Task 6 - Positive average</h3>";

$randNums = [];

for ($i = 0; $i < 10; $i++) {
    $randNums[] = rand(-50, 50);
}

$sumPos = 0;
$countPos = 0;

foreach ($randNums as $val) {
    if ($val > 0) {
        $sumPos += $val;
        $countPos++;
    }
}

$average = $countPos ? round($sumPos / $countPos, 2) : 0;

echo "<p>Average: $average</p>";


// 7
echo "<h3>Task 7 - Email generator</h3>";

$fullName = "Гарбузюк Олег";

$fullName = mb_strtolower($fullName, "UTF-8");

[$surname, $name] = explode(" ", $fullName);

$email = $surname . "." . $name . "@example.com";

echo "<p>$email</p>";


// 8
echo "<h3>Task 8 - Divisible by 400</h3>";

$y = 1600;

echo "<p>" . ($y % 400 === 0 ? "YES" : "NO") . "</p>";


// 9
echo "<h3>Task 9 - Index operations</h3>";

$array = [];

for ($i = 0; $i < 10; $i++) {
    $array[] = rand(0, 100);
}

$mul = 1;
$oddIndexValues = [];

foreach ($array as $index => $value) {

    if ($index % 2 === 0 && $value > 0) {
        $mul *= $value;
    }

    if ($index % 2 !== 0 && $value > 0) {
        $oddIndexValues[] = $value;
    }
}

echo "<p>Odd index values: " . implode(", ", $oddIndexValues) . "</p>";
echo "<p>Product: $mul</p>";


// 10
echo "<h3>Task 10 - Leap year check</h3>";

$year = 2024;

$isLeap =
    ($year % 4 === 0 && $year % 100 !== 0) ||
    ($year % 400 === 0);

echo "<p>" . ($isLeap ? "Leap year" : "Not leap year") . "</p>";

?>

<?php

for ($i = 1; $i <= 10; $i++) {

    echo $i;

    if ($i != 10) {
        echo "-";
    }
    ;

}
echo "<br>";
echo "<br>";
$sum = 0;
for ($i = 1; $i <= 30; $i++) {
    $sum += $i;
}
echo $sum;
echo "<br>";
for ($i = 1; $i <= 5; $i++) {
    echo '<br>';
    for ($j = 1; $j <= 5; $j++) {
        echo '*' . ' ';
    }

}
echo "<br>";
$number1 = 5;
$factorial = 1;
for ($i = 1; $i <= $number1; $i++) {
    $factorial *= $i;
}
echo $factorial;

echo "<br>";
$fibonacci = [0, 1];
for ($i = 0; $i <= 10; $i++) {
    $sums = $fibonacci[$i] + $fibonacci[$i + 1];
    array_push($fibonacci, $sums);
}
echo '<pre>';
print_r($fibonacci);
echo '</pre>';
echo "<br>";

$newString = 'Orcange Coding Acadecmy';
$counter = 0;
for ($i = 0; $i < strlen($newString); $i++) {
    if ($newString[$i] == "c" || $newString[$i] == "C") {
        $counter++;
    }

}
echo $counter;

echo "<br>";
echo "<br>";
echo "<br>";
echo '<table cellpadding="5px" cellspacing="0px" border="2px">';
$firstNum = 1;
$result = 1;
for ($i = 1; $i <= 6; $i++) {

    echo '<tr>';
    for ($j = 1; $j <= 5; $j++) {
        $result = $firstNum * $j;
        echo "<td>";
        echo "$firstNum * $j = $result";
        echo "</td>";
        $firstNum++;
    }
    echo '</tr>';
}
echo '</table>';

echo '<br>';
$fizzBuzzArray = [];
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        array_push($fizzBuzzArray, 'Buzz Fizz ');
    } else if ($i % 3 == 0) {
        array_push($fizzBuzzArray, 'Fizz');
    } else if ($i % 5 == 0) {
        array_push($fizzBuzzArray, 'Buzz');
    } else {
        array_push($fizzBuzzArray, $i);
    }
}
foreach ($fizzBuzzArray as $value) {
    echo $value . " ";
}

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
$num = 1;
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $num . ' ';
        $num++;
    }
    echo '<br>';
}



?>
<?php

//number 1

/* Imagine a lot of code here */
$very_bad_unclear_name="15 chicken wings";

// Write your code here:
$order = &$very_bad_unclear_name;
$order .= " Hello World!";

//// Don't change the line below

echo "<br>Your order is:$very_bad_unclear_name.";

//number 2
$n1 = 10;
echo $n1 . "<br>";
$n2 = 1001;
echo $n2;
$n3 = 123.456;
echo $n3 . "<br>";
echo (6+6) . "<br>";

$last_month = 1187.23;
$this_month = 1089.98;
echo ($last_month - $this_month);

//number 11
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo "<br>" . $days_per_language;

//number 12
echo 8**2;

//number 13
$my_num = 13;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer;

//number 14
$a = 10;
$b = 3;
echo "<br>" . ($a % $b);
if ($a % $b == 0)
    echo "<br>Делится<br>";
else echo "<br>Делится с остатком<br>" . ($a % $b);

echo $st = pow(2,10) . "<br>";
echo sqrt(245) . "<br>";
$mas1 = array(4,2,5,19,13,0,10);
$sum = 0;
foreach($mas1 as $num)
    $sum += $num**2;
echo sqrt($sum). "<br>";

echo round(sqrt(379),0) . " ";
echo round(sqrt(379),1) . " ";
echo round(sqrt(379),2) . "<br>";
$mas2 = array(
    "floor" => floor(sqrt(587)),
    "ceil" => ceil(sqrt(587)));

$mas3=array(4,-2,5,10,-130,0,10);
$min = $mas3[0];
$max = $mas3[0];
foreach($mas3 as $numb)
    echo"$numb ";
if ($min > $numb) $min = $numb;
if ($max < $numb) $max = $numb;
echo"<br>max - $max , min - $min";

echo "<br>" . rand(1,100) . "<br>";
$mas4 = array();
for($i = 0; $i < 10; $i++) {
    array_push($mas4, rand(1, 100));
}
for($i = 0; $i < 10; $i++) {
    echo "$mas4[$i] ";
}

for($i = 0; $i < 10; $i++) {
    $a = rand(-100,100);
    $b = rand(-100,100);
    echo "<br>a-b=$a-$b=|" . ($a-$b) . "|=" . abs($a-$b);
}

$mas5 = array();
for($i = 0; $i<10; $i++) {
    array_push($mas5, rand(-100, 100));
}
foreach ($mas5 as &$number) {
    echo $number . " ";
    if($number < 0)
        $number = abs($number);
}

$numeric = rand(1,100);
echo "<br>Number: $numeric<br>";
$dividers = array();
for($i = 1; $i <= $numeric; $i++) {
    if($numeric % $i == 0) {
        array_push($dividers, $i);
        echo $i . " ";
    }
}
$mas6 = array(1,2,3,4,5,6,7,8,9,10);
$sum = 0;
$count = 0;
while ($sum < 10) {
    $sum += $mas6[$count];
    $count ++;
}

//number 15
function printStringReturnNumber() {
    echo "<br>Hello World!!!";
    return 101;
}
echo "<br>" . $my_num = printStringReturnNumber();

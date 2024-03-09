<?php
//task 1
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";


// Write your code here:
$order = &$very_bad_unclear_name;
$order .= " and a lot of things";


// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";

echo "\n";
//task_2
$intNumber = 5;
echo "\n$intNumber";

echo "\n";

$floatNumber = 2.4;
echo $floatNumber;

echo "\n";
echo $intNumber * $floatNumber;

$lastMonth = 1187.23;
$thisMonth = 1089.98;
echo "\n";
echo $lastMonth - $thisMonth;
echo "\n\n";

//task_11
$numLanguages = 4;
$month = 11;
$days = $month * 16;
$daysPerLanguage = $days / $numLanguages;
echo $daysPerLanguage;
echo "\n\n";

//task_12
echo 8 ** 2;
echo "\n\n";

//task_13
$myNum = 1431;
$answer = $myNum;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $myNum;
echo "\n";
echo $answer;
echo "\n\n";
//task_14

//part 1
$a = 10;
$b = 3;
$c = $a % $b;
echo $c;
echo "\n";
if ($c === 0)
    echo "Делится";
else
    echo "Делится с остатком $c";

//part 2
$st = pow(2,10);
echo "\n";
echo $st;

echo "\n";
echo sqrt(245);

$arr = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($arr as $value)
{
    $sum += pow($value, 2);
}
echo "\n";
echo sqrt($sum);

//part 3
echo "\n";
echo round(sqrt(379));
echo "\n";
echo round(sqrt(379), 1);
echo "\n";
echo round(sqrt(379), 2);

$array = ["floor" => floor(sqrt(587)), "ceil" => ceil(sqrt(587))];
echo "\n";
echo $array["floor"];
echo "\n";
echo $array["ceil"];

//part 4
$numbers = [4, -2, 5, 19, -130, 0, 10];
echo "\n";
echo min($numbers);
echo "\n";
echo max($numbers);

//part 5
echo "\n";
echo rand(1, 100);

$arrayRand = [];
for($i = 0; $i < 10; $i++)
{
    Array_push($arrayRand, rand(1, 100000));
}
echo "\n";
foreach($arrayRand as $value)
{
    echo "$value ";
}
echo "\n";
echo abs($a - $b);
$a = 13;
$b = 20;
echo "\n";
echo abs($a - $b);
$a = 200;
$b = 201;
echo "\n";
echo abs($a - $b);

echo "\n";
$newArr = [1, 2, -1, -2, 3, -3];
$newArr = array_map('abs', $newArr);
foreach($newArr as $value)
{
    echo "$value ";
}

//part 6
$dividers = [];
$number = 35;
for ($i = 1; $i <= $number; $i++){
    if ($number % $i == 0)
        Array_push($dividers, $i);
}
echo "\n";
foreach($dividers as $value)
{
    echo "$value ";
}

$mass = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$count = 0;
while ($sum<=10)
{
    $sum += $mass[$count];
    $count += 1;
}
echo "\n";
echo $count;

//task_15
echo "\n\n";
function printStringReturnNumber()
{
    echo "\nSome line";
    return 5;
}
$myNum = printStringReturnNumber();
echo $myNum;
echo "\n\n";

//task_16
function increaseEnthusiasm($string)
{
    return $string . '!';
}
echo increaseEnthusiasm("\nWork it!");

function repeatThreeTimes($string)
{
    return $string . $string . $string;
}
echo "\n";
echo repeatThreeTimes("Bla ");
echo "\n";
echo increaseEnthusiasm(repeatThreeTimes('Meme'));

function cut($string, $number = 10)
{
    if (strlen($string) < $number)
    {
       return "There are less than 10 letters in this word.";
    }
    else
    {
        return "There are at least 10 letters in this word.";
    }
}
echo "\n";
echo cut("Words");
echo "\n";
echo cut("Words", 3);


function Show($array, $value = 0)
{
    echo "$array[$value] ";
    Show($array, $value + 1);
}

echo "\n";
Show($mass);

echo "\n\n";


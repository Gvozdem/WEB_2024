<?php
//task 1
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";


// Write your code here:
$order = &$very_bad_unclear_name;
$order .= " and a lot of things";


// Don't change the line below
echo "<br />Your order is: $very_bad_unclear_name.";

echo "<br />";
//task_2
echo "<br />Задание 2";
$intNumber = 5;
echo "<br />$intNumber";

echo "<br />";

$floatNumber = 2.4;
echo $floatNumber;

echo "<br />";
echo $intNumber * $floatNumber;

$lastMonth = 1187.23;
$thisMonth = 1089.98;
echo "<br />";
echo $lastMonth - $thisMonth;
echo "<br /><br />";

//task_11
echo "Задание 11<br />";
$numLanguages = 4;
$month = 11;
$days = $month * 16;
$daysPerLanguage = $days / $numLanguages;
echo $daysPerLanguage;
echo "<br /><br />";

//task_12
echo "Задание 12<br />";
echo 8 ** 2;
echo "<br /><br />";

//task_13
echo "Задание 13<br />";
$myNum = 1431;
$answer = $myNum;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $myNum;
echo $answer;
echo "<br /><br />";
//task_14
echo "Задание 14<br />";
//part 1
$a = 10;
$b = 3;
$c = $a % $b;
echo $c;
echo "<br />";
if (0 === $c)
    echo "Делится";
else
    echo "Делится с остатком $c";

//part 2
$st = pow(2,10);
echo "<br />";
echo $st;

echo "<br />";
echo sqrt(245);

$arr = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($arr as $value)
{
    $sum += pow($value, 2);
}
echo "<br />";
echo sqrt($sum);

//part 3
echo "<br />";
echo round(sqrt(379));
echo "<br />";
echo round(sqrt(379), 1);
echo "<br />";
echo round(sqrt(379), 2);

$array = ["floor" => floor(sqrt(587)), "ceil" => ceil(sqrt(587))];
echo "<br />";
echo $array["floor"];
echo "<br />";
echo $array["ceil"];

//part 4
$numbers = [4, -2, 5, 19, -130, 0, 10];
echo "<br />";
echo min($numbers);
echo "<br />";
echo max($numbers);

//part 5
echo "<br />";
echo rand(1, 100);

$arrayRand = [];
for($i = 0; $i < 10; $i++)
{
    Array_push($arrayRand, rand(1, 100000));
}
echo "<br />";
foreach($arrayRand as $value)
{
    echo "$value ";
}
echo "<br />";
echo abs($a - $b);
$a = 13;
$b = 20;
echo "<br />";
echo abs($a - $b);
$a = 200;
$b = 201;
echo "<br />";
echo abs($a - $b);

echo "<br />";
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
    if (0 === ($number % $i))
        Array_push($dividers, $i);
}
echo "<br />";
foreach($dividers as $value)
{
    echo "$value ";
}

$mass = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$count = 0;
while (10 >= $sum)
{
    $sum += $mass[$count];
    $count += 1;
}
echo "<br />";
echo $count;

//task_15
echo "<br /><br />";
echo "Задание 15<br />";
function printStringReturnNumber()
{
    echo "Some line<br />";
    return 5;
}
$myNum = printStringReturnNumber();
echo $myNum;
echo "<br /><br />";

//task_16
echo "Задание 16<br />";
function increaseEnthusiasm($string)
{
    return $string . '!';
}
echo increaseEnthusiasm("Work it!");

function repeatThreeTimes($string)
{
    return $string . $string . $string;
}
echo "<br />";
echo repeatThreeTimes("Bla ");
echo "<br />";
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
echo "<br />";
echo cut("Words");
echo "<br />";
echo cut("Words", 3);


function showArray($array)
{
    if (is_array( $array ) && 0 < count($array))
    {
        echo $array[0] . " ";
        array_shift($array);
        showArray($array);
    }
}

echo "<br />";
showArray($mass);

function digitSum($number)
{

    $digitsSum =  array_sum(str_split($number));
    if (9 < $digitsSum) {
        return digitSum($digitsSum);
    }
    return $digitsSum;
}

echo "<br />";
echo digitSum(452);
echo "<br /><br />";

//task_17
echo "Задание 17";
$array = [];
for ($i = 1; $i <= 3; $i++) {
    $array[] = str_repeat('x', $i);
}
foreach ($array as $value)
{
    echo "<br />";
    echo $value;
}

function arrayFill($string, $number)
{
    $arr = [];
    for ($i = 1; $i <= $number; $i++)
    {
        $arr[$i] = str_repeat($string, $i);
    }
    return $arr;
}

foreach (arrayFill("x", 10) as $value)
{
    echo "<br />";
    echo $value;
}

$arrayBig =  [[1, 2, 3], [4, 5], [6]];
function arraySum($arrayBig)
{
    $sum = 0;
    foreach ($arrayBig as $arrMini) {
        foreach ($arrMini as $value) {
            $sum += $value;
        }
    }
    return $sum;
}

echo "<br />";
echo arraySum($arrayBig);

function createBigArray($number)
{
    echo "[";
    $count = 1;
    for ($i = 0; $count < $number; $i++) {
        echo "[";
        for ($j = 0; $j < 3; $j++)
        {
            $arrayMini[$j] = $count;
            $count += 1;
            echo $arrayMini[$j], " ";
        }
        $arrayBig[$i] = $arrayMini;
        echo "] ";
    }
    echo "]";

    return $arrayBig;
}

echo "<br />";
createBigArray(9);


$array = [2, 5, 3, 9];
$result = $array[0] * $array[1] + $array[2] * $array[3];
echo "<br />$result";

$user = ["name" => "Демид", "surname" => "Гвозденко", "patronymic" => "Сергеевич"];
echo "<br />", $user["name"], " ", $user["surname"], " ", $user["patronymic"];

$date = ["year" => "2024", "month" => "03", "day" => "09"];
echo "<br />";
echo $date["year"], "-", $date["month"], "-", $date["day"];

$array = ['a', 'b', 'c', 'd', 'e'];
echo "<br />";
echo count($array);
echo "<br />";
echo end($array);
echo "<br />";
echo $array[count($array) - 2];
echo "<br />";

//task_18
echo "<br />Задание 18<br />";

function checkSum($number1, $number2)
{
    $sum = $number1 + $number2;
    if (10 < $sum)
    {
        return true;
    }
    else {
        return false;
    }
}
echo checkSum(5,6);
echo "<br />";

function checkEqually($number1, $number2)
{
    if ($number1 === $number2)
    {
        return true;
    }
    else {
        return false;
    }
}
echo checkEqually(5,5);

echo "<br />";
$test = 0;
if (0 === $test) echo 'Верно';

$age = 42;
if (10 > $age || 99 < $age)
{
    echo "<br />Out of range";
}
else
{
    $digitSum = array_sum(str_split($age));
    if (9 >= $digitSum)
    {
        echo "<br />Сумма цифр однозначна";
    } else {
        echo "<br />Сумма цифр двузначна";
    }
}

$arr = [1, 2, 3];
if (3 === count($arr))
{
    $sum = array_sum($arr);
    echo "<br />$sum";
}
echo "<br />";
//task_19
echo "<br />Задание 19";
$str = "";
for ($i = 1; $i <= 20; $i++)
{
    $str .= "X";
    echo "<br />", $str;
}
echo "<br />";
//task_20
echo "<br />Задание 20<br />";

$array = [481, 394, 34, 58, 81, 37, 28, 291];
$average = array_sum($array) / count($array);
echo $average;
echo "<br />";

$number = 100;
$sum = ($number * ($number + 1)) / 2;
echo $sum;

$arr = [1, 4, 9, 16, 25, 36, 49, 64, 81, 100];
$result = array_map('sqrt', $arr);
echo "<br />[ ";
foreach($result as $value) echo "$value ";
echo "]";

$characters = range('a', 'z');
$numbers = range(1, 26);
$result = array_combine($characters, $numbers);
foreach ($result as $letters => $numbers) echo "<br />$letters => $numbers";
echo "<br />";

$string = '1234567890';
$numbers = str_split($string, 2);

echo array_sum($numbers);
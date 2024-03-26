<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab_3</title>
</head>
<body>
<h2>Task 1</h2>
<h3>Part a</h3>
<?php
$words = '/a..b/';
$str = 'ahb acb aeb aeeb adcb axeb';

preg_match_all($words, $str, $matches);
echo "Ответ:<br />";
foreach ($matches[0] as $match) {
    echo $match."<br />";
}
?>
<h3>Part b</h3>
<?php
$words = '/(\d+)/';
$string = 'a1b2c3d4f5e6';
$replacement = function($matches) {
    $number = $matches[1];
    $cube = pow($number, 3);
    return $cube;
};

$result = preg_replace_callback($words, $replacement, $string);
echo "Новая строка:<br />$result"
?>
</body>
</html>
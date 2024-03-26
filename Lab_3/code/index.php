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
<h3>Task 1 a</h3>
<?php
$words = '/a..b/';
$str = 'ahb acb aeb aeeb adcb axeb';

preg_match_all($words, $str, $matches);
echo "Ответ:<br />";
foreach ($matches[0] as $match) {
    echo $match."<br />";
}
?>
</body>
</html>
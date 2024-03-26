<?php
session_start();
// Проверяем наличие данных
if (isset($_SESSION['surname']) && isset($_SESSION['name']) && isset($_SESSION['age'])) {
    $surname = $_SESSION['surname'];
    $name = $_SESSION['name'];
    $age = $_SESSION['age'];
} else {
    header('Location: task_2_b.php');
    exit();
}
?>

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
<?php
// Подключаем файл одним способом
include 'task_2_a.php';
?>
<!--Подключаем файл другим способом (тут я просто пытался по разному подключить и соответсвенно понять :)-->
<a href="task_2_b.php"><h3>Part b</h3></a>
    <h2>Сохраненные данные:</h2>
    <p>Фамилия: <?php echo $surname; ?></p>
    <p>Имя: <?php echo $name; ?></p>
    <p>Возраст: <?php echo $age; ?></p>
</body>
</html>
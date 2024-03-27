<?php
session_start();
// Для 2(b) задания
$surname = $_SESSION['surname'];
$name = $_SESSION['name'];
$age = $_SESSION['age'];
// Для 2(c) задания
$userData = $_SESSION['userData'];
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
<!--Задание 1-->
<h1>Task 1</h1>
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
<!--Задание 2-->
<?php
// Подключаем файл одним способом
include 'task_2_a.php';
?>

<!--Подключаем файл другим способом (тут я просто пытался по разному подключить и соответсвенно понять) :)-->
<a href="task_2_b.php"><h3>Part b</h3></a>
    <h2>Сохраненные данные:</h2>
    <p>Фамилия: <?php echo $surname; ?></p>
    <p>Имя: <?php echo $name; ?></p>
    <p>Возраст: <?php echo $age; ?></p>

<a href="task_2_c.php"><h3>Part c</h3></a>
    <h2>Сохраненные данные:</h2>
    <ul>
        <?php
        foreach ($userData as $key => $value) {
        echo "<li>{$key}: {$value}</li>";
        }
        // Покрасивее не получилось :<
        ?>
    </ul>
<!--Задание 3-->
    <h1>Task 3</h1>

    <h2>Добавить объявление</h2>
    <form action="task_3.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="category">Категория:</label>
        <select id="category" name="category" required>
            <?php
            $categories = array_filter(glob("./categories/*"), 'is_dir');
            foreach ($categories as $category) {
                $categoryName = basename($category);
                echo "<option value=\"$categoryName\">$categoryName</option>";
            }
            ?>
        </select><br /><br />

        <label for="title">Заголовок объявления:</label>
        <input type="text" id="title" name="title" required><br /><br />

        <label for="text">Текст объявления:</label><br>
        <textarea id="text" name="text" rows="4" cols="50" required></textarea><br /><br />

        <input type="submit" value="Добавить">
    </form>

    <h2>Список объявлений</h2>
    <table>
        <tr>
            <th>Email</th>
            <th>Категория</th>
            <th>Заголовок</th>
            <th>Текст</th>
        </tr>
        <?php
        // Чтение объявлений из файлов и вывод в таблицу
        $adFiles = glob("categories/*/*.txt");
        foreach ($adFiles as $adFile) {
            $adData = file($adFile, FILE_IGNORE_NEW_LINES);
            $category = basename(dirname($adFile));
            $title = basename($adFile, ".txt");
            $email = $adData[0];
            $text = $adData[1];
            echo "<tr>
                        <td>$email</td>
                        <td>$category</td>
                        <td>$title</td>
                        <td>$text</td>
                    </tr>";
        }
        ?>
    </table>
</body>
</html>
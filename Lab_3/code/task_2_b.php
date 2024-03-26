<?php
session_start();

$surname = '';
$name = '';
$age = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получаем
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $age = $_POST['age'];

    // Сохраняем
    $_SESSION['surname'] = $surname;
    $_SESSION['name'] = $name;
    $_SESSION['age'] = $age;

    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Форма ввода данных</title>
</head>
<body>
<h2>Форма ввода данных</h2>
<form method="POST">
    <label for="surname">Фамилия:</label>
    <input type="text" name="surname" id="surname"><br />

    <label for="name">Имя:</label>
    <input type="text" name="name" id="name"><br />

    <label for="age">Возраст:</label>
    <input type="number" name="age" id="age"><br />

    <button type="submit">Сохранить</button>
</form>
</body>
</html>
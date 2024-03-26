<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получаем данные из формы
    $name = $_POST['name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];
    $anime = $_POST['anime'];

    // Создаем массив с данными
    $userData = [
        'name' => $name,
        'age' => $age,
        'salary' => $salary,
        'anime' => $anime
    ];

    // Сохраняем данные в сессии
    $_SESSION['userData'] = $userData;

    // Перенаправляем пользователя на другую страницу
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
    <label for="name">Имя:</label>
    <input type="text" name="name" required><br />

    <label for="age">Возраст:</label>
    <input type="number" name="age" required><br />

    <label for="salary">Зарплата:</label>
    <input type="number" name="salary" required><br />

    <label for="anime">Любимое аниме:</label>
    <input type="text" name="anime" required><br />

    <button type="submit">Сохранить</button>
</form>
</body>
</html>
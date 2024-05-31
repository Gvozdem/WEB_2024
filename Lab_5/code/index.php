<?php
$mysqli = new mysqli('db', 'root', 'helloworld', 'web');

if (mysqli_connect_errno()) {
    printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error());
    exit;
}

// Обработка формы
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $mysqli->real_escape_string($_POST['email']);
    $title = $mysqli->real_escape_string($_POST['title']);
    $category = $mysqli->real_escape_string($_POST['categories']);
    $description = $mysqli->real_escape_string($_POST['text']);

    $mysqli->query("INSERT INTO ad (email, title, description, category) VALUES ('$email', '$title', '$description', '$category')");
}

$mas = [];
if ($result = $mysqli->query('SELECT * FROM ad ORDER BY created DESC')) {
    while ($row = $result->fetch_assoc()) {
        $mas[] = $row;
    }
    $result->close();
}
$mysqli->close();

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab_5</title>
</head>
<body>
<h1>Объявления</h1>

<form action="index.php" method="POST">
    <label for="email">Email:</label>
    <input type="email" name="email" required><br />

    <label for="categories">Категории:</label>
    <select name="categories" required>
        <option value="auto">Автомобили</option>
        <option value="services">Электроника</option>
        <option value="technic">Техника</option>
    </select><br>

    <label for="title">Заголовок объявления:</label>
    <input type="text" name="title" required><br />

    <label for="text">Текст сообщения:</label><br />
    <textarea name="text" rows="4" cols="50" required></textarea><br /><br />

    <input type="submit" value="Добавить">
</form>

    <table>
        <tr>
            <th>Email</th>
            <th>Категории</th>
            <th>Заголовок</th>
            <th>Текст</th>
        </tr>
        <?php foreach ($mas as $item):
            echo "<tr>";
            echo "<td>" . ($item['email']) . "</td>";
            echo "<td>" . ($item['category']) . "</td>";
            echo "<td>" . ($item['title']) . "</td>";
            echo "<td>" . ($item['description']) . "</td>";
            echo "</tr>";
        endforeach; ?>
    </table>
</body>
</html>
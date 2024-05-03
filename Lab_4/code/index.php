<?php
require_once 'vendor/autoload.php';

// Подключение к Google Sheets API
$client = new Google_Client();
$client->setAuthConfig(__DIR__.'/credentials.json');
$client->addScope(Google_Service_Sheets::SPREADSHEETS);

$service = new Google_Service_Sheets($client);

$spreadsheetId = '1MjlEf8eeuiuKCddRqGOdW0Ec8Fo8FJLRrN5_3zmwD1k';

// Получение данных из таблицы
$response = $service->spreadsheets_values->get($spreadsheetId, 'Лист1');
$values = $response->getValues();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab_4</title>
</head>
<body>
<h1>Form</h1>

<h2>Добавить объявление</h2>
<form action="form.php" method="POST">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="category">Категория:</label>
    <select id="category" name="category" required>
        <option value="auto">Автомобили</option>
        <option value="services">Сервисы</option>
        <option value="technic">Техника</option>
    </select><br /><br />

    <label for="title">Заголовок объявления:</label>
    <input type="text" id="title" name="title" required><br /><br />

    <label for="text">Текст объявления:</label><br>
    <textarea id="text" name="text" rows="4" cols="50" required></textarea><br /><br />

    <input type="submit" value="Добавить">
</form>

<h2>Таблица объявлений</h2>
<table>
    <thead>
    <tr>
        <th>Email</th>
        <th>Категория</th>
        <th>Заголовок</th>
        <th>Текст</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if (!empty($values)) {
        foreach ($values as $row) {
            echo "<tr>";
            echo "<td>" . $row[0] . "</td>";
            echo "<td>" . $row[1] . "</td>";
            echo "<td>" . $row[2] . "</td>";
            echo "<td>" . $row[3] . "</td>";
            echo "</tr>";
        }
    }
    ?>
    </tbody>
</table>

</body>
</html>
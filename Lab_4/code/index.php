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
</body>
</html>
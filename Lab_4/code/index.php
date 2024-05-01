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
<h1>Task 3</h1>

<h2>Добавить объявление</h2>
<form action="form.php" method="POST">
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
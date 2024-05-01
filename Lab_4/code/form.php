<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $category = $_POST["category"];
    $title = $_POST["title"];
    $text = $_POST["text"];

    // Создание директории, если она не существует
    if (!is_dir("categories/$category")) {
        mkdir("categories/$category", 0777, true);
    }

    // Создание нового объявления в виде текстового файла
    $adFile = "categories/$category/" . sanitizeFilename($title) . ".txt";
    $adData = "$email\n$text";
    file_put_contents($adFile, $adData);

    header("Location: index.php");
    exit;
}

// Функция для очистки имени файла от недопустимых символов
function sanitizeFilename($filename) {
    $filename = preg_replace("/[^a-zA-Z0-9а-яА-Я\s]/u", "", $filename); // Удаление специальных символов
    $filename = preg_replace("/\s+/", " ", $filename); // Удаление повторяющихся пробелов
    $filename = trim($filename); // Удаление пробелов в начале и конце строки
    $filename = str_replace(" ", "_", $filename); // Замена пробелов на подчеркивания
    return $filename;
}
?>
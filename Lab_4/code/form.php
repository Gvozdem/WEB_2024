<?php
require_once 'vendor/autoload.php';

// Подключение к Google Sheets API
$client = new Google_Client();
$client->setAuthConfig(__DIR__.'/credentials.json');
$client->addScope(Google_Service_Sheets::SPREADSHEETS);

$service = new Google_Service_Sheets($client);

$spreadsheetId = '1MjlEf8eeuiuKCddRqGOdW0Ec8Fo8FJLRrN5_3zmwD1k';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получение данных из формы
    $email = $_POST['email'];
    $category = $_POST['category'];
    $title = $_POST['title'];
    $text = $_POST['text'];

    // Создание массива с данными для записи в таблицу
    $row = [$email, $category, $title, $text];

    // Добавление данных в таблицу
    $range = 'Лист1!A1'; // Диапазон ячеек, куда будут записаны данные
    $valueRange = new Google_Service_Sheets_ValueRange(['values' => [$row]]);
    $service->spreadsheets_values->append($spreadsheetId, $range, $valueRange, ['valueInputOption' => 'USER_ENTERED']);

    // Возвращаем успешный HTTP-статус
    http_response_code(200);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    // Возвращаем ошибку, если запрос не является POST-запросом
    http_response_code(400);
}
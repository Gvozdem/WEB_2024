<h1>Task 2</h1>
<h3>Part a</h3>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $text = $_POST['text'];

    $wordCount = 0;
    if (!empty($text)) {
        $words = preg_split('/\s+/', $text);
        $wordCount = count($words);
    }
    $charCount = mb_strlen($text);

    echo "Количество слов: " . $wordCount . "<br />";
    echo "Количество символов: " . $charCount;
}
?>

<form method="POST">
    <textarea name="text" rows="5" cols="40"></textarea><br>
    <button type="submit">Подсчитать</button>
</form>
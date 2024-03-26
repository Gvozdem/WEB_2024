<h2>Task 2</h2>
<h3>Part a</h3>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $text = $_POST['text'];

    $wordCount = str_word_count($text);
    $charCount = strlen($text);

    echo "Количество слов: " . $wordCount . "<br />";
    echo "Количество символов: " . $charCount;
}
?>

<form method="POST">
    <textarea name="text" rows="5" cols="40"></textarea><br>
    <button type="submit">Подсчитать</button>
</form>
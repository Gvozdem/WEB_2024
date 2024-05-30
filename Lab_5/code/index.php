<?php

$mysqli = new mysqli('db', 'root', 'helloworld', 'web');

if (mysqli_connect_errno()) {
    printf("Подключение к серверу MySQL невозможно. Код ошибки %s\n", mysqli_connect_errno());
    exit;
}


$mysqli->query('INSERT INTO ad (email, title, description, category) VALUES("test@test.com", "title", "desc", "other")');

if ($result = $mysqli->query('SELECT * FROM ad ORDER BY created BY')){
    print('Ads: \n');

    while($row = $result->fetch_assoc()) {
        printf("%s (%s)\n", $row['email'], $row['title']);
    }
    $result->close();
}

$mysqli->close();
<?php
# Этот скрипт ориентирован на работу со страницей index.html
# Для других страниц необходимо создать подобные скрипты


# Подключение к базе данных
$db = mysqli_connect("localhost", "root", "_Qeadzc90", "books");  # сервер, пользователь, пароль, база данных

$isbn = $_REQUEST['isbn'];

if ($isbn !== "") {
    $sql = "DELETE FROM editions WHERE isbn = $isbn";
}

# Вывод сообщения об успехе / неудачи операции
if(mysqli_query($db, $sql)){
    echo "Запись успешно удалена.";
} else{
    echo "ERROR: Не удалось выполнить $sql. " . mysqli_error($link);
}
function clean($value = "") {
    $value = trim($value); // Удаление пробелов по краям
    $value = stripslashes($value); // Удаление экранирования символов
    $value = strip_tags($value); // Удаление теги html и php
    $value = htmlspecialchars($value); // Преобразование спец.символов в HTML-сущности
    return $value;
}

/*


Пример использования

$name = clean($_POST['name']);


*/

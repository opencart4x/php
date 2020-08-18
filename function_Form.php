// Обработка вводных данных

// Очистка
function clean($value = "") {
    $value = trim($value); // Удаление пробелов по краям
    $value = stripslashes($value); // Удаление экранирования символов
    $value = strip_tags($value); // Удаление теги html и php
    $value = htmlspecialchars($value); // Преобразование спец.символов в HTML-сущности
    return $value;
}
// Длина строки
function check_length($value = "", $min, $max) {
    $result = (mb_strlen($value) < $min || mb_strlen($value) > $max); // Проверям длинну строки
    return !$result;
}
/*
Пример использования
Очистка - $name = clean($_POST['name']); 
Длина строки - if(check_length($name, 2, 30) && check_length($phone, 5, 12) && check_length($message, 2, 1000)) { ... }
*/



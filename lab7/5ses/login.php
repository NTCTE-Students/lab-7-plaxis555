<?php
// Инициализация сессии
session_start();

// Установка переменных сессии при первом посещении
if (!isset($_SESSION['first_visit_time'])) {
    $_SESSION['first_visit_time'] = time(); // Время первого посещения
}

// Обновление времени последнего посещения
$_SESSION['last_visit_time'] = time(); // Время последнего посещения
?>

<!DOCTYPE html>
<html>
<head>
    <title>Информация о посещениях</title>
</head>
<body>
    <h2>Информация о посещениях</h2>
    <?php
    // Вывод времени первого посещения
    echo "<p>Первое посещение: " . date('Y-m-d H:i:s', $_SESSION['first_visit_time']) . "</p>";

    // Вывод времени последнего посещения
    echo "<p>Последнее посещение: " . date('Y-m-d H:i:s', $_SESSION['last_visit_time']) . "</p>";
    ?>
</body>
</html>
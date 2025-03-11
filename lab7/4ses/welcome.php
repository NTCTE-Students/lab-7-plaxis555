<?php
session_start();

// Проверка, есть ли данные в сессии
if (!isset($_SESSION['items'])) {
    header('Location: login.php');
    exit();
}

$items = $_SESSION['items'];
?>

<!DOCTYPE html>
<html>
<body>
    <h2>Список покупок</h2>
    <ul>
        <?php foreach ($items as $item): ?>
            <li><?php echo htmlspecialchars($item); ?></li>
        <?php endforeach; ?>
    </ul>
    <a href="logout.php">Очистить и вернуться</a>
</body>
</html>
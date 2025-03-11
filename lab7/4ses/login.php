<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Получение данных из формы (массив значений)
    $items = $_POST['item']; // Массив значений

    // Сохранение данных в сессии
    $_SESSION['items'] = $items;

    // Перенаправление на страницу приветствия
    header('Location: welcome.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Добавление покупок</title>
    <script>
        function addItemField() {
            const container = document.getElementById('item-fields');
            const newInput = document.createElement('input');
            newInput.type = 'text';
            newInput.name = 'item[]'; 
            newInput.required = true;
            newInput.placeholder = 'Введите значение';
            container.appendChild(newInput);
            container.appendChild(document.createElement('br'));
        }

        function removeItemField() {
            const container = document.getElementById('item-fields');
            if (container.childElementCount > 2) { 
                container.removeChild(container.lastChild); 
                container.removeChild(container.lastChild); 
            }
        }
    </script>
</head>
<body>
    <h2>Добавление покупок</h2>
    <form method="post" action="login.php">
        <div id="item-fields">
            <input type="text" name="item[]" placeholder="Введите имя" required><br>
        </div>
        <button type="button" onclick="addItemField()">Добавить покупку</button>
        <button type="button" onclick="removeItemField()">Удалить покупку</button><br><br>
        <input type="submit" value="К списку">
    </form>
</body>
</html>
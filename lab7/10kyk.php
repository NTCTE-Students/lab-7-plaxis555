<?php

$cookie_name = 'session';
$cookie_value = 'session_id';
$time = 600; 
setcookie($cookie_name, $cookie_value, time() + ($time), '/'); // 3600 секунд = 1 час
 

?>
<!DOCTYPE html>
<html>
	<body>
		<?php
			if (!isset($_COOKIE[$cookie_name])) {
			    print("Куки '{$cookie_name}' не установлены!");
			} else {
                setcookie($cookie_name, $cookie_value, time() + (-100000000), '/'); // 3600 секунд = 1 час
			    print("Куки '{$cookie_name}' установлены!<br>");
				print('Значение: ' . $_COOKIE[$cookie_name]);
			}
		?>
	</body>
</html>
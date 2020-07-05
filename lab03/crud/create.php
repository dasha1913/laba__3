<?php
require_once "user_data.php";
$login = $_POST['login'];
$password = $_POST['password'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$language = $_POST['language'];
$role = $_POST['role'];
$sql = "INSERT INTO users (id, login, password, name, surname, language, role) VALUES (NULL, '$login', '$password', '$name', '$surname', '$language', '$role')";
mysqli_query($connect, $sql);
?>Успех!
<br><a href="table.php">Вернуться обратно.</a>
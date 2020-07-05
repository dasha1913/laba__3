<?php
   require_once 'user_data.php';

 $login = $_POST['login'];
 $name = $_POST['name'];
 $surname = $_POST['surname'];
 $language = $_POST['language'];
 $role = $_POST['role'];
 $id=$_POST['id'];

 $user = mysqli_query($connect, "UPDATE `users` SET `login` = '$login', `name` = '$name', `surname` = 'surname', `language` = '$language', `role` = '$role' WHERE `users`.`id` = '$id'");
 ?>
Успех!
<br><a href="table.php">Вернуться обратно.</a>

<?php
   require_once '../user_data.php';
   $users_id = $_GET['id'];
   $user = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = '$users_id'");
   $user = mysqli_fetch_assoc($user);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>update</title>
</head>
<body>
     <h3>Update</h3>
      <form action="update.php" method="post">
     	<p>login</p>
     	<input type="text" name="login" value="<?$user['login']?>">
     	<p>password</p>
     	<input type="password" name="password" value="<?$user['password']?>">
     	<p>name</p>
     	<input type="text" name="name" value="<?$user['name']?>">
        <p>surname</p>
     	<input type="text" name="surname" value="<?$user['surname']?>">
     	<p>language</p>
     	<input type="text" name="language" value="<?$user['language']?>">
     	<p>role</p>
     	<input type="text" name="role" value="<?$user['role']?>"><br>
     	<button type="submit">Изменить</button>
     </form>
     <br><th><a href="table.php">Назад</a></th></br>
</body>
</html>
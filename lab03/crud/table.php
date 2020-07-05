<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Table</title>
</head>
<body>
     <table>
     	<tr>
     		<th>id</th>
     		<th>login</th>
     		<th>name</th>
     		<th>surname</th>
     		<th>language</th>
     		<th>role</th>
     	</tr>
     	<?php
     	require_once "../user_data.php";
     	  $temp_user = mysqli_query($connect, $sql);
     	  $temp_user = mysqli_fetch_all($temp_user);
        if(isset($_GET['del'])){
            $id = ($_GET['del']);
            mysqli_query($connect, "DELETE FROM `users` WHERE `users`.`id` = '$id'");
        }
     	  foreach ($temp_user as $user)
     	  {
     	  	echo '
     	  	<tr>
     	  	<td>'. $user[0] .'</td>
     		<td>'. $user[1] .'</td>
     		<td>'. $user[3] .'</td>
     		<td>'. $user[4] .'</td>
     		<td>'. $user[5] .'</td>
     		<td>'. $user[6] .'</td>
     		';
     	  	if($_SESSION['role'] == 'admin') 
     	  	{
                echo '<td>' . '<a href="edit.php?id=<?$user[0]?>">Edit</a>';
                echo '</td>'; ?>
                <td><a href="table.php?del=<?=$user[0] ?>>">Delete</a></td> <?php
            }
     	  }
     	 ?>
         </tr>
     </table>
     <br><th><a href="add.php">Добавить</a></th></br>
     <br><th><a href="../index.php">Выход</a></th></br>
</body>
</html>
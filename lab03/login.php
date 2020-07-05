<?php
require_once "user_class.php";
require_once "user_data.php";
$login = $_POST['login'];
$password = $_POST['password'];
if (!empty($login) && !empty($password))
{
foreach ($users as $user)
{
    if ($login == $user['login'] && $password == $user['password'])
    {
                $admin = new $roles[$user['role']]($user);
                $_SESSION['id'] = $user['id'];
                $_SESSION['lang'] = $user['language'];
                $_SESSION['role']=$user['role'];
                break;
    }
}
}
    if ($admin){
    $admin->Get();
} else
    {
        echo "Данные не верны.";
        ?>
        <br>
        <a href="index.php">Вернуться назад</a>
        <?php
    }
    ?>
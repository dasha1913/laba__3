<?php
session_start();
class User
{
    protected $name;
    protected $surname;
    protected $login;
    protected $password;
    protected $lang;

    function __construct($user)
    {
        $this->name = $user['name'];
        $this->surname = $user['surname'];
        $this->login=$user['login'];
        $this->password=$user['password'];
        $this->lang=$user['lang'];
    }
}
class Admin  extends User
{
    public function Get()
    {
        if($_SESSION['lang'] == "ru") {
            echo "Здравствуйте, Админ " . $this->name . " " . $this->surname . ". Вы можете на сайте изменять, делать все.";
            echo '<a href="crud/table.php">Просмотреть информацию</a>';
        }
        elseif ($_SESSION['lang'] == "ua"){
            echo "Вітаю, Адмін ". $this->name . " " . $this->surname . ". Ви можете на сайті змінювати, робити все.";
            echo '<a href="crud/table.php">Надати інформацію</a>';
            
        }
        else{
            echo "Hello, Admin " . $this->name . " " . $this->surname . ". You can modify, to do everything.";
            echo '<a href="crud/table.php">Give information</a>';
        }
    }
}
class Manager  extends User
{
    public function Get()
    {
        if ($_SESSION['lang'] == "ru") {
            echo "Здравствуйте, Менеджер " . $this->name . " " . $this->surname . ". Вы можете на сайте удалять и создавать клиентов.";
            echo '<a href="crud/table.php">Просмотреть информацию</a>';
            
        } elseif ($_SESSION['lang'] == "ua") {
            echo "Вітаю, Менеджер " . $this->name . " " . $this->surname . ". Ви можете на сайті, видаляти і створювати клієнтів.";
            echo '<a href="crud/table.php">Переглянути інформацію</a>';
            
        } else {
            echo "Hello, Manager " . $this->name . " " . $this->surname . ". You can modify create clients on the site.";
            echo '<a href="crud/table.php">Give information</a>';
            
        }
    }
}
class Client extends  User
{
    public function Get()
    {
        if ($_SESSION['lang'] == "ru") {
            echo "Здравствуйте, Клиент " . $this->name . " " . $this->surname . ". Вы можете на сайте просматривать информацию доступную пользователям.";
            
        } elseif ($_SESSION['lang'] == "ua") {
            echo "Вітаю, Кліент " . $this->name . " " . $this->surname . ". Ви можете на сайті переглядати інформацію доступну користувачам.";
            
        } else {
            echo "Hello, Client " . $this->name . " " . $this->surname . ". You can view information available to users on the site.";
            
        }
    }
}
$roles = [
        'admin' => admin::class,
        'manager' => manager::class,
        'client' => client::class,
    ];
?>
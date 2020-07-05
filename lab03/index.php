<?php
session_start();
if(!$_GET['lang']){
    $Langnow = "ru";
}
else{
    $Langnow=$_GET['lang'];
}
require_once ("lang/lang.".$Langnow.".php");
?>

<!doctype html>
<html>
<body>
    <h1><label><? echo $language['Enter']?></label><h1>
	<h3>
		<form method="post" action="login.php">
            <label><? echo $language['login']?></label>
		<br><input type="text" name="login"><br>
            <label><? echo $language['pass']?></label>
		<br><input type="password" name="password">
		<br><input type="submit">
            <h3>
        </form>
            <br><a href="index.php?lang=ru">Russian</a>
                <a href="index.php?lang=ua">Ukrainian</a>
                <a href="index.php?lang=en">English</a>
</body>
</html>
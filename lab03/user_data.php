<?php
   $servername = "localhost";
    $username = "root";
    $password = "";
    $connect = new mysqli($servername, $username, $password, users);
    $sql = "SELECT * FROM users";
    $result = mysqli_query($connect, $sql);
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
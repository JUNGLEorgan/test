<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="username" placeholder="user name">
        <br>
        <input type="password" name="password" placeholder="password">
        <br>
        <button type="submit">send</button>
    </form>
</html>

<?php
    if (isset($_POST['username']) and isset($_POST['password'])) {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $sql = new mysqli("localhost","root","","test");
        $sql->set_charset("utf8");
        $query = "INSERT INTO hello VALUES (null , '$user' , $pass)";
        $result = $sql->query($query);
        echo $sql->affected_rows . "rows inserted";
    }
?>
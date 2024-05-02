<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Холохон Р.С.</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="login.php" class="g-3 needs-validation mt-4" novalidate>
                    <div class="row form__reg mt-2">
                        <input class="form" type="text" name="login" placeholder="Login" required>
                    </div>
                    <div class="row form__reg mt-2">
                        <input class="form" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="col-12 mt-4">
                        <button type="submit" class="btn btn-primary" name="submit">Продолжить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
require_once('db.php');
$link = mysqli_connect('127.0.0.1', 'root', 'kali', 'first');
if(isset($_POST['submit'])) {
    $username = $_POST['login'];
    $pass = $_POST['password'];
    if (!$username || !$pass) die("Пожалуйста введите все значения!");
    $sql = "SELECT * FROM users WHERE username='$username' AND pass='$pass'";
    $result = mysqli_query($link, $sql);
    if (mysqli_num_rows($result) == 1) {
        setcookie("User", $username, time()+7200);
        header('Location: profile.php');
    } else {
        echo "Не правильное имя или пароль";
    }
}
?>

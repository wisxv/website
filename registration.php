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
                <h1 class="text-center">Регистрация</h1>
                <form method="POST" action="registration.php" class="g-3 needs-validation mt-4" novalidate>
                    <div class="col-md-12 mt-2">
                        <label for="validationCustom01" class="form-label">Email</label>
                        <input type="text" class="form-control" id="validationCustom01" name="email" placeholder="Email" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="validationCustom01" class="form-label">Login</label>
                        <input type="text" class="form-control" id="validationCustom01" name="login" placeholder="Login" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="validationCustom01" class="form-label">Password</label>
                        <input type="text" class="form-control" id="validationCustom01" name="password" placeholder="Password" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
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
$link = mysqli_connect('127.0.0.1', 'root', 'kali','first');
if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $username = $_POST['login'];
    $pass = $_POST['password'];
    if(!$email || !$username || !$pass) die("Пожалуйста, введите все значения!");
    $sql = "INSERT INTO users (email, username, pass) VALUES ('$email', '$username', '$pass')";
    if(!mysqli_query($link, $sql)){
        echo "Не удалось добавить пользователя";
    }
}
?>

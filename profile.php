<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Холохон Р.С.</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container nav_bar">
        <div class="row">
            <div class="row">
                <div class="col-3 nav_logo"></div>
                <div class="col-9">
                    <div class="nav_text">Обо мне</div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-8">
                <p>Меня зовут Холохон Р.С., я специалист по защите информации. Моя миссия - превратить вас в IT-специалистов!</p>
                <div class="row">
                    <div class="col-6">
                        <h2>Мои навыки</h2>
                        <ul>
                            <li>Защита информации</li>
                            <li>IT-технологии</li>
                            <li>Программирование</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="custom-photo"></div>
                <div class="row">
                    <p class="title_photo">Холохон Р.С.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="button_js col-12">
                <button id="myButton">Click me</button>
                <p id="demo"></p>
            </div>
        </div>
    </div>
    <div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h1 class="display-4">Привет, <?php echo $_COOKIE['User']; ?></h1>
        </div>
        <div class="col-12">
            <form method="POST" action="profile.php" class="g-3 needs-validation mt-4" novalidate>
                <div class="mb-3">
                    <label for="postTitle" class="form-label">Заголовоk</label>
                    <input type="text" class="form-control" id="postTitle" name="title" placeholder="Заголовок вашего поста" required>
                </div>
                <div class="mb-3">
                    <label for="postText" class="form-label">Текст поста</label>
                    <textarea class="form-control" id="postText" name="text" rows="3" placeholder="Введите текст вашего поста ..." required></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="submit">Опубликовать</button>
                </div>
            </form>
        </div>
    </div>
</div>

    <script type="text/javascript" src="js/button.js"></script>
</body>
</html>

<?php
require_once('db.php');
$link = mysqli_connect('127.0.0.1', 'root', 'kali', 'first');
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $main_text = $_POST['text'];
    if (!$title || !$main_text) die("Заполните все поля");
    $sql = "INSERT INTO posts (title, main_text) VALUES ('$title', '$main_text')";
    if(!mysqli_query($link, $sql)) die("не удалось добавить пост");
}
?>

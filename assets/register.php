<?php
    session_start();

    if ($_SESSION['user']) {
        header('Location: profile.php');
    }

    ?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Авторизация и регистрация</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        
        <!-- Форма авторизации -->
        
        <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
            <label>ФИО</label>
            <input type="text" name="name" placeholder="Введите Ваше полное имя">
            <label>Ваша почта</label>
            <input type="email" name="email" placeholder="Введите свою почту">
            <label>Аватар</label>
            <input type="file" name="avatar">
            <label>логин</label>
            <input type="text" name="login" placeholder="Введите логин">
            <label>Введите пароль</label>
            <input type="password" name="password" placeholder="Введите пароль">
            <label>Повторите пароль</label>
            <input type="password" name="password_confirm" placeholder="Повторите пароль">
            <button type="submit">Зарегистрироваться</button>
            <p>
                Уже есть аккаунт? - <a href="index.php">Авторизириуйтесь.</a>
            </p>
            <?php
                if ($_SESSION['message']){
                echo '<p class="msg"> ' . $_SESSION['message'] . '</p>';
                }
                unset($_SESSION['message']);
            ?>
            
        </form>
    </body>
</html>
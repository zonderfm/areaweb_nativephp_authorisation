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
        
        <form action="vendor/signin.php" method="post">
            <label>Логин</label>
            <input type="text" name="login" placeholder="Введите логин">
            <label>Пароль</label>
            <input type="password" name="password" placeholder="Введите пароль">
            <button type="submit">Войти</button>
            <p>
                Нет аккаунта? - <a href="register.php">Зарегистрируйтесь.</a>
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
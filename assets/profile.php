<?php
    session_start();

    if (!$_SESSION['user']) {
        header('Location: index.php');
    }

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ваш профиль</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<!-- Профиль -->
<form>
    <img src="<?= $_SESSION['user']['avatar'] ?>" width="300" style="text-align: center" alt="">
    <h2 style="margin: 10px 0"><?= $_SESSION['user']['full_name'] ?></h2>
    <a href="#"><?= $_SESSION['user']['full_name'] ?></a>
    <a href="vendor/logout.php" class="logout">Выход</a>
</form>
</body>
</html>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Авторизация</title>
        <meta name="description" content="СПА КРАСНОЯРСК">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/plugins.css" />
		<link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css" />
        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
<body class="special-page">
    <div class="formContainer">
        <form class="form-group" method="post" action="php/processLogin.php">
            <h2 class="title">Авторизация</h2>
            <div class="tip">
                Войдите в учётную запись по адресу электронной почты и паролю 
            </div><?php
if(isset($_SESSION['error'])){
echo '<div class="errorMsg">'. $_SESSION['error'] .'</div>';
unset($_SESSION['error']);
}
if(isset($_SESSION['success'])){
echo '<div class="congratsMsg">'. $_SESSION['success'] .'</div>';
unset($_SESSION['success']);
}
?>
            <label  for="login">Имя пользователя</label>
            <input class="form-control" type="text" name="login" id="login" placeholder="Логин" title="Поле обязательно для заполнения!" required>
            <label  for="password">Пароль</label>
            <input class="form-control" type="password" name="password" id="password" placeholder="Пароль"  title="Поле обязательно для заполнения!" required>
            <div сlass="more text-center"><input class="button-submit" type="submit" value="Войти"></div>
        </form>
        <div class="link form-control">Нет учётной записи? <a href="signup.php">Зарегистрируйтесь!</a></div>
    </div>
</body>
</html>
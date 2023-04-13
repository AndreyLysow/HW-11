<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Создание учетной записи</title>
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

<body class="bg">
    <div class="formContainer">
        <form class="form-group" method="post" action="php/processSignup.php">
            <h2 class="title">Создание учётной записи</h2>
            <div class="tip">
                Создайте учётную запись для получения наших услуг
            </div>
            <?php
if(isset($_SESSION['error'])){
echo '<div class="errorMsg">'. $_SESSION['error'] .'</div>';
unset($_SESSION['error']);
}
?>
            <label for="name">Имя пользователя</label>
            <input class="form-control" type="text" name="login" id="login" placeholder="Логин"  title="Поле обязательно для заполнения!" required >
            <labe for="password">Пароль</labe>
            <input class="form-control" type="password" name="password" id="password" placeholder="Пароль"  title="Поле обязательно для заполнения!" required >
            <label for="birthday">День рождения</label>
            <input class="form-control" type="date" name="birthday" id="birthday" >
            <div сlass="more text-center"><input class="button-submit" type="submit" value="Создать"></div>
        </form>
        <div class="link">
            Уже есть учётная запись? <a href="login.php">Войдите</a>
        </div>
    </div>
</body>
</html>

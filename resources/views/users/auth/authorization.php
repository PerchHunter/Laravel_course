<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
</head>
<body>
    <h3>Авторизация</h3>
    <form action="#" enctype="multipart/form-data" method="post" id="authorizationForm">
        <label>Ваш логин:<input type="text" name="login" autofocus/></label>
        <label>Ваш пароль:<input type="password" name="password"/></label>
        <label>Запомнить меня<input type="checkbox" name="rememberMe"/></label>
        <button form="authorizationForm" type="submit">Отправить</button>
    </form>
    <hr/>
    <a href="<?=route('homePage')?>">
        <button>На главную</button>
    </a>
</body>
</html>

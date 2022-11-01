<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная страница</title>
    <link rel="stylesheet" type="text/css" href="../css/homePage.css"/>
</head>
<body>
<div class="mainBlock">
    <h1 class="mainBlock__title">Добро пожаловать на главную страницу журнала NoFakeNews!</h1>
    <a class="mainBlock__links" href="<?=route('aboutUs')?>">
        <button class="link__button">О нас</button>
    </a>
    <a class="mainBlock__links" href="<?=route('users.news.allCategories')?>">
        <button class="link__button">Новости</button>
    </a>
    <a class="mainBlock__links" href="<?=route('users.auth.authorization')?>">
        <button class="link__button">Авторизоваться</button>
    </a>
    <a class="mainBlock__links" href="<?=route('admin.news.add')?>">
        <button class="link__button">Добавить новость</button>
    </a>
</div>
</body>
</html>

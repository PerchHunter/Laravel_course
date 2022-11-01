<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавить новость</title>
</head>
<body>
    <h3>Новая новость</h3>
    <form action="#" enctype="multipart/form-data" method="post" id="addNews">
        <label>Заголовок:<input type="text" name="titleNews" autofocus/></label>
        <label>Текст:<input type="text" name="fullText"/></label>
        <label>Краткое описание:<input type="text" name="shortDescription"/></label>
        <button form="addNews" type="submit">Добавить</button>
    </form>
    <hr/>
    <a href="<?=route('homePage')?>">
        <button>На главную</button>
    </a>
</body>
</html>

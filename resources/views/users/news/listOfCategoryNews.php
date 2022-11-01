<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$titleCategory?></title>
</head>
<body>
    <h3>Новости категории "<?=$titleCategory?>"</h3>
    <?php
        foreach($newsList as $item):?>
            <div>
                <h4><?=$item['title']?></h4>
                <p><?=$item['text']?></p>
                <a href="<?=route('users.news.concreteCategory', ['categoryKey'=> $categoryKey, 'newsId' => $item['id']])?>">
                    <button>Читать</button>
                </a>
            </div>
    <?php endforeach;?>
    <div>
        <a href="<?=route('homePage')?>">
            <button>На главную</button>
        </a>
        <a href="<?=route('users.news.allCategories')?>">
            <button>К категориям</button>
        </a>
    </div>
</body>
</html>

<hr>
<h1> Новость</h1>
<hr>
<div>
    <h2><?=$newsItem['title']?></h2>
    <p><?=$newsItem['discription']?></p>
    <p>Автор:<?=$newsItem['author']?></p>
    <br><hr>
</div>
<a href="<?=route('news.index')?>">
    Вернутся на главную
</a>
<br>
<a href="<?=route('news.category')?>">
    Выбор категории
</a>


<h1> Список новостей</h1>
<br>
<?php foreach($news as $newsItem): ?>
    <div>
        <h2><a href="<?=route('news.show', ['id'=>$newsItem['id']])?>"><?=$newsItem['title']?></a></h2>
        <p><?=$newsItem['discription']?></p>
        <p><?=$newsItem['author']?></p>
        <br><hr>
    </div>
<?php endforeach; ?>
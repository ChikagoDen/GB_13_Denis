<hr>
<h1>
    <?=$category?>
</h1>
<hr>
<?php foreach ($news as $newsItem): ?> 

    <?php for($i=0; $i<count($newsItem); $i++): ?>
        <div>
            <h2>
                <a href="<?=route('news.show', ['id'=>$newsItem[$i]['id']])?>">
                    <?=$newsItem[$i]['title']?>
                </a>
            </h2>
        </div>
        <p><?=$newsItem[$i]['discription']?></p>
        <p>Автор: <?=$newsItem[$i]['author']?></p>
    <?php  endfor; ?>

<?php endforeach ?>




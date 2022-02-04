<hr>
<h1> Категории новостей</h1>
<hr>
@foreach($news as $newsItemKey=>$value)
    <div>
        <h2>
            <a href="{{route('news.categoryShow', ['category'=>$newsItemKey])}}">
                <?=$newsItemKey?>
            </a>
        </h2>
    </div>
@endforeach
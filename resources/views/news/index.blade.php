@include('inc.include', ['name'=>'Сложный'])
<hr>
<h1> Главная  страница</h1>
<hr>
<h2> Правдивый новостной канал "Сплетни"</h2>
<p>
    Наш сайт предостовляет самую правдивую и актуальную информацию.
</p>
<a href="{{route('news.category')}}">
    <h3> Категории новостей</h3>
</a>    
<br>
<hr>       
<a href="<?=route('news.autorize')?>">
    <h3> авторизация</h3>
</a>   
<x-alert type="success" message="Успех!!!!!!!!!!"></x-alert>            
         
<x-alert type="warning" message="Ошибка!!!!!!!!!!"></x-alert> 

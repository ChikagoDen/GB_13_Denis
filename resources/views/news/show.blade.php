@extends('layouts.index')

@section('include')
    @include('inc.include', ['name'=>$newsItem['title']."- одна из лучших статей" ])
@endsection

@section('title')
    Статья: {{$newsItem['title']}}  
@endsection

@section('content')
    <div>
        <a href="{{route('news.index')}}">
            Вернутся на главную
        </a>
        <br>
        <a href="{{route('news.category')}}">
            Выбор категории
        </a>
    </div>
    <hr>
    <div class="card shadow-sm">
        <h3>
            Заголовок:{{$newsItem['title']}}
        </h3>
        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Картинка из новостей" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Фото из новостей</title>
            <rect width="100%" height="100%" fill="#55595c"/>
            <text x="50%" y="50%" fill="#eceeef" dy=".3em">Картинка из новостей</text>
        </svg>
        <div class="card-body">
            <p class="card-text">{{$newsItem['discription']}}</p>
            <p>Автор: {{$newsItem['author']}}</p> 
            <p>Дата создания:
                <small class="text-muted">{{now('Europe/Moscow')}}</small> 
            </p>                           
        </div>
    </div>
@endsection

@section('perehod')
@endsection







@extends('layouts.main')
@section('include')
    @include('inc.include', ['name'=>'Мы все знаем про '.$category])
@endsection
@section('title')
    Админ: категория - <?=$category?>
@endsection
@section('perehod')
@show 
@section('content')
    <div>
        <a href="{{route('admin.category.index')}}">
            Вернутся на главную
        </a>
    </div>
    <hr>
    <h3>
        Категория - {{$category}}
    </h3>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <a href="{{ route('admin.news.createNews')}}" type="button" class="btn btn-sm btn-outline-secondary">Добавить статью</a>
        </div>
    </div>
    <hr>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                
                @foreach ($news as $newsItem) 
                        <div class="card shadow-sm">
                            <h3>
                                Заголовок:
                                <a href="{{route('news.show', ['id'=>$newsItem->id])}}">
                                    {{$newsItem->Title}}
                                </a>
                            </h3>
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Картинка из новостей" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Фото из новостей</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Картинка из новостей</text>
                            </svg>
                            <div class="card-body">
                                <p class="card-text">{{$newsItem->Discription}}</p>
                                    <p>Автор: {{$newsItem->Avtor}}</p>                            
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary" 
                                            onclick="window.location.href='{{route('news.show', ['id'=>$newsItem->id])}}'" >
                                            {{-- onclick="window.location.href = '{{route ( 'news.show', ['id'=>$item->id])}}';" --}}
                                                Посмотреть 
                                        </button>
                                    </div>
                                </div>  
                                <br>
                                <div class="d-flex justify-content-between align-items-center">                                  
                                    <div class="btn-group">
                                        <button href="{{ route('admin.news.createNews')}}" type="button" class="btn btn-sm btn-outline-secondary">
                                            {{-- onclick="window.location.href={{route('admin.news.edit', ['id'=>$newsItem->id])}}" > --}}
                                            Удалить
                                        </button>
                                    </div>
                                </div>  
                                <br>                              
                                <div class="d-flex justify-content-between align-items-center">                                  
                                    <div class="btn-group">
                                        <a href="{{ route('admin.news.edit', ['news'=>$newsItem->id])}}" type="button" class="btn btn-sm btn-outline-secondary">
                                            Редактировать
                                        </a>
                                    </div>
                                </div>
                                <br>
                                <small class="text-muted">{{now('Europe/Moscow')}}</small> 
                            </div>
                        </div>
                @endforeach
            </div>
            <div>{{$news->Links()}}</div>
        </div>
        
    </div>
@endsection

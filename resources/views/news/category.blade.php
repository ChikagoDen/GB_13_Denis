@extends('layouts.index')
@section('include')
    @include('inc.include', ['name'=>'Самые свежие новости!!!'])
@endsection
@section('title')
    Выбор категорий  
@endsection
@section('content')
    <div>
        <a href="{{route('news.index')}}">
            Вернутся на главную
        </a>
    </div>
    <hr>
    <h3> Категории</h3>
    <br>
    @foreach($categorys as $category)
    <div>
        <h2>
            <a href="{{route('news.categoryShow', ['category'=>$category])}}">
                <?=$category->Title?>
            </a>
        </h2>
        <div> <p>Количество новостей {{$category->newsCategory->count()}}</p></div>
    </div>
@endforeach
{{$categorys->links()}}
@endsection
@section('perehod')
@endsection

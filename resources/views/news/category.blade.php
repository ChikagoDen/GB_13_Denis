@extends('layouts.index')
@section('include')
    @include('inc.include', ['name'=>'Самые свежие новости!!!'])
@endsection
@section('title')
    Выбор категорий  
@endsection
@section('content')
    <div>
        <a href="<?=route('news.index')?>">
            Вернутся на главную
        </a>
    </div>
    <hr>
    <h3> Категории</h3>
    <br>
    @foreach($news as $newsItemKey=>$value)
    <div>
        <h2>
            <a href="{{route('news.categoryShow', ['category'=>$newsItemKey])}}">
                <?=$newsItemKey?>
            </a>
        </h2>
    </div>
@endforeach
@endsection
@section('perehod')
@endsection

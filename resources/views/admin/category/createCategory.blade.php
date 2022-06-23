@extends('layouts.main')
@section('include')
@endsection
@section('title')
    Админ: новая категория
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
        Добавить категорию. 
    </h3>
    <hr>
    <form method="post" action="{{route('admin.category.store')}}">
        @csrf
        <label for="title">Название категории</label><br>
        <input type="text" id="title" size="30" name="Title" value="{{old('title')}}">
        <br>
        <label for="discription">Описание категории</label><br>
        <input type="text" id="discription" size="30" name="Discription" value="{{old('discription')}}">
        <br>        
        <small class="text-muted">{{now('Europe/Moscow')}}</small>
        <br><br>
        <input type="submit" value="Добавить категорию">
    </form>
@endsection
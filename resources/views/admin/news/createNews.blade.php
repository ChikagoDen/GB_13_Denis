@extends('layouts.main')
@section('include')
@endsection
@section('title')
    Админ: новая статья.
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
        Новая статья. 
    </h3>
    {{-- <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <a href="{{ route('admin.news.createNews')}}" type="button" class="btn btn-sm btn-outline-secondary">Добавить статью</a>
        </div>
    </div> --}}
    <hr>
    <form method="post" action="/im/">
        <label for="nameField">Заголовок</label><br>
        <input type="text" id="nameField" size="30" name="name">
        <br>
        <label for="messageField">Статья</label><br>
        <textarea name="message" id="messageField" cols="50" rows="5">Введите здесь свою статью...</textarea>
        <br>
        <label for="messageField">Краткое описание статьи</label><br>
        <textarea name="message" id="messageField" cols="50" rows="2">Краткое описание статьи...</textarea>
        <br>
        <label for="nameField">Автор</label><br>
        <input type="text" id="nameField" size="30" name="name">
        <br>
        <small class="text-muted">{{now('Europe/Moscow')}}</small>
        <br><br>
        <input type="submit" value="Отправить статью">
    </form>
@endsection
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
    <form method="post" action="{{route('admin.news.store',['q'=>1])}}">
        @csrf
        <label for="nameField">Заголовок</label><br>
        <input type="text" id="nameField" size="30" name="name" value="{{old('name')}}">
        <br>
        <label for="messageField">Статья</label><br>
        <textarea name="message" id="messageField" cols="50" rows="5" value="{!!old('message')!!}">Введите здесь свою статью...</textarea>
        <br>
        <label for="mesField">Краткое описание статьи</label><br>
        <textarea name="messageAck" id="mesField" cols="50" rows="2" value="{!!old('mesField')!!}">Краткое описание статьи...</textarea>
        <br>
        <label for="avtor">Автор</label><br>
        <input type="text" id="avtor" size="30" name="avtor" value="{{old('avtor')}}">
        <br>
        <label for="status">Статус</label><br>
        <select id="status" name="status">
            <option @if(old('status')==="Черновик") selected @endif>Черновик</option>
            <option @if(old('status')==="Активный") selected @endif>>Активный</option>
            <option @if(old('status')==="Закрыт") selected @endif>>Закрыт</option>
        </select>
        <br>        
        <small class="text-muted">{{now('Europe/Moscow')}}</small>
        <br><br>
        <input type="submit" value="Отправить статью">
    </form>
@endsection
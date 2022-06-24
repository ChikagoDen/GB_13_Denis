@extends('layouts.main')
@section('include')
@endsection
@section('title')
    Админ: новая статья.
@endsection
@section('perehod')
@show 
@section('content')
@include('inc.message')
    <div>
        <a href="{{route('admin.category.index')}}">
            Вернутся на главную
        </a>
    </div>
    <hr>
    <h3>
        Новая статья. 
    </h3>
    <hr>
    <form method="post" action="{{route('admin.news.store')}}">
        @csrf
        <label for="fk_categori_id">Категория</label><br>
        <select name="fk_categori_id" id="fk_categori_id">
            @foreach ($category as $item)
                <option value="{{$item->id}}">{{$item->Title}}</option>
                
            @endforeach
        </select>
        <br>        
        <label for="nameField">Заголовок</label><br>
        <input type="text" id="nameField" size="30" name="Title" value="{{old('name')}}">
        <br>
        <label for="messageField">Статья</label><br>
        <textarea name="Discription" id="messageField" cols="50" rows="5" value="{!!old('message')!!}">Введите здесь свою статью...</textarea>
        <br>
        <label for="mesField">Краткое описание статьи</label><br>
        <textarea name="DiscriptionCorotco" id="mesField" cols="50" rows="2" value="{!!old('mesField')!!}">Краткое описание статьи...</textarea>
        <br>
        <label for="avtor">Автор</label><br>
        <input type="text" id="avtor" size="30" name="Avtor" value="{{old('avtor')}}">
        <br>
        <label for="status">Статус</label><br>
        <select id="status" name="Status">
            <option @if(old('status')==="Черновик") selected @endif>Черновик</option>
            <option @if(old('status')==="Активный") selected @endif>>Активный</option>
            <option @if(old('status')==="Закрыт") selected @endif>>Закрыт</option>
        </select>
        <br>        
        <small class="text-muted">{{now('Europe/Moscow')}}</small>
        <br><br>
        <input type="submit" >
    </form>
@endsection
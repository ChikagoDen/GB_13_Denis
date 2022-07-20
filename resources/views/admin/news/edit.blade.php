@extends('layouts.main')
@section('include')
@endsection
@section('title')
    Админ: редактирование статьи.
@endsection
@section('perehod')
@show 
@section('content')
    <div>
        <a href="{{route('admin.index')}}">
            Выбрать категорию
        </a>
    </div>
    <hr>
    @include('inc.message')
    <h3>
        Редактировать статью. 
    </h3>
    <hr>
    <form method="post" action="{{route('admin.news.update',['news'=>$news])}}">
        @csrf
        @method('put');
        <label for="nameField">Заголовок</label><br>
        <input type="text" id="nameField" size="30" name="Title" value="{{$news->Title}}">
        @error("Title")<strong style="color: red">{{$message}}</strong>@enderror
        <br>
        <label for="Discription">Статья</label><br>
        <textarea name="Discription" id="Discription">{{$news->Discription}}</textarea>
        @error("Discription" )<strong style="color: red">{{$message}}</strong>@enderror
        <br>
        <label for="mesField">Краткое описание статьи</label><br>
        <textarea name="DiscriptionCorotco" id="mesField" >{!!$news->DiscriptionCorotco!!}</textarea>
        <br>
        <label for="avtor">Автор</label><br>
        <input type="text" id="avtor" size="30" name="Avtor" value="{{$news->Avtor}}">
        @error("Avtor")<strong style="color: red">{{$message}}</strong>@enderror
        <br>
        <label for="status">Статус</label><br>
        <select id="status" name="Status">
            <option @if($news->Status ==="Черновик") selected @endif>Черновик</option>
            <option @if($news->Status ==="Активный") selected @endif>Активный</option>
            <option @if($news->Status ==="Закрыт") selected @endif>Закрыт</option>
        </select>
        <br>        
        <small class="text-muted">{{now('Europe/Moscow')}}</small>
        <br><br>
        <input type="submit" value="Отправить статью">
    </form>
@endsection
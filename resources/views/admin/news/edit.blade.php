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
        <a href="{{route('admin.category.index')}}">
            Вернутся на главную
        </a>
    </div>
    <hr>
    <h3>
        Редактировать статью. 
    </h3>
    {{-- <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <a href="{{ route('admin.news.createNews')}}" type="button" class="btn btn-sm btn-outline-secondary">Добавить статью</a>
        </div>
    </div> --}}
    <hr>
    {{-- {{dd($news)}} --}}
    <form method="post" action="{{route('admin.news.update',['news'=>$news])}}">
        @csrf
        @method('put');
        <label for="nameField">Заголовок</label><br>
        <input type="text" id="nameField" size="30" name="Title" value="{{$news->Title}}">
        <br>
        <label for="messageField">Статья</label><br>
        <textarea name="Discription" id="messageField" cols="50" rows="5" >{{$news->Discription}}</textarea>
        <br>
        <label for="mesField">Краткое описание статьи</label><br>
        <textarea name="DiscriptionCorotco" id="mesField" cols="50" rows="2">{!!$news->DiscriptionCorotco!!}</textarea>
        <br>
        <label for="avtor">Автор</label><br>
        <input type="text" id="avtor" size="30" name="avtor" value="{{$news->Avtor}}">
        <br>
        <label for="status">Статус</label><br>
        <select id="status" name="status">
            <option @if($news->Status ==="Черновик") selected @endif>Черновик</option>
            <option @if($news->Status ==="Активный") selected @endif>>Активный</option>
            <option @if($news->Status ==="Закрыт") selected @endif>>Закрыт</option>
        </select>
        <br>        
        <small class="text-muted">{{now('Europe/Moscow')}}</small>
        <br><br>
        <input type="submit" value="Отправить статью">
    </form>
@endsection
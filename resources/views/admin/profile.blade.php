@extends('layouts.main')
@section('include')
@endsection
@section('title')
    Данные пользователей
@endsection
@section('perehod')
@show 
@section('content')
    <div>
        <a href="{{route('news.index')}}">
            Вернутся на главную
        </a>
        <br>
        <a href="{{route('admin.index')}}">
            Выбор категории
        </a>
    </div>
    <hr>
    <h3>Данные пользователей</h3>
    @foreach($users as $user)
    <div>
        <p>
          Имя пользователя:
          <a href="{{route('editProfile', ['user'=>$user->id])}}">  
            <?=$user->name?>
          </a>
          Емайл:<?=$user->email?>
          Администратор:@if($user->is_admin) да
          @endif
        </p>
    </div>
    @endforeach
<div> <p>Количество пользователей: {{$users->count()}}</p></div
@endsection



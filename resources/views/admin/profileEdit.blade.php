@extends('layouts.main')
@section('include')
@endsection
@section('title')
    Изменение учетных данных пользователя
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
    <h3>Изменение учетных данных пользователя {{$user->name}}</h3>
    @include('inc.message')
    <hr>
    <form method="post" action="{{route('updateProfile',['user'=>$user])}}">
        @csrf
        @method('put')
        <label for="name">Имя</label><br>
        <input type="text" id="name" size="30" name="name" value="{{$user->name}}">
        <br>
        <label for="email">Почта</label><br>
        <input type="text" id="email" size="30" name="email" value="{{$user->email}}">
        <br>   
        <label for="is_admin">Назначить администратором 1-да,0-нет</label><br>
        <select id="is_admin" name="is_admin">
            <option @if($user->is_admin ===0) selected @endif>0</option>
            <option @if($user->is_admin ===1) selected @endif>1</option>
        </select>
        <br>      
        <small class="text-muted">{{now('Europe/Moscow')}}</small>
        <br><br>
        <input type="submit" value="Изменить">
    </form>
@endsection
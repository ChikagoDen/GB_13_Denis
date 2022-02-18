@extends('layouts.index')
@section('include')
    @include('inc.include', ['name'=>'Мы знаем правду!!!'])
@endsection
@section('title')
    Авторизация.  
@endsection
@section('content')
    <h3> Авторизация</h3>
    <br>
    <form method="post" action="/login/">
        <table>
            <tr>
                <td><label for="loginField">Логин</label></td>
                <td><input id="loginField" type="text" name="login"></td>
            </tr>
            <tr>
                <td><label for="passwordField">Пароль</label></td>
                <td><input id="passwordField" type="password" name="password"></td>
            </tr>
            <tr>
                <td><label>
                    Запомнить меня
                    <input type="checkbox" name="breakfast" checked>
                </td></label>
            </tr>    
            <tr>
                <td colspan="2" style="text-align: center"><input type="submit" value="Войти"></td>
            </tr>
        </table>
    </form>  
@endsection
@section('perehod')
    <hr>
    <a href="<?=route('news.index')?>">
        Вернутся на главную
    </a>
    <hr>
@endsection


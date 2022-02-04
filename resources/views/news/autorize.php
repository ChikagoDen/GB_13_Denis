<hr>
<h1> Авторизация</h1>
<hr>
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
<a href="<?=route('news.index')?>">
    Вернутся на главную
</a>
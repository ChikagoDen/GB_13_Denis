
<hr>
<h1> Добавить новость</h1>
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
    <br><br>
    <input type="submit" value="Отправить статью">
</form>

<a href="<?=route('news.index')?>">
    Вернутся на главную
</a>
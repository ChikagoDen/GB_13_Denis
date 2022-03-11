

    <div>

    </div>
    <hr>
    <h3>
        Добавить категорию. 
    </h3>
    <hr>
    <form method="post" action="/im/">
        <label for="title">Название категории</label><br>
        <input type="text" id="title" size="30" name="name">
        <br>
        <label for="discription">Описание категории</label><br>
        <input type="text" id="discription" size="30" name="name">
        <br>        
        <small class="text-muted">{{now('Europe/Moscow')}}</small>
        <br><br>
        <input type="submit" value="Добавить категорию">
    </form>

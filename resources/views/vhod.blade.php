<!DOCTYPE html>
<html>
    @extends("layouts.down")
    @section("title")
        <title>Вход ~ Дизайн-студия Иванова Егора «Жаренное Мясо»</title>
    @endsection("title")
    
    @section("down")
    @endsection("down")
    
    <body>
        <div class="vhod-page">
            <h1>
                Авторизация
            </h1>
            <h4>
                Войдите, чтобы иметь тут все возможности
            </h4>
            <form action="vhod.php">
                <ul>
                    <li><p>Логин</p><input placeholder="Владимир Владимирович 247" size="40"></li>
                    <li><p>Пароль</p><input type="password" placeholder="Крым это искусство которое наше" size="40"></li>
                    <li><a href="/"><input type="submit" value="Войти"></a></li>
                    <li><a href="/zabul-parol">Забыл пароль</a><a href="/registraciya">Регистрация</a></li>
                </ul>
            </form> 
        </div>
        
        </body>
</html>

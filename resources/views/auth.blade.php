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
            <form method="get" action="/vhod" id="login">
                <ul>
                    <li><p>Логин</p><input type="text" name="login" placeholder="Владимир Владимирович 247" size="40"></li>
                    <li><p>Пароль</p><input type="password" name="password" placeholder="Крым это искусство которое наше" size="40"></li>
                    <li><a href="C"><input type="submit" value="Войти"></a></li>
                    <li><a href="/zabul-parol">Забыл пароль</a><a href="/registraciya">Регистрация</a></li>
                </ul>
            </form> 
        </div>
        
        </body>
</html>

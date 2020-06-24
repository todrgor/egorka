<!DOCTYPE html>
<html>
    @extends("layouts.down")
    @section("title")
        <title>Регистрация ~ Дизайн-студия Иванова Егора «Жаренное Мясо»</title>
    @endsection("title")
    
    @section("down")
    @endsection("down")
    
    <body>
        <div class="vhod-page">
            <h1>
                Регистрация
            </h1>
            <h4>
                Зарегистрируйтесь и войдите, чтобы иметь тут все возможности
            </h4>
            <form action="vhod.php">
                <ul>
                    <li><p>Логин</p><input placeholder="Владимир Владимирович 247" size="40"></li>
                    <li><p>Почта</p><input placeholder="Владимир Владимирович 247" size="40"></li>
                    <li><p>Телефон</p><input placeholder="Владимир Владимирович 247" size="40"></li>
                    <li><p>Адрес</p><input placeholder="Земля" size="40"></li>
                    <li><p>Группа крови</p><input placeholder="2" size="40"></li>
                    <li><p>Любимый фильм</p><input placeholder="" size="40"></li>
                    <li><p>Неюбимый клип</p><input placeholder="" size="40"></li>
                    <br>
                    <li><p>Пароль</p><input type="password" placeholder="Крым это искусство которое наше" size="40"></li>
                    <li><p>Еще раз</p><input type="password" placeholder="Крым это " size="40"></li>
                    <li><a href="/"><input type="submit" value="Зарегистрироваться"></a></li>
                    <li><a href="/vhod">Уже есть аккаунт</a>
                </ul>
            </form> 
        </div>
        
        </body>
</html>

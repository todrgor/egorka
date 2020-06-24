<!DOCTYPE html>
<html>
    @extends("layouts.down")
    @section("title")
        <title>Настройки ~ Дизайн-студия Иванова Егора «Жаренное Мясо»</title>
    @endsection("title")
    
    @section("down")
    @endsection("down")
    
    <body>
        <div class="nastr">
            <h1>Настройки</h1>
            <div class="sleva-settings">
                <div class="foto-acc-settings"></div>
                <p>Сменить фото</p>
            </div>
            <ul>
                <li><p>Логин</p><input></li>
                <li><p>Почта</p><input></li>
                <li><p>Телефон</p><input></li>
            </ul>
            <div class="novuy-parol-knopka"><p>Сменить пароль</p><div class="novuy-parol"></div></div>
            <div class="novuy-parol-knopka"><p>Удалить профиль</p></div>
            <div class="sohra-izme-knopka"><a href="/"><p>Сохрантиь изменения</p></a></div>
        </div>
        
        </body>
</html>

<!DOCTYPE html>
<html>
    @extends("layouts.down")
    @section("title")
        <title>Поиск по сайту ~ Дизайн-студия Иванова Егора «Жаренное Мясо»</title>
    @endsection("title")
    
    @section("down")
    @endsection("down")
    
    <body>
        <div class="poisk-page">
                <h1>
                    Поиск
                </h1>
                <h4>
                    Введите, что хотели бы найти на сайте
                </h4>
                <form action="poisk.php">
                    <input placeholder="Жаренное мясо адекватность" size="40">
                    <div class="poisk-page-fon">
                        <input type="submit" value="">
                    </div>
                </form> 
            </div>
        
    </body>
</html>

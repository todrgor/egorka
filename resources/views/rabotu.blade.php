<!DOCTYPE html>
<html>
    @extends("layouts.down")
    @section("title")
        <title>Работы ~ Дизайн-студия Иванова Егора «Жаренное Мясо»</title>
    @endsection("title")
    
    @section("down")
    @endsection("down")
    
    
    <head>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="jscript.js"></script>
        <script type="text/javascript">
            $(function() {
                $(window).scroll(function() {
                    if($(this).scrollTop() >= 2000) {
                    $('.to-up').fadeIn();
                } else {
                    $('.to-up').fadeOut();
                }
            });
            $('.to-up').click(function() {
                $('body,html').animate({scrollTop:0},2000);
            });
            });
            
            $(function() {
                $(window).scroll(function() {
                    if($(this).scrollTop() >= 800) {
                    $('.to-zakaz').fadeIn();
                } else {
                    $('.to-zakaz').fadeOut();
                }
            });
            });
            
            $(function() {
                $(window).scroll(function() {
                    if(($(this).scrollTop() >= 5200)&&($(this).scrollTop() <= 5400)) {
                    $('.to-up-to-zakaz').fadeOut();
                } else {
                    $('.to-up-to-zakaz').fadeIn();
                }
            });
            });
            
        </script>
    </head>
    
    <body>
        <div class="hello-block-nashi-rabotu">
            <h1>Задизайнено</h1>
            
            
            <p>Почувствуй этот уровень</p>
        </div>
        
        <div class="nashi-rabotu-1">
            <h1>Все последние работы</h1>
            <ul>
                <li class="spisok-rabot-vubrano-eto">Всё</li>
                <li>Веб</li>
                <li>Граф</li>
                <li>Пром</li>
                <li>Город</li>
                <li>Интерьер</li>
                <li>Книги</li>
                <li>Упаковка</li>
                <li>Еда</li>
                <li>Авто</li>
                <li>Музыка</li>
                <li>Культура</li>
                <li>Экспресс-дизайн</li>
                <li>Спорт</li>
                <li>Ещё</li>
            </ul>
            
            @foreach($rabotu as $rabotu)
            <div class="nashi-rabotu-1-odin" id="{{$rabotu->url_foto}}">
                <div class="dlya-hover-3">
                    <h1>{{$rabotu->title}}</h1>
                </div>
            </div>
            @endforeach
            
        </div>
        
        
        </body>
</html>

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
            
            <div class="nashi-rabotu-1-odin" id="argus">
                <div class="dlya-hover-3">
                    <h1>Логотип компании «Агрус»</h1>
                </div>
            </div>
            <div class="nashi-rabotu-1-odin" id="ten-fellas-600">
                <div class="dlya-hover-3">
                    <h1>Логотип барбершопа «Тен фэллас»</h1>
                </div>
            </div>
            <div class="nashi-rabotu-1-odin" id="moscow-zoo-identity-animals">
                <div class="dlya-hover-3">
                    <h1>Бренд-стратегия и айдентика Московского зоопарка</h1>
                </div>
            </div>
            <div class="nashi-rabotu-1-odin" id="vista-600b">
                <div class="dlya-hover-3">
                    <h1>Логотип клиники «Виста»</h1>
                </div>
            </div>
            <div class="nashi-rabotu-1-odin" id="shipn-600">
                <div class="dlya-hover-3">
                    <h1>Логотип компании «Шипин Ю-эс»</h1>
                </div>
            </div>
            <div class="nashi-rabotu-1-odin" id="mimisocks-600">
                <div class="dlya-hover-3">
                    <h1>Логотип компании «Мимисокс»</h1>
                </div>
            </div>
            <div class="nashi-rabotu-1-odin" id="cloning-facility-600">
                <div class="dlya-hover-3">
                    <h1>Логотип компании «Клонинг фасилити»</h1>
                </div>
            </div>
            <div class="nashi-rabotu-1-odin" id="gazprom-eye-clinic-600">
                <div class="dlya-hover-3">
                    <h1>Сайт клиники микрохирургии глаза «Газпрома»</h1>
                </div>
            </div>
            <div class="nashi-rabotu-1-odin" id="kovodstvo6-600">
                <div class="dlya-hover-3">
                    <h1>Шестое издание «Ководства» Иванова</h1>
                </div>
            </div>
            <div class="nashi-rabotu-1-odin" id="drinks-app-600">
                <div class="dlya-hover-3">
                    <h1>Логотип приложения «Дринкс»</h1>
                </div>
            </div>
            <div class="nashi-rabotu-1-odin" id="abs-energo">
                <div class="dlya-hover-3">
                    <h1>Сайт «АБС Электро»</h1>
                </div>
            </div>
            <div class="nashi-rabotu-1-odin" id="design-system-600">
                <div class="dlya-hover-3">
                    <h1>Дизайн-система «Билайн-бизнеса»</h1>
                </div>
            </div>
        </div>
        
        
        </body>
</html>

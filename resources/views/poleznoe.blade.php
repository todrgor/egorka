<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Дизайн-студия Иванова Егора «Жаренное Мясо» ~ Полезное</title>
        <link rel="stylesheet" href="main.css">
        <link rel="icon" type="image/png" href="images/favicon.ico" sizes="48x48">
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
        <div class="hello-block-poleznoe">
            <h1>Полезные инструменты</h1>
            <p>Будут очень полезны и приятны</p>
        </div>
        
        <div class="block-poleznoe-1">
            <h1>Работа с текстом</h1>
            <div class="block-poleznoe-1-odin" id="tipograf-601">
                <h1>Типограф</h1>
                <p>Программа подготовки текстов для публикации на вебе</p>
            </div>
            <div class="block-poleznoe-1-odin" id="orfograf-601">
                <h1>Орфограф</h1>
                <p>Проверяет правописание на русском и английском, отдельные тексты или целые веб-страницы</p>
            </div>
            <div class="block-poleznoe-1-odin" id="reformator-601">
                <h1>Реформатор</h1>
                <p>Визуальный редактор текстов</p>
            </div>
            <div class="block-poleznoe-1-odin" id="decoder-601">
                <h1>Декодер</h1>
                <p>Расшифровывает письма, пришедшие в неизвестных науке кодировках</p>
            </div>
            <div class="block-poleznoe-1-odin" id="transckriptor-601">
                <h1>Транскриптор</h1>
                <p>Инструмент для транскрибирования текстов с 16 языков на русский</p>
            </div>
            <div class="block-poleznoe-1-odin" id="registraturus-601">
                <h1>Регистратурус</h1>
                <p>Переводит прописные буквы в строчные. Для тех, кому лень перепечатывать</p>
            </div>
            
        </div>
        
        <div class="block-poleznoe-2">
            <h1>Работа с цветом</h1>
            <div class="block-poleznoe-2-odin" id="color-601">
                <h1>Колор</h1>
                <p>Автоматически раскрашивает любое монохромное изображение на основе алгоритмов машинного обучения</p>
            </div>
            <div class="block-poleznoe-2-odin" id="vkusover-601">
                <h1>Вкусомер</h1>
                <p>Определяет уровень дизайнерского вкуса</p>
            </div>
            <div class="block-poleznoe-2-odin" id="koleydoskopus-601">
                <h1>Колейдоскопус</h1>
                <p>Превращает звук в иллюстрации.</p>
            </div>
        </div>
        
        
        <div class="big-footer">
            <div class="big-footer-2">
                <div class="big-footer-text">
                    <p>Дизайн-студия Иванова Егора «Жаренное Мясо»</p>
                    <p>2020г. — ∞</p>
                    <p>Все права возможно защищены.</p>
                </div>
            </div>
        </div>
        
        <div class="mini-footer">
            
            <div class="to-up-to-zakaz">
            <div class="to-zakaz">
                <a href="#zakazat~">Заказать дизайн</a>
            </div>
            <div class="to-up">
                <div class="to-up-2">
                </div>
            </div>
        </div>
            <ul class="submenu-3">
                <li><a href="/">Новое</a></li>
                <li><a href="/poleznoe">Полезное</a></li>
                <li><a href="/rabotu">Наши работы</a></li>
                <li><a href="/pro_nas">О нас & контакты</a></li>
                <li><a href="/p">Наши продукты</a></li>
                <li><a href="#">Обучение</a></li>
                <li><a href="/zakazat">Заказать</a></li>
            </ul>
        
            <div class="header-cloced">
            <div class="header-cloced-logo">
                <a href="/">
                </a>
            </div>
            <div class="header-cloced-knopka">
                <div class="header-cloced-knopka-img">
                    <div class="header-cloced-knopka-img-2">

                    </div>
                </div>
                <div class="full-menu">
                    <div class="part-1">
                        <div class="part-1-up">
                            <div class="header-opened-photo-i-podpis">
                               <div class="header-opened-photo">
                                   <p>Здесь будет ваше фото.</p>
                                </div>
                                <div class="header-opened-podpis">
                                    <h1>Егор Иванов</h1>
                                    <p>Ведущий дизайнер</p>
                                </div>
                            </div>
                            <div class="accaunt-vozmozhnosti">
                                <ul class="submenu-1">
                                    <li><a href="/vhod">Войти</a></li>
                                    <li><a href="/nastroyki">Настройки</a></li>
                                    <li><a href="/korzina">Корзина</a></li>
                                    <li><a href="/poisk">Поиск</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="poisk-v-menu">
                            <form action="poisk.php">
                                <input placeholder="Например: Сколько стоит сделать сайт" size="40">
                                <div class="poisk-fon-v-menu">
                                    <input type="submit" value="">
                                </div>
                            </form> 
                        </div>
                    </div>
                    <div class="part-2">
                        <ul class="submenu-2">
                            <li><a href="/index">Новое</a></li>
                            <li class="na-etoy-stranice"><a href="/poleznoe">Полезное</a></li>
                            <li><a href="/rabotu">Наши работы</a></li>
                            <li><a href="/pro_nas">О нас & контакты</a></li>
                            <li><a href="p">Наши продукты</a></li>
                            <li><a href="#">Обучение</a></li>
                            <li><a href="/zakazat">Заказать</a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    
        </div>
        
        </body>
</html>

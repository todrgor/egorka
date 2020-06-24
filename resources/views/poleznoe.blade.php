<!DOCTYPE html>
<html>
    @extends("layouts.down")
    @section("title")
        <title>Дизайн-студия Иванова Егора «Жаренное Мясо» ~ Полезное</title>
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
        
        
        </body>
</html>

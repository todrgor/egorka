<!DOCTYPE html>
<html>
    @extends("layouts.down")
    @section("title")
        <title>Про нас ~ Дизайн-студия Иванова Егора «Жаренное Мясо»</title>
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
        <div class="hello-block-pro-nas">
            <h1>Студия Егора Иванова</h1>
            <p>Настало время узнать о нас</p>
        </div>
        
        <div class="pro-nas">
            <div class="pro-nas-p1">
                <ul>
                    <li class="pro-nas-vubrano-eto"><a href="/pro_nas">Кто мы</a></li>
                    <li><a href="/pro_nas-konstitucia">Конституция</a></li>
                    <li><a href="/pro_nas-sostav">Состав</a></li>
                    <li><a href="/pro_nas-svyaz">Связь</a></li>
                </ul>
                
                <p>Студия Егора Иванова основана в 2020 году в Иркутске.</p>

                <p>Основные направления — промышленный дизайн, городской дизайн, графический дизайн, дизайн среды, системы навигации, создание сайтов, проектирование интерфейсов, создание шрифтов, дизайн паттернов, архитектура и книгоиздание.</p>

                <p>Мы существуем так, как нам нравится и как считаем правильным. Мы принципиально не работаем с частными лицами, политическими и религиозными организациями, мудаками, а также с теми, чьи убеждения противоречат нашим. Наша работа заключается в том, чтобы найти наиболее эффективный, удобный и красивый способ решения задачи.</p>

                <p>Сегодня в студии 70 дизайнеров, в портфолио 4302 проекта.</p>
            </div>
            <div class="pro-nas-p2"></div>
        </div>
        
        </body>
</html>

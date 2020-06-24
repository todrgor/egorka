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
        
        <div class="pro-nas-sostav">
            <div class="pro-nas-p1">
                <ul>
                    <li><a href="/pro_nas">Кто мы</a></li>
                    <li><a href="/pro_nas-konstitucia">Конституция</a></li>
                    <li class="pro-nas-vubrano-eto"><a href="/pro_nas-sostav">Состав</a></li>
                    <li><a href="/pro_nas-svyaz">Связь</a></li>
                </ul>
                
                <ul class="sostavchik-ul">
                    <li class="sostavchik"><div class="foto-men"></div><div class="men-podpis">gogoogogn</div></li>
                    <li class="sostavchik"><div class="foto-men"></div><div class="men-podpis">gogoogogn</div></li>
                    <li class="sostavchik"><div class="foto-men"></div><div class="men-podpis">gogoogogn</div></li>
                    <li class="sostavchik"><div class="foto-men"></div><div class="men-podpis">gogoogogn</div></li>
                </ul>
            </div>
            <div class="pro-nas-sostav-pic"></div>
        </div>
        
        
        </body>
</html>

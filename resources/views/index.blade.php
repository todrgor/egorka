
<!DOCTYPE html>
<html>
    @extends("layouts.down")
    @section("title")
        <title>Дизайн-студия Иванова Егора «Жаренное Мясо» ~ Новое</title>
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
        
        <div class="hello-block">
            <div class="is-who" id="is-who">
                <div class="dlya-hover">
                    <a href=/zakazat>
                    <h1>Cтудия Иванова Егора «Жаренное Мясо»</h1>
                    <p>Всё, что нужно для отличного вида и креативного решения — в одной студии.</p>
                    </a>
                </div>
            </div>
            <div class="umeyem-odin" id="delaem-saytu">
                <div class="dlya-hover">
                    <a href="/zakazat">
                    <p>Сайты</p>
                    </a>
                </div>
            </div>
            <div class="umeyem-odin" id="delaem-logo">
                <div class="dlya-hover">
                    <a href="/zakazat">
                    <p>Логотипы</p>
                    </a>
                </div>
            </div>
            <div class="umeyem-odin" id="delaem-upakovka">
                <div class="dlya-hover">
                    <a href="/zakazat">
                    <p>Упаковка</p>
                    </a>
                </div>
            </div>
            <div class="umeyem-odin" id="delaem-prilozheniya">
                <div class="dlya-hover">
                    <a href="/zakazat">
                    <p>Приложения</p>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="last-novosti-block">
            <h1>Из нового</h1>
            
            @foreach($index as $index)
            <div class="last-novosti-odin" id="{{$index->url_foto}}">
                <div class="dlya-hover-2">
                    <a href="/rabotu" class="ssulka-full-block">
                        <h1>{{$index->title}}</h1>
                    </a>
                </div>
            </div>
            @endforeach
            
        </div>
        
        <div class="podrobno-pro-umeyem">
            <div class="podrobno-pro-umeyem-logotipu" id="express-disign-600">
                    <a href=#exp-d>
                        <h1>Экспресс-дизайн</h1>
                        <p>Не просто быстро, но и с трепетным подходом к каждой детали.</p>
                        <p>Красивый грамотный дизайн каждый день будет олицетворять дух, эмоции и пользу вашей компании и её продуктов. Тонкое сочетание цветов и трепетно подобранные формы, цвета и шрифт сольются в один единый логотип. Разработка максимум неделю.</p>
                     </a>
             </div>
                   
        </div>
        
        <div class="otzuvu">
            <h1>Клиенты о нас</h1>
            <div class="otzuv-odin" id="otzuv-like">
                <div class="dlya-hover-2">
                    <h1>Солодников Гордей Витальевич</h1>
                    <p>Упаковка товара</p>
                    <p>«всё стильно чётко в кайф. Для оформления новых линеек продукции снов сюда обращусь»</p>
            </div>
            </div>
            <div class="otzuv-odin" id="otzuv-like">
                <div class="dlya-hover-2">
                    <h1>Дунцин Грегор Идуванович</h1>
                    <p>Граф</p>
                    <p>«Вышло годно. Надеюсь, за эту работу из студии никого не уволят. Исходники взял в работу. На сайте выглядит прекрасно: wjooh.ru.»</p>
            </div>
            </div>
            <div class="otzuv-odin" id="otzuv-dislike">
                <div class="dlya-hover-2">
                    <h1>Булыгин Афанасий Иванович</h1>
                    <p>Логотип компании</p>
                    <p>«вот вроде и приятно красиво, а вроде и полезнее потратить мог»</p>
            </div>
            </div>
            <div class="otzuv-odin" id="otzuv-like">
                <div class="dlya-hover-2">
                    <h1>Портнов Рифат Иннокентьевич</h1>
                    <p>Сайт компании</p>
                    <p>«иннокентий интернешнл с новым грамотным сайтом захватит этот мир»</p>
                 </div>
            </div>
        </div>
        
        <div class="sdvoennuy">
                <div class="poleznoe">
                    <h1>
                        Полезное
                    </h1>
                    <p>
                        Пригодится для работы с графикой, цветом, шрифтом и фото
                    </p>
                    <div class="poleznoe-odin">
                        <div class="poleznoe-odin-img" id="tipograf-600"><div class="dlya-hover-3"><a href="/poleznoe">Типограф</a></div></div>
                    </div>
                    <div class="poleznoe-odin">
                        <div class="poleznoe-odin-img" id="orfograf-600"><div class="dlya-hover-3"><a href="/poleznoe">Орфограф</a></div></div>
                    </div>
                    <div class="poleznoe-odin">
                        <div class="poleznoe-odin-img" id="reformator-600"><div class="dlya-hover-3"><a href=#polez>Реформатор</a></div></div>
                    </div>
                    <div class="poleznoe-odin">
                        <div class="poleznoe-odin-img" id="decoder-600"><div class="dlya-hover-3"><a href="/poleznoe">Декодер</a></div></div>
                    </div>
                    <div class="poleznoe-odin">
                        <div class="poleznoe-odin-img" id="transckriptor-600"><div class="dlya-hover-3"><a href="/poleznoe">Транскриптор</a></div></div>
                    </div>
                    <div class="poleznoe-odin">
                        <div class="poleznoe-odin-img" id="registraturus-600"><div class="dlya-hover-3"><a href="/poleznoe">Регистратурус</a></div></div>
                    </div>
                    <div class="poleznoe-odin">
                        <div class="poleznoe-odin-img" id="color-600"><div class="dlya-hover-3"><a href="/poleznoe">Колор</a></div></div>
                    </div>
                    <div class="poleznoe-odin">
                        <div class="poleznoe-odin-img" id="vkusover-600"><div class="dlya-hover-3"><a href="/poleznoe">Вкусомер</a></div></div>
                    </div>
                    <div class="poleznoe-odin">
                        <div class="poleznoe-odin-img" id="koleydoskopus-600"><div class="dlya-hover-3"><a href="/poleznoe">Колейдоскопус</a></div></div>
                    </div>
                    
                </div>
                
                <div class="poisk">
                    <h1>
                        Поиск
                    </h1>
                    <p>
                        Введите, что хотели бы найти на сайте
                    </p>
                    <form action="poisk.php">
                        <input placeholder="Жаренное мясо адекватность" size="40">
                        <div class="poisk-fon">
                            <input type="submit" value="">
                        </div>
                    </form> 
                </div>
            </div>
        
        <div class="all-2">
            <div class="komanda-studiya-processu">
                <h1>
                    Наша команда, студия и процессы
                </h1>
                Все как на ладони
                <div class="komanda-studiya-processu-pokaz">
                    <div class="komanda-studiya-processu-odin">
                        <div class="komanda-studiya-processu-odin-img" id="man-1">
                            <a href=/pro_nas></a> 
                        </div>
                        <div class="komanda-studiya-processu-podpis">
                            <a href=/pro_nas>Егор Иванов, 28 лет</a> 
                        </div>
                    </div>
                    <div class="komanda-studiya-processu-odin">
                        <div class="komanda-studiya-processu-odin-img" id="man-2">
                            <a href=/pro_nas></a> 
                        </div>
                        <div class="komanda-studiya-processu-podpis">
                            <a href=/pro_nas>Егор Иванов-Дятлов, 18 лет</a> 
                        </div>
                    </div>
                    <div class="komanda-studiya-processu-odin">
                        <div class="komanda-studiya-processu-odin-img" id="man-3">
                            <a href=/pro_nas></a> 
                        </div>
                        <div class="komanda-studiya-processu-podpis">
                            <a href=/pro_nas>Егор Иванкин, 22 года</a> 
                        </div>
                    </div>
                    <div class="komanda-studiya-processu-odin">
                        <div class="komanda-studiya-processu-odin-img" id="in-tkutsk">
                            <a href=/pro_nas></a> 
                        </div>
                        <div class="komanda-studiya-processu-podpis">
                            <a href=/pro_nas>Из Иркутска на всю планету</a> 
                        </div>
                    </div>
                    <div class="komanda-studiya-processu-odin">
                        <div class="komanda-studiya-processu-odin-img" id="sega-tennis-in-pereruvah">
                            <a href=/pro_nas></a> 
                        </div>
                        <div class="komanda-studiya-processu-podpis">
                            <a href=/pro_nas>В перерывах играем в теннис или сегу</a> 
                        </div>
                    </div>
                    <div class="komanda-studiya-processu-odin">
                        <div class="komanda-studiya-processu-odin-img" id="libim-myaso">
                            <a href=/pro_nas></a> 
                        </div>
                        <div class="komanda-studiya-processu-podpis">
                            <a href=/pro_nas>Любим вкусное мясо, но это уже наверное понятно</a> 
                        </div>
                    </div>
                    <div class="komanda-studiya-processu-escho">
                        <div class="komanda-studiya-processu-escho-text">
                            <a href=/pro_nas>Ещё</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="all-3">
            <div class="offer-zakaz-all">
                <h1>
                    Что хотите задизайнить?
                </h1>
                <p>Будет в лучшем качестве. И дорого.</p>
                <div class="offer-zakaz-knopka">
                    <div class="komanda-studiya-processu-escho-text">
                        <a href="/zakazat">Сайт</a>
                    </div>
                </div>
                <div class="offer-zakaz-knopka">
                    <div class="komanda-studiya-processu-escho-text">
                        <a href="/zakazat">Интерьер</a>
                    </div>
                </div>
                <div class="offer-zakaz-knopka">
                    <div class="komanda-studiya-processu-escho-text">
                        <a href="/zakazat">Логотип</a>
                    </div>
                </div>
                <div class="offer-zakaz-knopka">
                    <div class="komanda-studiya-processu-escho-text">
                        <a href="/zakazat">Презентация</a>
                    </div>
                </div>
                <div class="offer-zakaz-knopka">
                    <div class="komanda-studiya-processu-escho-text">
                        <a href="/zakazat">Приложение</a>
                    </div>
                </div>
                <div class="offer-zakaz-knopka">
                    <div class="komanda-studiya-processu-escho-text">
                        <a href="/zakazat">Интерфейс</a>
                    </div>
                </div>
                <div class="offer-zakaz-knopka">
                    <div class="komanda-studiya-processu-escho-text">
                        <a href="/zakazat">Навигация</a>
                    </div>
                </div>
                <div class="offer-zakaz-knopka">
                    <div class="komanda-studiya-processu-escho-text">
                        <a href="/zakazat">Шрифт</a>
                    </div>
                </div>
                <div class="offer-zakaz-knopka">
                    <div class="komanda-studiya-processu-escho-text">
                        <a href="/zakazat">Архитектура</a>
                    </div>
                </div>
                <div class="offer-zakaz-knopka">
                    <div class="komanda-studiya-processu-escho-text">
                        <a href="/zakazat">Пром</a>
                    </div>
                </div>
                <div class="offer-zakaz-knopka">
                    <div class="komanda-studiya-processu-escho-text">
                        <a href="/zakazat">Реклама</a>
                    </div>
                </div>
                <div class="offer-zakaz-knopka">
                    <div class="komanda-studiya-processu-escho-text">
                        <a href="/zakazat">Ещё</a>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="productu-fon">
            <div class="productu">
                <h1>
                    Попробуйте наши продукты
                </h1>
                <p>Мы оооочень старались</p>
                <div class="odin-product">
                    <div class="odin-product-img" id="krasivuy-paket"><a href=#pr></a></div>
                    <div class="odin-product-podpis"><a href=#pr>Пакет «Красивый»<br>249 ₽</a></div>
                </div>
                <div class="odin-product">
                    <div class="odin-product-img" id="produkt-password"><a href=#pr></a></div>
                    <div class="odin-product-podpis"><a href=#pr>Обложка для паспорта «Пароль»<br>289 ₽</a></div>
                </div>
                <div class="odin-product">
                    <div class="odin-product-img" id="vse-geroi-u-psihologa"><a href=#pr></a></div>
                    <div class="odin-product-podpis"><a href=#pr>Все герои у психолога<br>499 ₽</a></div>
                </div>
                <div class="odin-product">
                    <div class="odin-product-img" id="futbolka-bez-vsego"><a href=#pr></a></div>
                    <div class="odin-product-podpis"><a href=#pr>Футболка без всего<br>899 ₽</a></div>
                </div>
                <div class="odin-product">
                    <div class="odin-product-img" id="konstruccuu"><a href=#pr></a></div>
                    <div class="odin-product-podpis"><a href=#pr>Конструкции. Почему они стоят и почему разваливаются<br>1399 ₽</a></div>
                </div>
                <div class="odin-product">
                    <div class="odin-product-img" id="ecocub"><a href=#pr></a></div>
                    <div class="odin-product-podpis"><a href=#pr>Экокуб «Посади герберу»<br>499 ₽</a></div>
                </div>
                <div class="odin-product-escho">
                    <a href=#eche-pr>Ещё</a>
                </div>
            </div>
        </div>
        
        
        </body>
</html>

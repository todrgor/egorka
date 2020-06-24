<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        @yield("title")
        <link rel="stylesheet" href="main.css">
        <link rel="icon" type="image/png" href="images/favicon.ico" sizes="48x48">
        
    </head>
    
    <body>
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
                            <a href="/zakazat">Заказать дизайн</a>
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
                        <li><a href="/productu">Наши продукты</a></li>
                        <li><a href="/obuchenie">Обучение</a></li>
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
                                    <li class="na-etoy-stranice"><a href="/">Новое</a></li>
                                    <li><a href="/poleznoe">Полезное</a></li>
                                    <li><a href="/rabotu">Наши работы</a></li>
                                    <li><a href="/pro_nas">О нас & контакты</a></li>
                                    <li><a href="/productu">Наши продукты</a></li>
                                    <li><a href="/obuchenie">Обучение</a></li>
                                    <li><a href="/zakazat">Заказать</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                </div>

        @yield("down")
    </body>
</html>
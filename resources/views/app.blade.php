<!DOCTYPE html>
<html>
<!--<![endif]-->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/includes/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/includes/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/includes/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/includes/slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="/includes/sweetalert-master/dist/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="/includes/font-awesome/css/font-awesome.min.css">
</head>
<body class="wrapper">
<header>
    <div class="container" id="header_home">
        <div class="row">
            <div class="col-sm-3" id="no_padding_right">
                <div id="top_menu">
                    <ul>
                        <li><a href="/">ГЛАВНАЯ </a> </li>
                        <li><a href="/actions"> АКЦИИ </a>  </li>
                        <li><a href="/contact">КОНТАКТЫ </a></li>
                    </ul>
                </div>
                <img src="/includes/css/image/header/telefon.png" id="telefone_home_image" />
                <p id="telefon_header">30-26-12 </br> 8-930-820-26-12</p>
                <p>Адрес: г.Брянск, ул.Бежицкая,286 <br> БЦ Гранд Порт 4-й этаж</p>
            </div>
            <div class="col-sm-5" id="no_padding_left">
                <div id="logo">
                    <a href="index_home.html"><img src="/includes/css/image/header/logo_heder.png" title="" alt="" class="img-responsive"/></a>
                </div>
            </div>
            <div class="col-sm-3" id="time_work">
                <p>Время работы: </p>
                <p>ежедневно </p><p>с 11:00 до 00:00</p>
            </div>
            <div class="col-sm-1" id="ssm">
                <div id="ssm1">
                    <div ><a href="/" target="_blank"><img src="/includes/css/image/header/vk.png" ></a></div>
                    <div><a href="/" target="_blank"><img src="/includes/css/image/header/tw.png" ></a></div>
                    <div ><a href="/" target="_blank"><img src="/includes/css/image/header/instagram.png" ></a></div>
                    <div ><a href="/" target="_blank"><img src="/includes/css/image/header/fb.png" ></a></div>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="container" style="padding-left: 0;" >
    <nav id="menu" class="default">
        <div class="navbar-header"><span id="category" class="visible-xs">Меню</span>
            <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-list " aria-hidden="true">    </i></button>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index_susi.html">Суши</a></li>
                <li class="dropdown"><a href="/" value="Роллы" class="dropdown-toggle " data-toggle="dropdown">Роллы <i class="caret"></i></a>
                    <div class="dropdown-menu">
                        <div class="dropdown-inner">
                            <ul class="list-unstyled">

                                <li><a href="index_roll.html">Жареные роллы</a></li>
                                <li><a href="index_roll.html">Классические роллы</a></li>
                                <li><a href="index_roll.html">Острые роллы</a></li>
                                <li><a href="index_roll.html">Фирменные роллы</a></li>
                                <li><a href="index_roll.html">Футомаки</a></li>
                                <li><a href="index_roll.html" class="see-all">Смотреть Все Роллы</a></li>
                            </ul>
                        </div>
                    </div>
                <li><a href="index_obedi.html">Обеды</a></li>
                </li>
                <li><a href="index_lapcha_i_ris.html">Лапша и Рис</a></li>
                <li><a href="index_goriazie_bluda.html">Горячие блюда</a></li>
                <li><a href="index_salati.html">Салаты</a></li>
                <li><a href="index_pizza.html">Пицца</a></li>
                <li class="dropdown"><a href="/" class="dropdown-toggle" data-toggle="dropdown">Напитки и соусы <i class="caret"></i></a>
                    <div class="dropdown-menu">
                        <div class="dropdown-inner">
                            <ul class="list-unstyled" >

                                <li><a href="index_napitki.html">Напитки</a></li>
                                <li><a href="/">Соусы</a></li>
                                <li><a href="/" class="see-all">Смотреть Все Напитки и соусы</a> </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="search">
                    <button name="searchb"><i class="fa fa-search" aria-hidden="true"></i></button>
                </li>
            </ul>
        </div>
        <div id="korzina"><a href="index_home.html" onclick="return swalAlert(this)">
                <div id="cart" class="btn-group btn-block">
                    <span id="cart-total">Товаров в корзине (0)<br> Сумма (0.00р.)</span>
                </div></a>
        </div>
    </nav>
</div>
<div class="container" id="akchii">

    <div class="fade">
        <div><img src="/gallery/slider/slaid.png"></div>
        <div><img src="/gallery/slider/slaid.png"></div>
        <div><img src="/gallery/slider/slaid.png"></div>
    </div>


    <div class="obed">
        <div id="option_obed">
            <h3><span>Обед Дня</span></h3>
            <p>Название <br> описание </p>
            <hr id="laine">
            <p id="cost"> <sapn>Цена:</sapn> 200 рублей </p>

            <div class="qty-spinedit" id="qty_obed">
                <input type="button" value="Добавить в кoрзину" onclick="addToCartQty('68', this);" class="button" style="background-color: red;border: none;color: #fff;">
                <input type="button" onclick="minusQty(this)" value="-" class="qty-minus">
                <input type="text" value="1" size="2" class="quantity" name="quantity_68">
                <input type="button" onclick="plusQty(this)" value="+" class="qty-plus">
            </div>

        </div>
        <div id="img_obed">
            <img src="/gallery/obed/kombo_obed.png">
        </div>
    </div>
</div>

<div class="container" id="kompani">
    <div class="compani">
        <div id="tara1"><!-- <img src="image/compani/tara1.png" id="tara1">  --></div>
        <div id="tara2"><!-- <img src="image/compani/tara2.png" id="tara2">  --></div>
        <div id="text_compani">
            <h2> О нас</h2>
            <p>Доставка обедов в Брянске идеально подойдет всем: и тем, у кого ограничен обеденный перерыв, и тем, кто любит провести время за тарелочкой китайской лапши в домашнем халате и совершенно не горит желанием отправляться за ней в кафе. Курьеры службы оставки в указанное время доставят ваш заказ, точно удовлетворив ваши предпочтения. Мы всегда готовы ответить каждому покупателю на любой интересующий вопрос по телефону, а свои постоянным клиентам предлагаем специальные купоны, которые сделают ваш обед не только фантастически вкусным, но и экономичным.</p>
        </div>
    </div>
</div>

<div class="container" id="produkt">
    <div class="xot_prod">
        <h2>Хиты продаж</h2>
        <div class="prodykt">
            <img src="/gallery/products/prodykt1.png">
            <h4>Название</h4>
            <p>Описание</p>
            <p class="price">Цена</p>
            <div class="qty-spinedit">
                <input type="button" value="Добавить в кoрзину" onclick="addToCartQty('68', this);" class="button" style="background-color: red;border: none;color: #fff;">
                <input type="button" onclick="minusQty(this)" value="-" class="qty-minus">
                <input type="text" value="1" size="2" class="quantity" name="quantity_68">
                <input type="button" onclick="plusQty(this)" value="+" class="qty-plus">
            </div>
        </div>

        <div class="prodykt">
            <img src="/gallery/products/prodykt1.png">
            <h4>Название</h4>
            <p>Описание</p>
            <p class="price">Цена</p>
            <div class="qty-spinedit">
                <input type="button" value="Добавить в кoрзину" onclick="addToCartQty('68', this);" class="button" style="background-color: red;border: none;color: #fff;">
                <input type="button" onclick="minusQty(this)" value="-" class="qty-minus">
                <input type="text" value="1" size="2" class="quantity" name="quantity_68">
                <input type="button" onclick="plusQty(this)" value="+" class="qty-plus">
            </div>
        </div>

        <div class="prodykt">
            <img src="/gallery/products/prodykt1.png">
            <h4>Название</h4>
            <p>Описание</p>
            <p class="price">Цена</p>
            <div class="qty-spinedit">
                <input type="button" value="Добавить в кoрзину" onclick="addToCartQty('68', this);" class="button" style="background-color: red;border: none;color: #fff;">
                <input type="button" onclick="minusQty(this)" value="-" class="qty-minus">
                <input type="text" value="1" size="2" class="quantity" name="quantity_68">
                <input type="button" onclick="plusQty(this)" value="+" class="qty-plus">
            </div>
        </div>

        <div class="prodykt">
            <img src="/gallery/products/prodykt1.png">
            <h4>Название</h4>
            <p>Описание</p>
            <p class="price">Цена</p>
            <div class="qty-spinedit">
                <input type="button" value="Добавить в кoрзину" onclick="addToCartQty('68', this);" class="button" style="background-color: red;border: none;color: #fff;">
                <input type="button" onclick="minusQty(this)" value="-" class="qty-minus">
                <input type="text" value="1" size="2" class="quantity" name="quantity_68">
                <input type="button" onclick="plusQty(this)" value="+" class="qty-plus">
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="footer_blac">
        <div class="container" id="footer_menu">
            <div class="navbar-header"><span id="category" class="visible-xs">Меню</span>
                <button onfocus="location.href='#spb'" onblur="location.href='#pox'" type="button" class="btn btn-navbar navbar-toggle pox" data-toggle="collapse" data-target=".navbar-ex1-collapse1"><i class="fa fa-list " aria-hidden="true">    </i></button>

            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse1">
                <ul class="nav navbar-nav">
                    <li><a href="/">Суши</a></li>
                    <li><a href="/">Роллы</a></li>
                    <li><a href="/">Обеды</a></li>
                    <li><a href="index_lapcha_i_ris.html">Лапша и Рис</a></li>
                    <li><a href="index_goriazie_bluda.html">Горячие блюда</a></li>
                    <li><a href="/">Салаты</a></li>
                    <li><a href="/">Пицца</a></li>
                    <li id="spb"><a href="/">Напитки и соусы</a></li>
                </ul>
            </div>
            <div id="contact_footer">
                <p>
                    КОНТАКТЫ: <br>
                    Адрес: г.Брянск, пер.Северный,51<br>
                    Телефон: 30-26-12   8-930-820-26-12
                </p>
            </div>
        </div>
    </div>

</footer>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<!--<script src="js/jquery-2.1.1.min.js"></script>-->
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script>$(document).ready(function(){

        var $menu = $("#menu");

        $(window).scroll(function(){
            if ( $(this).scrollTop() > 200 && $menu.hasClass("default") ){
                $menu.removeClass("default").addClass("fixed");
            } else if($(this).scrollTop() <= 200 && $menu.hasClass("fixed")) {
                $menu.removeClass("fixed").addClass("default");
            }
        });//scroll
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){

        var $search = $(".search")

        $search.click(function () {
            $("#menu").toggleClass('click');
        });
    });
</script>

<script src="/includes/sweetalert-master/dist/sweetalert.min.js"></script>
<script type="text/javascript">
    function swalAlert(ln) {
        swal("Заказ временно не доступен", "зайдите позднее", "success")
        return false;
    }
</script>

<script src="/includes/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/includes/slick/slick.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.fade').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            dots: true,
            infinite: true,
            speed: 1000,
            fade: false,
            cssEase: 'linear'
        });
    });
</script>
</body>
</html>
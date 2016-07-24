@extends('app')


@section('content')
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


    @stop
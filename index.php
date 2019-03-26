<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Махаон - Главная</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <?php include("include/head.php"); ?>
    <?php include("include/header.php"); ?>
    <div class="content">
        <div class="row-c">
            <div class="block--stock">
                <div><a href=""><img src="img/1.png" alt="Item1"></a></div>
                <div class="stock_item2">
                    <a href="">
                        <div class="stick_item2--text">
                            <p>Вкусная скидка</p>
                            <p class="stockBG">20%</p>
                            <div class="p-of-block_stock">
                                <p>НА ЛАКОМСТВА ДЛЯ ПИТОМЦЕВ</p>
                                <p>Акция действительна до 31 августа 2017</p>
                            </div>
                        </div>
                        <div><img src="img/2.png" alt="Item2"></div>
                    </a>
                </div>
                <div>
                    <a href=""><img src="img/3.png" alt="Item3"></a>
                </div>
            </div>
            <a href="" class="allStocksLink">Все акции &#8250;</a>
            <div class="tabs">
                <div class="tab">
                    <input type="radio" id="tab1" name="tab-group" checked>
                    <label for="tab1" class="tab-title">Новинки <span class="circle"></span></label>
                    <section class="tab-content">
                        <div class="reviewDecriptionOfItem">
                        <?php include("include/items.php"); ?>
                        </div>
                    </section>
                </div>
                <div class="tab">
                    <input type="radio" id="tab2" name="tab-group">
                    <label for="tab2" class="tab-title">Скидки <span class="circle"></span></label>
                    <section class="tab-content">
                        <div class="reviewDecriptionOfItem">

                        </div>
                    </section>
                </div>
                <div class="tab">
                    <input type="radio" id="tab3" name="tab-group">
                    <label for="tab3" class="tab-title">Рекомендуем<span class="circle"></span></label>
                    <section class="tab-content">
                        <div class="reviewDecriptionOfItem">
                        </div>
                    </section>
                </div>
            </div>
            <!--        <p class="tipsFromVets">Советы ветеринаров</p>-->
            <div class="saleTitle">Распродажа<span><img src="img/butterfly.png" alt=""></span></div>
            <div class="wrap-owl owl-carousel">
                                <div class="item-img">
                                    <div class="rcmdItemImg">
                                        <img src="img/itemSmall.png" alt="ItemPic">
                                        <img src="img/hotItem.png" alt="">
                                    </div>
                                    <p style="font-size: 30px;">120 P</p>
                                    <div class="recommendItemName">Деревенские лакомства для кошек Нарезка из говядины
                                        нежная</div>
                                    <div class="rWeight_Item">
                                        <p><input type="radio" name="selectGrams" id="5a" checked><label
                                                for="5a">50г</label></p>
                                        <p><input type="radio" name="selectGrams" id="10a"><label for="10a">100
                                                г</label></p>
                                        <p><input type="radio" name="selectGrams" id="24a"><label for="24a">240
                                                г</label></p>
                                        <p><input type="radio" name="selectGrams" id="100a"><label for="100a">1
                                                кг</label></p>
                                    </div>
                                    <div class="R inStockItem"><i class="fa fa-check" aria-hidden="true"></i> Есть в
                                        наличии</div>
                                    <p class="recommendItemlabel">Деревенские лакомства</p>
                                </div>
                                <div class="item-img">
                                    <div class="rcmdItemImg">
                                        <img src="img/itemSmall.png" alt="ItemPic">
                                        <img src="img/hotItem.png" alt="">
                                    </div>
                                    <p style="font-size: 30px;">120 P</p>
                                    <div class="recommendItemName">Деревенские лакомства для кошек Нарезка из говядины
                                        нежная</div>
                                    <div class="rWeight_Item">
                                        <p><input type="radio" name="selectGrams" id="5s" checked><label
                                                for="5s">50г</label></p>
                                        <p><input type="radio" name="selectGrams" id="10s"><label for="10s">100
                                                г</label></p>
                                        <p><input type="radio" name="selectGrams" id="24s"><label for="24s">240
                                                г</label></p>
                                        <p><input type="radio" name="selectGrams" id="100s"><label for="100s">1
                                                кг</label></p>
                                    </div>
                                    <div class="R inStockItem"><i class="fa fa-check" aria-hidden="true"></i> Есть в
                                        наличии</div>
                                    <p class="recommendItemlabel">Деревенские лакомства</p>
                                </div>
                                <div class="item-img">
                                    <div class="rcmdItemImg">
                                        <img src="img/itemSmall.png" alt="ItemPic">
                                        <img src="img/hotItem.png" alt="">
                                    </div>
                                    <p style="font-size: 30px;">120 P</p>
                                    <div class="recommendItemName">Деревенские лакомства для кошек Нарезка из говядины
                                        нежная</div>
                                    <div class="rWeight_Item">
                                        <p><input type="radio" name="selectGrams" id="533" checked><label
                                                for="533">50г</label></p>
                                        <p><input type="radio" name="selectGrams" id="1034"><label for="1034">100
                                                г</label></p>
                                        <p><input type="radio" name="selectGrams" id="2435"><label for="2435">240
                                                г</label></p>
                                        <p><input type="radio" name="selectGrams" id="10036"><label for="10036">1
                                                кг</label></p>
                                    </div>
                                    <div class="R inStockItem"><i class="fa fa-check" aria-hidden="true"></i> Есть в
                                        наличии</div>
                                    <p class="recommendItemlabel">Деревенские лакомства</p>
                                </div>
                                <div class="item-img">
                                    <div class="rcmdItemImg">
                                        <img src="img/itemSmall.png" alt="ItemPic">
                                        <img src="img/hotItem.png" alt="">
                                    </div>
                                    <p style="font-size: 30px;">120 P</p>
                                    <div class="recommendItemName">Деревенские лакомства для кошек Нарезка из говядины
                                        нежная</div>
                                    <div class="rWeight_Item">
                                        <p><input type="radio" name="selectGrams" id="521" checked><label
                                                for="52">50г</label></p>
                                        <p><input type="radio" name="selectGrams" id="1021"><label for="1021">100
                                                г</label></p>
                                        <p><input type="radio" name="selectGrams" id="2421"><label for="2421">240
                                                г</label></p>
                                        <p><input type="radio" name="selectGrams" id="10021"><label for="10021">1
                                                кг</label></p>
                                    </div>
                                    <div class="R inStockItem"><i class="fa fa-check" aria-hidden="true"></i> Есть в
                                        наличии</div>
                                    <p class="recommendItemlabel">Деревенские лакомства</p>
                                </div>
                            </div>
        </div>
    </div>
    <?php include("include/footer.php"); ?>
</body>

</html>
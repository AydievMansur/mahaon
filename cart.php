<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Махаон - Главная</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="/css/burger.css">
</head>
<body>
<?php include("include/head.php"); ?>
<?php include("include/header-G.php"); ?>
<div class="bg-gray">
    <div class="row-c">
        <div class="breadCrumps">
            <a href="">Главная</a>
            <p>-</p>
            <a href="catalog.php">Каталог</a>
            <p>-</p>
            <a href="">Товары для кошек</a>
            <p>-</p>
            <a href=""> Деревенские лакомства для кошек Нарезка из говядины нежная</a>
        </div>
    </div>
</div>
<div class="row-c">
    <div class="mainWinFlex">
        <a href="#" class="backToStore"><img src="img/arrowleft.png" alt="<"> Вернуться в магазин</a>
        <div class="secondWinFlex">
            <div class="itemWindowDescription">
                <div class="characterItem">
                    <img src="img/newPic.png" alt="new">
                    <img src="img/discountPic.png" alt="discount">
                    <img src="img/recommendPic.png" alt="recommend">
                </div>
                <img class="picOfItem" src="img/itemPic.png" alt="">
            </div>
            <div class="textItemDescr">
                <div class="articleOfItem">Арт.: 45612
                    <div class="rateit" data-rateit-value="4" data-rateit-ispreset="true"
                         data-rateit-readonly="true"></div>
                </div>
                <div class="nameOfItem">Деревенские лакомства для кошек Нарезка из говядины нежная
                    <div class="rateItem"><p>Рейтинг 4.6</p>
                        <p>Понравился товар?</p>
                        <p>Поставь звезду!</p></div>
                </div>
                <div class="brandItem"><a href="http://derlak.ru/" target="_blank">Бренд: Деревенские лакомства</a>
                </div>
                <div class="priceItem">120 P</div>
                <div class="stockANDweight">
                    <div class="testRight">
                        <div class="weightItem">
                            <p><input type="radio" name="selectGrams" id="50" checked><label for="50">50г</label></p>
                            <p><input type="radio" name="selectGrams" id="100"><label for="100">100 г</label></p>
                            <p><input type="radio" name="selectGrams" id="240"><label for="240">240 г</label></p>
                            <p><input type="radio" name="selectGrams" id="1000"><label for="1000">1 кг</label></p>
                        </div>
                        <div class="inStockItem"><i class="fa fa-check" aria-hidden="true"></i> Есть в наличии</div>
                    </div>
                    <div class="testright2">
                        <div class="amountItemBtn">
                            <input type="button" value="-" onClick="change('amount',1,10,-1);"/>
                            <input id="amount" type="text" value="1" readonly/>
                            <input type="button" value="+" onClick="change('amount',1,10, 1);"/>
                        </div>
                        <a href="#" class="ItemInBasket">В корзину</a>
                    </div>
                </div>
                <div class="containerPcmb">
                    <div class="linkPcmb">
                        <p class="priceCanBeDifferent">Цены в магазинах и выдачи заказов </p>
                        <p class="priceCanBeDifferent">могут отличаться от цен указанных на сайте.</p>
                    </div>
                    <a href="#win2" class="instantOrder">Заказать в 1 клик</a>
                </div>
                <div class="typeItemAndShare">
                    <p>Тип: <a href="#">Товары для кошек</a> / <a href="#">Корма влажные</a></p>
                    <p class="shareTiAS">Поделиться: <span><img onclick="myFunction1()" src="img/xhair.png" alt="" width="13" height="13"></span></p>
                    <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir" id="ya"></div>
                </div>
            </div>
        </div>
        <div class="frqeeshiping">
            <div class="freeShipFlex">
                <p><b>Бесплатная доставка</b></p>
                <p>при заказе от 500 руб.</p>
            </div>
            <img src="img/fastDevilary.png" alt="" height="50">
        </div>
        <div class="tabs">
            <div class="tab">
                <input type="radio" id="tab1" name="tab-group" checked>
                <label for="tab1" class="tab-title">Описание <span class="circle"></span></label>
                <section class="tab-content">
                    <div class="reviewDecriptionOfItem">
                        <p class="IDK">Описание</p>
                        <p class="IDK">Супер товар.</p>
                        <p>Энергетическая ценность в 100 г продукта: 226,4 ккал</p>
                        <p class="NoReviewSection">Здесь пока что нет отзывов.</p>
                        <div class="btnAddReview">Добавить отзыв</div>
                    </div>
                </section>
            </div>
            <div class="tab">
                <input type="radio" id="tab2" name="tab-group">
                <label for="tab2" class="tab-title">Описание Товара <span class="circle"></span></label>
                <section class="tab-content">
                    <div class="reviewDecriptionOfItem">
                        <p class="IDK">Вы можете оставить отзыв на данный товар.</p>
                        <p class="IDK">Отзыв на сайте появится после его проверки администратором.</p>
                        <p>Энергетическая ценность в 100 г продукта: 226,4 ккал</p>
                        <p class="NoReviewSection">Здесь пока что нет отзывов.</p>
                        <div class="btnAddReview">Добавить отзыв</div>
                    </div>
                </section>
            </div>
            <div class="tab">
                <input type="radio" id="tab3" name="tab-group">
                <label for="tab3" class="tab-title">Задать вопрос <span class="circle"></span></label>
                <section class="tab-content">
                    <div class="reviewDecriptionOfItem">
                        <p class="IDK">Задайте вопрос.</p>
                        <p class="IDK">Отзыв на сайте появится после его проверки администратором.</p>
                        <p>Энергетическая ценность в 100 г продукта: 226,4 ккал</p>
                        <p class="NoReviewSection">Здесь пока что нет отзывов.</p>
                        <div class="btnAddReview">Добавить отзыв</div>
                    </div>
                </section>
            </div>
        </div>
        <div class="bannerBottom"><img src="img/banner.png" alt=""></div>
        <div class="recommendForYouPet">
            <div class="RTitle">Рекомендуем для Вашего питомца <img src="img/rewardIcon.png" alt=""></div>
            <div class="Ritem owl-carousel">
                <div class="recommendItem">
                    <img src="img/itemSmall.png" alt="ItemPic">
                    <p style="font-size: 30px;">120 P</p>
                    <div class="recommendItemName">Деревенские лакомства для кошек Нарезка из говядины нежная</div>
                    <div class="rWeight_Item">
                        <p><input type="radio" name="selectGrams" id="51" checked><label for="51">50г</label></p>
                        <p><input type="radio" name="selectGrams" id="101"><label for="101">100 г</label></p>
                        <p><input type="radio" name="selectGrams" id="241"><label for="241">240 г</label></p>
                        <p><input type="radio" name="selectGrams" id="1001"><label for="1001">1 кг</label></p>
                    </div>
                    <div class="R inStockItem"><i class="fa fa-check" aria-hidden="true"></i> Есть в наличии</div>
                    <p class="recommendItemlabel">Деревенские лакомства</p>
                </div>
                <div class="recommendItem">
                    <div class="rcmdItemImg">
                        <img src="img/itemSmall.png" alt="ItemPic">
                        <img src="img/hotItem.png" alt="">
                    </div>
                    <p style="font-size: 30px;">120 P</p>
                    <div class="recommendItemName">Деревенские лакомства для кошек Нарезка из говядины нежная</div>
                    <div class="rWeight_Item">
                        <p><input type="radio" name="selectGrams" id="52" checked><label for="52">50г</label></p>
                        <p><input type="radio" name="selectGrams" id="102"><label for="102">100 г</label></p>
                        <p><input type="radio" name="selectGrams" id="242"><label for="242">240 г</label></p>
                        <p><input type="radio" name="selectGrams" id="1002"><label for="1002">1 кг</label></p>
                    </div>
                    <div class="R inStockItem"><i class="fa fa-check" aria-hidden="true"></i> Есть в наличии</div>
                    <p class="recommendItemlabel">Деревенские лакомства</p>
                </div>
                <div class="recommendItem">
                    <div class="rcmdItemImg">
                        <img src="img/itemSmall.png" alt="ItemPic">
                        <img src="img/hotItem.png" alt="">
                    </div>
                    <p style="font-size: 30px;">120 P</p>
                    <div class="recommendItemName">Деревенские лакомства для кошек Нарезка из говядины нежная</div>
                    <div class="rWeight_Item">
                        <p><input type="radio" name="selectGrams" id="53" checked><label for="53">50г</label></p>
                        <p><input type="radio" name="selectGrams" id="103"><label for="103">100 г</label></p>
                        <p><input type="radio" name="selectGrams" id="243"><label for="243">240 г</label></p>
                        <p><input type="radio" name="selectGrams" id="1003"><label for="1003">1 кг</label></p>
                    </div>
                    <div class="R inStockItem"><i class="fa fa-check" aria-hidden="true"></i> Есть в наличии</div>
                    <p class="recommendItemlabel">Деревенские лакомства</p>
                </div>
                <div class="recommendItem">
                    <div class="rcmdItemImg">
                        <img src="img/itemSmall.png" alt="ItemPic">
                        <img src="img/hotItem.png" alt="">
                    </div>
                    <p style="font-size: 30px;">120 P</p>
                    <div class="recommendItemName">Деревенские лакомства для кошек Нарезка из говядины нежная</div>
                    <div class="rWeight_Item">
                        <p><input type="radio" name="selectGrams" id="54" checked><label for="54">50г</label></p>
                        <p><input type="radio" name="selectGrams" id="104"><label for="104">100 г</label></p>
                        <p><input type="radio" name="selectGrams" id="244"><label for="244">240 г</label></p>
                        <p><input type="radio" name="selectGrams" id="1004"><label for="1004">1 кг</label></p>
                    </div>
                    <div class="R inStockItem"><i class="fa fa-check" aria-hidden="true"></i> Есть в наличии</div>
                    <p class="recommendItemlabel">Деревенские лакомства</p>
                </div>
            </div>
        </div>
        <div class="YouWatched">
            <div class="RTitle">Вы смотрели</div>
            <div class="Ritem owl-carousel">
                <div class="recommendItem">
                    <img src="img/itemSmall.png" alt="ItemPic">
                    <p style="font-size: 30px;">120 P</p>
                    <div class="recommendItemName">Деревенские лакомства для кошек Нарезка из говядины нежная</div>
                    <div class="rWeight_Item">
                        <p><input type="radio" name="selectGrams" id="55" checked><label for="55">50г</label></p>
                        <p><input type="radio" name="selectGrams" id="105"><label for="105">100 г</label></p>
                        <p><input type="radio" name="selectGrams" id="245"><label for="245">240 г</label></p>
                        <p><input type="radio" name="selectGrams" id="1005"><label for="1005">1 кг</label></p>
                    </div>
                    <div class="R inStockItem"><i class="fa fa-check" aria-hidden="true"></i> Есть в наличии</div>
                    <p class="recommendItemlabel">Деревенские лакомства</p>
                </div>
                <div class="recommendItem">
                    <div class="rcmdItemImg">
                        <img src="img/itemSmall.png" alt="ItemPic">
                        <img src="img/hotItem.png" alt="">
                    </div>
                    <p style="font-size: 30px;">120 P</p>
                    <div class="recommendItemName">Деревенские лакомства для кошек Нарезка из говядины нежная</div>
                    <div class="rWeight_Item">
                        <p><input type="radio" name="selectGrams" id="56" checked><label for="56">50г</label></p>
                        <p><input type="radio" name="selectGrams" id="106"><label for="106">100 г</label></p>
                        <p><input type="radio" name="selectGrams" id="246"><label for="246">240 г</label></p>
                        <p><input type="radio" name="selectGrams" id="1006"><label for="1006">1 кг</label></p>
                    </div>
                    <div class="R inStockItem"><i class="fa fa-check" aria-hidden="true"></i> Есть в наличии</div>
                    <p class="recommendItemlabel">Деревенские лакомства</p>
                </div>
                <div class="recommendItem">
                    <div class="rcmdItemImg">
                        <img src="img/itemSmall.png" alt="ItemPic">
                        <img src="img/hotItem.png" alt="">
                    </div>
                    <p style="font-size: 30px;">120 P</p>
                    <div class="recommendItemName">Деревенские лакомства для кошек Нарезка из говядины нежная</div>
                    <div class="rWeight_Item">
                        <p><input type="radio" name="selectGrams" id="57" checked><label for="57">50г</label></p>
                        <p><input type="radio" name="selectGrams" id="107"><label for="107">100 г</label></p>
                        <p><input type="radio" name="selectGrams" id="247"><label for="247">240 г</label></p>
                        <p><input type="radio" name="selectGrams" id="1007"><label for="1007">1 кг</label></p>
                    </div>
                    <div class="R inStockItem"><i class="fa fa-check" aria-hidden="true"></i> Есть в наличии</div>
                    <p class="recommendItemlabel">Деревенские лакомства</p>
                </div>
                <div class="recommendItem">
                    <div class="rcmdItemImg">
                        <img src="img/itemSmall.png" alt="ItemPic">
                        <img src="img/hotItem.png" alt="">
                    </div>
                    <p style="font-size: 30px;">120 P</p>
                    <div class="recommendItemName">Деревенские лакомства для кошек Нарезка из говядины нежная</div>
                    <div class="rWeight_Item">
                        <p><input type="radio" name="selectGrams" id="58" checked><label for="58">50г</label></p>
                        <p><input type="radio" name="selectGrams" id="108"><label for="108">100 г</label></p>
                        <p><input type="radio" name="selectGrams" id="248"><label for="248">240 г</label></p>
                        <p><input type="radio" name="selectGrams" id="1008"><label for="1008">1 кг</label></p>
                    </div>
                    <div class="R inStockItem"><i class="fa fa-check" aria-hidden="true"></i> Есть в наличии</div>
                    <p class="recommendItemlabel">Деревенские лакомства</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("include/footer.php"); ?>
</html>
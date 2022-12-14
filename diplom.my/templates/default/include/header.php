<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, shrink-to-fit=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <?php $this -> getStyles()?>

</head>

<body>
<header class="header">
    <div class="container">
        <div class="header__wrapper">

            <div class="header__logo">
                <a href="index.html"><img src="<?=PATH . TEMPLATE ?>assets/img/Logo.svg" alt="магазин инженерной сантехники"></a>
                <span>АвтоЗапчасти</span>
            </div>
            <div class="header__topbar">
                <div class="header__contacts">
                    <div><a href="mailto:test@test.ru">test@test.ru</a></div>
                    <div><a href="tel:+74842750204">+7 (4842) 75-02-04</a></div>
                    <div><a class="js-callback">Связаться с нами</a></div>
                </div>
                <nav class="header__nav">
                    <ul class="header__nav-list">

                        <li class="header__nav-parent">
                            <a href="http://somesite.ru/catalog/"><span>Каталог</span></a>
                            <ul class="header__nav-sublist">
                                <li>
                                    <a href="http://somesite.ru/for-clients/"><span>item-1</span></a>
                                </li>

                                <li>
                                    <a href="http://somesite.ru/for-installers/"><span>item-2</span></a>
                                </li>

                                <li>
                                    <a href="http://somesite.ru/for-stores/"><span>item-3</span></a>
                                </li>

                                <li>
                                    <a href="http://somesite.ru/for-builders/"><span>item-4</span></a>
                                </li>
                            </ul>
                        </li>

                        <li class="">
                            <a href="http://somesite.ru/delivery/"><span>Оплата и доставка</span></a>
                            <ul class="header__nav-sublist">

                            </ul>
                        </li>

                        <li class="">
                            <a href="http://somesite.ru/actions/"><span>Акции и скидки</span></a>
                            <ul class="header__nav-sublist">

                            </ul>
                        </li>

                        <li class="">
                            <a href="http://somesite.ru/news/"><span>Новости</span></a>
                            <ul class="header__nav-sublist">

                            </ul>
                        </li>

                        <li class="">
                            <a href="http://somesite.ru/contacts/"><span>Контакты</span></a>
                            <ul class="header__nav-sublist">

                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>
            <div class="overlay"></div>
            <div class="header__sidebar">
                <div class="header__sidebar_btn">
                    <a href="http://somesite.ru/cart/">
                        <svg class="">
                            <use xlink:href="<?=PATH . TEMPLATE ?>assets/img/icons.svg#basket"></use>
                        </svg>
                    </a>
                </div>
                <div class="header__sidebar_btn burger-menu">
                    <div class="burger-menu__link">
                        <span class="burger"></span>
                        <span class="burger-desc">меню</span>
                    </div>
                </div>
                <div class="header__sidebar_btn"><a href="index.html#">
                        <svg class="">
                            <use xlink:href="<?=PATH . TEMPLATE ?>assets/img/icons.svg#instagram"></use>
                        </svg>
                    </a></div>
                <div class="header__sidebar_btn"><a href="index.html#">
                        <svg class="">
                            <use xlink:href="<?=PATH . TEMPLATE ?>assets/img/icons.svg#vk"></use>
                        </svg>
                    </a></div>
                <div class="header__sidebar_btn"><a href="index.html#">
                        <svg class="">
                            <use xlink:href="<?=PATH . TEMPLATE ?>assets/img/icons.svg#facebook"></use>
                        </svg>
                    </a></div>
            </div>
            <div class="header__menu _hidden">
                <div class="header__menu_close close_modal"></div>
                <ul class="header__menu_burger">

                    <li>
                        <a href="http://somesite.ru/catalog/"><span>Каталог</span></a>

                        <ul class="header__menu_sublist">

                            <li>
                                <a href="http://somesite.ru/for-clients/"><span>item-1</span></a>
                            </li>

                            <li>
                                <a href="http://somesite.ru/for-installers/"><span>item-2</span></a>
                            </li>

                            <li>
                                <a href="http://somesite.ru/for-stores/"><span>item-3</span></a>
                            </li>

                            <li>
                                <a href="http://somesite.ru/for-builders/"><span>item-4</span></a>
                            </li>

                        </ul>

                    </li>

                    <li>
                        <a href="http://somesite.ru/delivery/"><span>Оплата и доставка</span></a>

                        <ul class="header__menu_sublist">

                        </ul>

                    </li>

                    <li>
                        <a href="http://somesite.ru/actions/"><span>Акции и скидки</span></a>

                        <ul class="header__menu_sublist">

                        </ul>

                    </li>

                    <li>
                        <a href="http://somesite.ru/news/"><span>Новости</span></a>

                        <ul class="header__menu_sublist">

                        </ul>

                    </li>

                    <li>
                        <a href="http://somesite.ru/contacts/"><span>Контакты</span></a>

                        <ul class="header__menu_sublist">

                        </ul>

                    </li>

                </ul>
            </div>
            <div class="header__callback _hidden">
                <div class="header__callback_close close_modal"></div>
                <div class="header__callback_header">
                    Связаться с нами
                </div>
                <form class="header__callback_form">
                    <input type="text" class="input-text header__callback_input" placeholder="Ваше имя">
                    <input type="email" class="input-text header__callback_input" placeholder="E-mail">
                    <input type="text" class="input-text header__callback_input js-mask-phone" placeholder="Телефон">
                    <div class="header__callback_privacy">
                        <label class="checkbox">
                            <input type="checkbox" />
                            <div class="checkbox__text">Соглашаюсь с правилами обработки персональных данных</div>
                        </label>
                    </div>
                    <button type="submit" class="form-submit header__callback_submit">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</header>

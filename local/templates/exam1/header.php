<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <title><?$APPLICATION->ShowTitle()?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8" />
    <?$APPLICATION->ShowHead();?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/reset.css" />
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/style.css" />
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/owl.carousel.css" />
    <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/owl.carousel.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/scripts.js"></script>
    <link rel="icon" type="image/vnd.microsoft.icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico">
    <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/img/favicon.ico">
</head>

<body>
    <div id="panel"><?$APPLICATION->ShowPanel();?></div>
    <!-- wrap -->
    <div class="wrap">
        <!-- header -->
        <header class="header">
            <div class="inner-wrap">
                <div class="logo-block"><a href="/" class="logo">Мебельный магазин</a>
                </div>
                <div class="main-phone-block">
                    <?if(date('H')>=9 && date('H')<18):?>
                        <a href="tel:84952128506" class="phone">8 (495) 212-85-06</a>
                    <?else:?>
                        <a href="mailto:store@store.ru" class="phone">store@store.ru</a>
                    <?endif?>
                    <div class="shedule">время работы с 9-00 до 18-00</div>
                </div>
                <div class="actions-block">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:search.form",
                        "",
                    Array(),
                    false
                    );?>
                    <nav class="menu-block">
                        <ul>
                            <?if(!$USER->isAuthorized()):?>
                                <li class="att popup-wrap">
                                    <a id="hd_singin_but_open" href="" class="btn-toggle">Войти на сайт</a>
                                    <form action="/login/user.php?login=yes" class="frm-login popup-block" method="post">
                                        <input type="hidden" name="AUTH_FORM" value="Y" />
                                        <input type="hidden" name="TYPE" value="AUTH" />
                                        <input type="hidden" name="backurl" value="/login/user.php" />
                                        <div class="frm-title">Войти на сайт</div>
                                        <a href="" class="btn-close">Закрыть</a>
                                        <div class="frm-row"><input type="text" name = "USER_LOGIN" placeholder="Логин"></div>
                                        <div class="frm-row"><input type="password" name = "USER_PASSWORD" placeholder="Пароль"></div>
                                        <div class="frm-row"><a href="/login/user.php?forgot_password=yes" class="btn-forgot">Забыли пароль</a></div>
                                        <div class="frm-row">
                                            <div class="frm-chk">
                                                <input type="checkbox" id="login">
                                                <label for="login">Запомнить меня</label>
                                            </div>
                                        </div>
                                        <div class="frm-row"><input type="submit" name="Login" value="Войти"></div>
                                    </form>
                                </li>
                                <li><a href="/login/user.php?register=yes">Зарегистрироваться</a>
                                </li>
                            <?else:?>
                                <li>
                                    <a href="/login/user.php"><?=$USER->GetFullName()?> [<?=$USER->GetLogin()?>]</a>
                                </li>
                                <li>
                                    <a href="/login/user.php?clear_cache=Y&logout=yes&logout_butt=true">Выйти</a>
                                </li>
                            <?endif?>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <!-- /header -->
        <!-- nav -->
        <?
            $APPLICATION->IncludeComponent(
                "bitrix:menu", 
                "top1", 
                array(
                    "ROOT_MENU_TYPE" => "top",
                    "MAX_LEVEL" => "3",
                    "CHILD_MENU_TYPE" => "left",
                    "USE_EXT" => "Y",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_TIME" => "36000000",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "MENU_CACHE_GET_VARS" => array(
                    ),
                    "COMPONENT_TEMPLATE" => "top1",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "N"
                ),
                false,
                array(
                    "ACTIVE_COMPONENT" => "Y"
                )
            );?>
        <!-- /nav -->
        <!-- breadcrumbs -->
        <div class="breadcrumbs-box">
            <div class="inner-wrap">
            <?/*$APPLICATION->IncludeComponent(
                    "bitrix:breadcrumb",
                    "navChain",
                Array()
            );*/?>
                <?$APPLICATION->ShowNavChain();?>
            </div>
        </div>
        <!-- /breadcrumbs -->
        <!-- page -->
        <div class="page">
            <!-- content box -->
            <div class="content-box">
                <!-- content -->
                <div class="content">
                    <div class="cnt">
                        <header>
                            <h1><?$APPLICATION->ShowTitle(false);?></h1>
                        </header>
                        <?if($APPLICATION->GetCurPage() == "/"):?>
                            <p>
                                «Мебельная компания» осуществляет производство мебели на высококлассном оборудовании с применением минимальной доли ручного труда, что позволяет обеспечить высокое качество нашей продукции. Налажен производственный процесс как массового и индивидуального характера, что с одной стороны позволяет обеспечить
                                постоянную номенклатуру изделий и индивидуальный подход – с другой.
                            </p>
                             <!-- index column -->
                            <div class="cnt-section index-column">
                                <div class="col-wrap">
                                     <!-- main actions box -->
                                    <div class="column main-actions-box">
                                        <div class="title-block">
                                            <h2>Новинки</h2>
                                            <hr>
                                        </div>
                                        <div class="items-wrap">
                                            <div class="item-wrap">
                                                <div class="item">
                                                    <div class="title-block att">
                                                         Угловой диван!
                                                    </div>
                             <br>
                                                    <div class="inner-block">
                             <a href="" class="photo-block"> <img src="/bitrix/templates/exam1/img/new01.jpg" alt=""> </a>
                                                        <div class="text">
                             <a href="">Угловой диван "Титаник", с большим выбором расцветок и фактур.</a> <a href="" class="btn-arr"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-wrap">
                                                <div class="item">
                                                    <div class="title-block att">
                                                         Угловой диван!
                                                    </div>
                             <br>
                                                    <div class="inner-block">
                             <a href="" class="photo-block"> <img src="/bitrix/templates/exam1/img/new02.jpg" alt=""> </a>
                                                        <div class="text">
                             <a href="">Угловой диван "Титаник", с большим выбором расцветок и фактур.</a> <a href="" class="btn-arr"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-wrap">
                                                <div class="item">
                                                    <div class="title-block att">
                                                         Угловой диван!
                                                    </div>
                             <br>
                                                    <div class="inner-block">
                             <a href="" class="photo-block"> <img src="/bitrix/templates/exam1/img/new03.jpg" alt=""> </a>
                                                        <div class="text">
                             <a href="">Угловой диван "Титаник", с большим выбором расцветок и фактур.</a> <a href="" class="btn-arr"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                             <a href="" class="btn-next">Все новинки</a>
                                    </div>
                                     <!-- /main actions box --> <!-- main news box -->
                                    <div class="column main-news-box">
                                        <div class="title-block">
                                            <h2>Новости</h2>
                                        </div>
                                        <hr>
                                        <div class="items-wrap">
                                            <div class="item-wrap">
                                                <div class="item">
                                                    <div class="title">
                             <a href="">29 августа 2012</a>
                                                    </div>
                                                    <div class="text">
                             <a href="">Поступление лучших офисных кресел из Германии </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-wrap">
                                                <div class="item">
                                                    <div class="title">
                             <a href="">29 августа 2012</a>
                                                    </div>
                                                    <div class="text">
                             <a href="">Мастер-класс дизайнеров из Италии для производителей мебели </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-wrap">
                                                <div class="item">
                                                    <div class="title">
                             <a href="">29 августа 2012</a>
                                                    </div>
                                                    <div class="text">
                             <a href="">Поступление лучших офисных кресел из Германии </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-wrap">
                                                <div class="item">
                                                    <div class="title">
                             <a href="">29 августа 2012</a>
                                                    </div>
                                                    <div class="text">
                             <a href="">Наша дилерская сеть расширилась теперь ассортимент наших товаров доступен в Казани </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                             <a href="" class="btn-next">Все новости</a>
                                    </div>
                                     <!-- /main news box -->
                                </div>
                            </div>
                             <!-- /index column --> <!-- afisha box -->
                            <div class="cnt-section afisha-box">
                                <div class="section-title-block">
                                    <h2 class="second-ttile">Ближайшие мероприятия</h2>
                             <a href="" class="btn-next">все мероприятия</a>
                                </div>
                                <hr>
                                <div class="items-wrap">
                                    <div class="item-wrap">
                                        <div class="item">
                                            <div class="title">
                             <a href="">29 августа 2012, Москва</a>
                                            </div>
                                            <div class="text">
                             <a href="">Семинар производителей мебели России и СНГ, Обсуждение тенденций.</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-wrap">
                                        <div class="item">
                                            <div class="title">
                             <a href="">29 августа 2012, Москва</a>
                                            </div>
                                            <div class="text">
                             <a href="">Открытие шоу-рума на Невском проспекте. Последние модели в большом ассортименте.</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-wrap">
                                        <div class="item">
                                            <div class="title">
                             <a href="">29 августа 2012, Москва</a>
                                            </div>
                                            <div class="text">
                             <a href="">Открытие нового магазина в нашей дилерской сети.</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?endif?>           
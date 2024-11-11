<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $APPLICATION->ShowHead();?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title><?= $APPLICATION->ShowTitle()?></title>
    <?php
    use Bitrix\Main\Page\Asset;

    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH. '/css/bootstrap.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH. '/css/slick.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH. '/css/slick-theme.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH. '/css/nouislider.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH. '/css/font-awesome.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH. '/css/style.css');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH. '/js/jquery.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH. '/js/bootstrap.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH. '/js/slick.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH. '/js/nouislider.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH. '/js/jquery.zoom.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH. '/js/main.js');
    Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">')
    ?>


</head>
<body>
<? $APPLICATION->ShowPanel()?>
<!-- HEADER -->
<header>
    <!-- TOP HEADER -->
    <div id="top-header">
        <div class="container">
            <ul class="header-links pull-left">
                <li>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/inc_phone_number.php"
                        )
                    );?>
                </li>
                <li>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/inc_email.php"
                        )
                    );?>
                </li>
                <li>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/inc_place.php"
                        )
                    );?>
                </li>
            </ul>
            <ul class="header-links pull-right">
                <li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>
                <li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
            </ul>
        </div>
    </div>
    <!-- /TOP HEADER -->

    <!-- MAIN HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-3">
                    <div class="header-logo">
                        <a href="#" class="logo">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/include/inc_logo.php"
                                )
                            );?>
                        </a>
                    </div>
                </div>
                <!-- /LOGO -->

                <!-- SEARCH BAR -->
                <div class="col-md-6">
                    <?$APPLICATION->IncludeComponent("bitrix:search.title", "search", Array(
                        "CATEGORY_0" => array(	// Ограничение области поиска
                            0 => "iblock_catalog",
                        ),
                        "CATEGORY_0_TITLE" => "",	// Название категории
                        "CATEGORY_0_iblock_catalog" => array(	// Искать в информационных блоках типа "iblock_catalog"
                            0 => "4",
                        ),
                        "CHECK_DATES" => "N",	// Искать только в активных по дате документах
                        "COMPONENT_TEMPLATE" => ".default",
                        "CONTAINER_ID" => "title-search",	// ID контейнера, по ширине которого будут выводиться результаты
                        "INPUT_ID" => "title-search-input",	// ID строки ввода поискового запроса
                        "NUM_CATEGORIES" => "1",	// Количество категорий поиска
                        "ORDER" => "date",	// Сортировка результатов
                        "PAGE" => "#SITE_DIR#search/index.php/",	// Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
                        "SHOW_INPUT" => "Y",	// Показывать форму ввода поискового запроса
                        "SHOW_OTHERS" => "N",	// Показывать категорию "прочее"
                        "TOP_COUNT" => "5",	// Количество результатов в каждой категории
                        "USE_LANGUAGE_GUESS" => "Y",	// Включить автоопределение раскладки клавиатуры
                    ),
                        false
                    );?>
                </div>
                <!-- /SEARCH BAR -->

                <!-- ACCOUNT -->
                <div class="col-md-3 clearfix">
                    <div class="header-ctn">
                        <!-- Wishlist -->
                        <div>
                            <a href="#">
                                <i class="fa fa-heart-o"></i>
                                <span>Your Wishlist</span>
                                <div class="qty">2</div>
                            </a>
                        </div>
                        <!-- /Wishlist -->

                        <!-- Cart -->
                        <div class="dropdown">
                            <?$APPLICATION->IncludeComponent(
	"bitrix:sale.basket.basket.line", 
	"basket", 
	array(
		"HIDE_ON_BASKET_PAGES" => "Y",
		"PATH_TO_AUTHORIZE" => "",
		"PATH_TO_BASKET" => SITE_DIR."personal/cart/",
		"PATH_TO_ORDER" => SITE_DIR."personal/order-make/",
		"PATH_TO_PERSONAL" => SITE_DIR."personal/",
		"PATH_TO_PROFILE" => SITE_DIR."personal/",
		"PATH_TO_REGISTER" => SITE_DIR."personal/login/",
		"POSITION_FIXED" => "N",
		"SHOW_AUTHOR" => "N",
		"SHOW_EMPTY_VALUES" => "Y",
		"SHOW_NUM_PRODUCTS" => "Y",
		"SHOW_PERSONAL_LINK" => "Y",
		"SHOW_PRODUCTS" => "N",
		"SHOW_REGISTRATION" => "Y",
		"SHOW_TOTAL_PRICE" => "Y",
		"COMPONENT_TEMPLATE" => "basket"
	),
	false
);?>
                        </div>
                        <!-- /Cart -->

                        <!-- Menu Toogle -->
                        <div class="menu-toggle">
                            <a href="#">
                                <i class="fa fa-bars"></i>
                                <span>Menu</span>
                            </a>
                        </div>
                        <!-- /Menu Toogle -->
                    </div>
                </div>
                <!-- /ACCOUNT -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
</header>
<!-- /HEADER -->

<!-- NAVIGATION -->
<nav id="main-menu-navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"main-menu",
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "main-menu",

	),
	false
);?>
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>
<!-- /NAVIGATION -->
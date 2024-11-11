<?php
$tabs = [
    [
        "TAB" => "tab-new-product-1",
        "ID" => 1,
        "NAME" => "Laptops",
        "FILTER" => ["PROPERTY_ATT_NEW" => 22],
        "CODE" => "laptops",
    ],
    [
        "TAB" => "tab-new-product-2",
        "ID" => 2,
        "NAME" => " Smartphones",
        "FILTER" => ["PROPERTY_ATT_NEW" => 22],
        "CODE" => "smartphones",
    ],
    [
        "TAB" => "tab-new-product-3",
        "ID" => 3,
        "NAME" => "Cameras",
        "FILTER" => ["PROPERTY_ATT_NEW" => 22],
        "CODE" => "cameras",
    ],
    [
        "TAB" => "tab-new-product-4",
        "ID" => 4,
        "NAME" => "Accessories",
        "FILTER" => ["PROPERTY_ATT_NEW" => 22],
        "CODE" => "accessories",
    ],
];
?>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">New Products</h3>
                    <div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                            <? foreach ($tabs as $index=>$tab):?>
                                <li class="<?= $tab['ID'] === 1 ? 'active' : ''?>"><a data-toggle="tab" href="#<?=$tab['CODE']?>-<?=$tab['TAB']?>"><?=$tab["NAME"]?></a></li>
                            <?endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <? foreach ($tabs as $index=>$tab):?>
                            <div id="<?=$tab['CODE']?>-<?=$tab['TAB']?>" class="tab-pane <?= $tab['ID'] === 1 ? 'active' : ''?>">
                                <div class="products-slick" data-nav="#slick-nav-<?=$tab['NAME']?>-tab-<?=$tab['TAB']?>">
                                    <?
                                    $GLOBALS['arTabFilter'] = $tab["FILTER"];
                                    $APPLICATION->IncludeComponent(
                                        "bitrix:catalog.section",
                                        "horizontal-slider-section",
                                        Array(
                                            "ACTION_VARIABLE" => "action",
                                            "ADD_PICT_PROP" => "-",
                                            "ADD_PROPERTIES_TO_BASKET" => "Y",
                                            "ADD_SECTIONS_CHAIN" => "N",
                                            "ADD_TO_BASKET_ACTION" => "ADD",
                                            "AJAX_MODE" => "N",
                                            "AJAX_OPTION_ADDITIONAL" => "",
                                            "AJAX_OPTION_HISTORY" => "N",
                                            "AJAX_OPTION_JUMP" => "N",
                                            "AJAX_OPTION_STYLE" => "Y",
                                            "BACKGROUND_IMAGE" => "-",
                                            "BASKET_URL" => "/personal/cart/",
                                            "BROWSER_TITLE" => "-",
                                            "CACHE_FILTER" => "N",
                                            "CACHE_GROUPS" => "Y",
                                            "CACHE_TIME" => "36000000",
                                            "CACHE_TYPE" => "A",
                                            "COMPARE_NAME" => "CATALOG_COMPARE_LIST",
                                            "COMPARE_PATH" => "",
                                            "COMPATIBLE_MODE" => "N",
                                            "CONVERT_CURRENCY" => "N",
                                            "CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[]}",
                                            "DETAIL_URL" => "",
                                            "DISABLE_INIT_JS_IN_COMPONENT" => "N",
                                            "DISCOUNT_PERCENT_POSITION" => "bottom-right",
                                            "DISPLAY_BOTTOM_PAGER" => "N",
                                            "DISPLAY_COMPARE" => "Y",
                                            "DISPLAY_TOP_PAGER" => "N",
                                            "ELEMENT_SORT_FIELD" => "shows",
                                            "ELEMENT_SORT_FIELD2" => "shows",
                                            "ELEMENT_SORT_ORDER" => "asc",
                                            "ELEMENT_SORT_ORDER2" => "asc",
                                            "ENLARGE_PRODUCT" => "STRICT",
                                            "FILE_404" => "",
                                            "FILTER_NAME" => "arTabFilter",
                                            "HIDE_NOT_AVAILABLE" => "Y",
                                            "HIDE_NOT_AVAILABLE_OFFERS" => "Y",
                                            "IBLOCK_ID" => "4",
                                            "IBLOCK_TYPE" => "catalog",
                                            "INCLUDE_SUBSECTIONS" => "Y",
                                            "LABEL_PROP" => array("ATT_NEW"),
                                            "LABEL_PROP_MOBILE" => array("ATT_NEW"),
                                            "LABEL_PROP_POSITION" => "top-left",
                                            "LAZY_LOAD" => "N",
                                            "LINE_ELEMENT_COUNT" => "3",
                                            "LOAD_ON_SCROLL" => "N",
                                            "MESSAGE_404" => "",
                                            "MESS_BTN_ADD_TO_BASKET" => "В корзину",
                                            "MESS_BTN_BUY" => "Купить",
                                            "MESS_BTN_COMPARE" => "Сравнить",
                                            "MESS_BTN_DETAIL" => "Подробнее",
                                            "MESS_BTN_LAZY_LOAD" => "Показать ещё",
                                            "MESS_BTN_SUBSCRIBE" => "Подписаться",
                                            "MESS_NOT_AVAILABLE" => "Нет в наличии",
                                            "MESS_NOT_AVAILABLE_SERVICE" => "Недоступно",
                                            "META_DESCRIPTION" => "-",
                                            "META_KEYWORDS" => "-",
                                            "OFFERS_LIMIT" => "5",
                                            "PAGER_BASE_LINK_ENABLE" => "N",
                                            "PAGER_DESC_NUMBERING" => "N",
                                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                            "PAGER_SHOW_ALL" => "N",
                                            "PAGER_SHOW_ALWAYS" => "N",
                                            "PAGER_TEMPLATE" => ".default",
                                            "PAGER_TITLE" => "Товары",
                                            "PAGE_ELEMENT_COUNT" => "20",
                                            "PARTIAL_PRODUCT_PROPERTIES" => "N",
                                            "PRICE_CODE" => array("BASE"),
                                            "PRICE_VAT_INCLUDE" => "Y",
                                            "PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
                                            "PRODUCT_ID_VARIABLE" => "id",
                                            "PRODUCT_PROPS_VARIABLE" => "prop",
                                            "PRODUCT_QUANTITY_VARIABLE" => "quantity",
                                            "PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false}]",
                                            "PRODUCT_SUBSCRIPTION" => "Y",
                                            "SECTION_CODE" => $tab["CODE"],
                                            "SECTION_ID" => $_REQUEST["SECTION_ID"],
                                            "SECTION_ID_VARIABLE" => "SECTION_ID",
                                            "SECTION_URL" => "",
                                            "SECTION_USER_FIELDS" => array("",""),
                                            "SEF_MODE" => "N",
                                            "SET_BROWSER_TITLE" => "N",
                                            "SET_LAST_MODIFIED" => "N",
                                            "SET_META_DESCRIPTION" => "N",
                                            "SET_META_KEYWORDS" => "Y",
                                            "SET_STATUS_404" => "Y",
                                            "SET_TITLE" => "N",
                                            "SHOW_404" => "N",
                                            "SHOW_ALL_WO_SECTION" => "N",
                                            "SHOW_CLOSE_POPUP" => "N",
                                            "SHOW_DISCOUNT_PERCENT" => "Y",
                                            "SHOW_MAX_QUANTITY" => "N",
                                            "SHOW_OLD_PRICE" => "Y",
                                            "SHOW_PRICE_COUNT" => "1",
                                            "SHOW_SLIDER" => "Y",
                                            "SLIDER_INTERVAL" => "3000",
                                            "SLIDER_PROGRESS" => "N",
                                            "TEMPLATE_THEME" => "site",
                                            "USE_COMPARE_LIST" => "N",
                                            "USE_ENHANCED_ECOMMERCE" => "N",
                                            "USE_MAIN_ELEMENT_SECTION" => "N",
                                            "USE_PRICE_COUNT" => "N",
                                            "USE_PRODUCT_QUANTITY" => "N"
                                        )
                                    );?>
                                </div>
                                <div id="slick-nav-<?=$tab['NAME']?>-tab-<?=$tab['TAB']?>" class="products-slick-nav">
                                </div>
                            </div>
                        <? endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

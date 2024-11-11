<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
/**
 * @global array $arParams
 * @global CUser $USER
 * @global CMain $APPLICATION
 * @global string $cartId
 */
$compositeStub = (isset($arResult['COMPOSITE_STUB']) && $arResult['COMPOSITE_STUB'] == 'Y');
?>
<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
    <i class="fa fa-shopping-cart"></i>
    <span><?= GetMessage('TSB1_CART') ?></span>
    <div class="qty">
        <?
        if (!$compositeStub)
        {
            if ($arParams['SHOW_NUM_PRODUCTS'] == 'Y' && ($arResult['NUM_PRODUCTS'] > 0 || $arParams['SHOW_EMPTY_VALUES'] == 'Y'))
            {
                echo $arResult['NUM_PRODUCTS'];
            }
        }
        ?>
    </div>
</a>
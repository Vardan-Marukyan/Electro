<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $item
 * @var array $actualItem
 * @var array $minOffer
 * @var array $itemIds
 * @var array $price
 * @var array $measureRatio
 * @var bool $haveOffers
 * @var bool $showSubscribe
 * @var array $morePhoto
 * @var bool $showSlider
 * @var bool $itemHasDetailUrl
 * @var string $imgTitle
 * @var string $productTitle
 * @var string $buttonSizeClass
 * @var string $discountPositionClass
 * @var string $labelPositionClass
 * @var CatalogSectionComponent $component
 */
?>

<div class="product-img">
    <img src="<?=$item['PREVIEW_PICTURE']['SRC']?>" alt="<?=$item['PREVIEW_PICTURE']['ALT']?>">
</div>
<div class="product-body">
    <p class="product-category">Category</p>
    <h3 class="product-name"><a href="<?=$item['DETAIL_PAGE_URL']?>"><?=$productTitle?></a></h3>
    <h4 class="product-price">
        <?= $price['PRINT_RATIO_PRICE'];?>
        <?
        if ($arParams['SHOW_OLD_PRICE'] === 'Y'):
            if ($price['RATIO_PRICE'] < $price['RATIO_BASE_PRICE']):
                ?>
                <del class="product-old-price"><?=$price['PRINT_RATIO_BASE_PRICE']?></del>
            <?
            endif;
        endif;
        ?>
    </h4>
</div>
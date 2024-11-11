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





<div>
    <div class="product-img">
         <span class="product-item-image-slider-slide-container slide" id="<?=$itemIds['PICT_SLIDER']?>"
			<?=($showSlider ? 'display: none;' : 'style="display: none;"')?>
			data-slider-interval="<?=$arParams['SLIDER_INTERVAL']?>" data-slider-wrap="true">
			<?
            if ($showSlider)
            {
                foreach ($morePhoto as $key => $photo)
                {
                    ?>
                    <span class="product-item-image-slide item <?=($key == 0 ? 'active' : '')?>"
                          style="background-image: url('<?=$photo['SRC']?>');">
					</span>
                    <?
                }
            }
            ?>
		</span>
        <? if ($item['SECOND_PICT'])
        {
            $bgImage = !empty($item['PREVIEW_PICTURE_SECOND']) ? $item['PREVIEW_PICTURE_SECOND']['SRC'] : $item['PREVIEW_PICTURE']['SRC'];
            ?>
            <span class="product-item-image-alternative" id="<?=$itemIds['SECOND_PICT']?>"
                  style="background-image: url('<?=$bgImage?>'); <?=($showSlider ? 'display: none;' : 'display: none;')?>">
			</span>
            <?
        }?>
        <img src="<?=$item['PREVIEW_PICTURE']['SRC']?>" alt="<?=$item['PREVIEW_PICTURE']['ALT']?>">
        <? if ($arParams['SHOW_DISCOUNT_PERCENT'] === 'Y' || $item['LABEL']):?>
            <div class="product-label">
                <?if($price['PERCENT'] > 0 && $arParams['SHOW_DISCOUNT_PERCENT'] === 'Y'):?>
                    <span class="sale" id="<?=$itemIds['DSC_PERC']?>"><span><?=-$price['PERCENT']?>%</span></span>
                <? endif;?>
                <?
                if (!empty($item['LABEL_ARRAY_VALUE'])):
                    foreach ($item['LABEL_ARRAY_VALUE'] as $code => $value):
                        ?>
                        <span class="new" title="<?=$value?>"><?=$value?></span>
                    <?
                    endforeach;
                endif;
                ?>
            </div>
        <? endif; ?>
    </div>
    <div class="product-body">
        <p class="product-category">Category</p>
        <h3 class="product-name"><a href="<?=$item['DETAIL_PAGE_URL']?>"><?=$productTitle?></a></h3>
        <h4 class="product-price" id="<?=$itemIds['PRICE']?>">
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
        <div class="product-rating">
        </div>
        <div class="product-btns">
            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
            <? if ($arParams['DISPLAY_COMPARE']):?>
                <button id="<?=$itemIds['COMPARE_LINK']?>" class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
            <?endif;?>
            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
        </div>
    </div>
    <? if(!empty($price)):?>
        <?
        if (!$haveOffers)
        {
            if ($actualItem['CAN_BUY'])
            {
                ?>
                <div class="add-to-cart" id="<?=$itemIds['BASKET_ACTIONS']?>">
                    <button class="add-to-cart-btn" id="<?=$itemIds['BUY_LINK']?>"
                       href="javascript:void(0)" rel="nofollow">
                        <i class="fa fa-shopping-cart"></i>
                        <?=($arParams['ADD_TO_BASKET_ACTION'] === 'BUY' ? $arParams['MESS_BTN_BUY'] : $arParams['MESS_BTN_ADD_TO_BASKET'])?>
                    </button>
                </div>
                <?
            }
        }
        ?>
    <?endif;?>
</div>

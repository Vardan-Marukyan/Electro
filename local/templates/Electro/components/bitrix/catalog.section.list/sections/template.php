<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

$arViewModeList = $arResult['VIEW_MODE_LIST'];

$arViewStyles = array(
	'LIST' => array(
		'CONT' => 'bx_sitemap',
		'TITLE' => 'bx_sitemap_title',
		'LIST' => 'bx_sitemap_ul',
	),
	'LINE' => array(
		'CONT' => 'bx_catalog_line',
		'TITLE' => 'bx_catalog_line_category_title',
		'LIST' => 'bx_catalog_line_ul',
		'EMPTY_IMG' => $this->GetFolder().'/images/line-empty.png'
	),
	'TEXT' => array(
		'CONT' => 'bx_catalog_text',
		'TITLE' => 'bx_catalog_text_category_title',
		'LIST' => 'bx_catalog_text_ul'
	),
	'TILE' => array(
		'CONT' => 'bx_catalog_tile',
		'TITLE' => 'bx_catalog_tile_category_title',
		'LIST' => 'bx_catalog_tile_ul',
		'EMPTY_IMG' => $this->GetFolder().'/images/tile-empty.png'
	)
);
$arCurView = $arViewStyles[$arParams['VIEW_MODE']];

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

?>
<div class="section">
    <div class="container">
        <div class="row">
<?
	switch ($arParams['VIEW_MODE'])
	{
		case 'LINE':
			foreach ($arResult['SECTIONS'] as &$arSection)
			{
				$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
				$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);

				if (false === $arSection['PICTURE'])
				{
					$altValue = (string)($arSection['IPROPERTY_VALUES']['SECTION_PICTURE_FILE_ALT'] ?? '');
					if ($altValue === '')
					{
						$altValue = $arSection['NAME'];
					}
					$titleValue = (string)($arSection['IPROPERTY_VALUES']['SECTION_PICTURE_FILE_TITLE'] ?? '');
					if ($titleValue === '')
					{
						$titleValue = $arSection['NAME'];
					}
					$arSection['PICTURE'] = array(
						'SRC' => $arCurView['EMPTY_IMG'],
						'ALT' => $altValue,
						'TITLE' => $titleValue,
					);
					unset($titleValue, $altValue);
				}
				?>
                <div class="col-md-4 col-xs-6" id="<? echo $this->GetEditAreaId($arSection['ID']); ?>">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="<?= $arSection['PICTURE']['SRC']; ?>" alt="<?= $arSection['PICTURE']['ALT']; ?>">
                        </div>
                        <div class="shop-body">
                            <h3><?= $arSection['NAME']; ?><br>Collection</h3>
                            <a href="<?= $arSection['SECTION_PAGE_URL']; ?>" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <?
			}
			unset($arSection);
			break;
	}
?>
        </div>
    </div>
</div>
<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';

//we can't use $APPLICATION->SetAdditionalCSS() here because we are inside the buffered function GetNavChain()
$css = $APPLICATION->GetCSSArray();
if(!is_array($css) || !in_array("/bitrix/css/main/font-awesome.css", $css))
{
	$strReturn .= '<link href="'.CUtil::GetAdditionalFileURL("/bitrix/css/main/font-awesome.css").'" type="text/css" rel="stylesheet" />'."\n";
}

$strReturn .= '<div id="breadcrumb" class="section">
			        <div class="container">
				        <div class="row">
					        <div class="col-md-12">
                                <ul class="breadcrumb-tree">
                    ';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	$arrow = ($index > 0? '<i class="fa fa-angle-right"></i>' : '');

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= '
			<li>
				<a href="'.$arResult[$index]["LINK"].'" title="'.$title.'">
					'.$title.'
				</a>
			</li>';
	}
	else
	{
		$strReturn .= '
			<li class="active">
				'.$title.'
			</li>';
	}
}

$strReturn .= '
        				</ul>
					</div>
				</div>
			</div>
		</div>
';

return $strReturn;

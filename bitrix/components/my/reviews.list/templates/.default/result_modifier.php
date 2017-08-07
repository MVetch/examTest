<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arItems = count($arResult);
for($i = 0; $i<$arItems; $i++){
    $arResult[$i]['PREVIEW_PICTURE'] = CFile::GetFilearray($arResult[$i]['PREVIEW_PICTURE']);
}
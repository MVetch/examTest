<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arItems = count($arResult);
for($i = 0; $i<$arItems; $i++){
    $arResult[$i]['DETAIL_PICTURE'] = CFile::GetFilearray($arResult[$i]['DETAIL_PICTURE']);
}
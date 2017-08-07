<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arItems = count($arResult);
for($i = 0; $i<$arItems; $i++){
    $arResult[$i]['DETAIL_PICTURE'] = CFile::GetFilearray($arResult[$i]['DETAIL_PICTURE']);
    $docs = count($arResult[$i]['PROPERTY_DOCUMENTS_VALUE']);
    for($j = 0; $j<$docs; $j++){
    	$arResult[$i]['PROPERTY_DOCUMENTS_VALUE'][$j] = CFile::GetFilearray($arResult[$i]['PROPERTY_DOCUMENTS_VALUE'][$j]);
    	//echo var_dump($arResult[$i]['PROPERTY_DOCUMENTS_VALUE'][$j]);
    }
}
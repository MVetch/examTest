<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arItems = count($arResult);
for($i = 0; $i<$arItems; $i++){
    $image = CFile::GetFileArray($arResult[$i]['PREVIEW_PICTURE']);
    if (!empty($image)) {
        $tmpImage = CFile::ResizeImageGet($image, array("width" => 62, "height" => 56), BX_RESIZE_IMAGE_PROPORTIONAL, false);
        $image['src'] = $tmpImage['src'];
    } else {
        $image['src'] = '/upload/no_photo_left_block.jpg';
    }
    $arResult[$i]['PREVIEW_PICTURE'] = $image;
    $arResult[$i]['PREVIEW_TEXT'] = mb_substr($arResult[$i]['PREVIEW_TEXT'], 0, 150).'...';
}
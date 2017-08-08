<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/**
* Bitrix vars
*
* @var array $arResult
* @var array $arParams
* @var CMain $APPLICATION
* @var CUser $USER
* @var CBitrixReviewsListComponent $this
*/

if(!CModule::IncludeModule("iblock"))
{
    echo 'IBlock module doesn\'t work'; 
}
if ($this->StartResultCache()){
    $arSelect = array(
        "ID",
        "NAME",
        "DETAIL_PICTURE",
        "DATE_ACTIVE_FROM",
        "DETAIL_TEXT",
        "PREVIEW_TEXT",
        "PROPERTY_POSITION",
        "PROPERTY_COMPANY",
        "PROPERTY_DOCUMENTS"
    );

    $result = CIBlockElement::GetList(
                array(),
                array("IBLOCK_ID"=>5, "CODE"=>$arParams['CODE']),
                false,
                false,
                /*array()*/$arSelect
            );

    while($list = $result->GetNext()){
        $arResult[] = $list;
        //echo '<pre>' . var_export($list, true) . '</pre>';
    }
    $this->IncludeComponentTemplate();
}
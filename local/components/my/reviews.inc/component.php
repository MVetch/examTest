<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/**
* Bitrix vars
*
* @var array $arResult
* @var array $arParams
* @var CMain $APPLICATION
* @var CUser $USER
* @var CBitrixReviewsIncComponent $this
*/

if(!CModule::IncludeModule("iblock"))
{
    echo 'IBlock module doesn\'t work'; 
}

if ($this->StartResultCache()){
    $arSelect = array(
        "ID",
        "IBLOCK_ID",
        "NAME",
        "PREVIEW_PICTURE",
        "DATE_ACTIVE_FROM",
        "PREVIEW_TEXT",
        "PROPERTY_POSITION",
        "PROPERTY_COMPANY",
        "DETAIL_PAGE_URL"
    );

    $result = CIBlockElement::GetList(
                array("DATE_ACTIVE_FROM" => "ASC", "NAME" => "ASC"),
                array("IBLOCK_ID"=>5),
                false,
                array("nPageSize" => 2),
                $arSelect
            );

    while($list = $result->GetNext()){

        $arResult[] = $list;
        //echo '<pre>' . var_export($list, true) . '</pre>';
    }
    $this->IncludeComponentTemplate();
}
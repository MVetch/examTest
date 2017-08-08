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
                array(),
                array("IBLOCK_ID"=>5),
                false,
                array("nPageSize" => 2),
                $arSelect
            );
    $arParams['NAV_STRING'] = $result->GetPageNavStringEx($navComponentObject, 'Отзывы', '', 'Y');

    while($list = $result->GetNext()){

        $arButtons = CIBlock::GetPanelButtons(
           $list["IBLOCK_ID"],
           $list["ID"],
           0,
           array("SECTION_BUTTONS"=>false, "SESSID"=>false)
        );

        $arResult[] = array_merge(
            $list, 
            array(
                "EDIT_LINK" => $arButtons["edit"]["edit_element"]["ACTION_URL"],
                "DELETE_LINK" => $arButtons["edit"]["delete_element"]["ACTION_URL"]
            )
        );
        //echo '<pre>' . var_export($list, true) . '</pre>';
    }
    $this->IncludeComponentTemplate();
}
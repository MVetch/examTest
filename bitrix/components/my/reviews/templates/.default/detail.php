<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->IncludeComponent(
        "my:reviews.detail", 
        "", 
        array(
        	"CODE" => $arResult['VARIABLES']['CODE']
        ),
        false
    );
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
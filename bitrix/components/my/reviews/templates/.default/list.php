<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->IncludeComponent(
        "my:reviews.list", 
        "", 
        array(
        	"DISPLAY_TOP_PAGER" => "Y",
        	"DISPLAY_BOTTOM_PAGER" => "Y"
        ),
        false
    );
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
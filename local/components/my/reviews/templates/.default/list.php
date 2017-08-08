<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
    $APPLICATION->IncludeComponent(
        "my:reviews.list", 
        "", 
        array(
        	"DISPLAY_TOP_PAGER" => "Y",
        	"DISPLAY_BOTTOM_PAGER" => "Y"
        ),
        false
    );
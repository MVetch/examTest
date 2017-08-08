<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

    $APPLICATION->IncludeComponent(
        "my:reviews.detail", 
        "", 
        array(
        	"CODE" => $arResult['VARIABLES']['CODE']
        ),
        false
    );
    
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Отзывы");
?><?$APPLICATION->IncludeComponent(
	"my:reviews",
	"",
	Array(
		"SEF_FOLDER" => "/rew/",
		"SEF_MODE" => "Y"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
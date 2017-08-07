<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
define("NEED_AUTH", false);
if($_GET['register']!="yes"){
	$APPLICATION->SetTitle("Редактирование профиля");

	$APPLICATION->IncludeComponent(
		"bitrix:main.profile",
		"",
	Array()
	);
}
else{
	$APPLICATION->SetTitle("Регистрация");
	$APPLICATION->IncludeComponent(
	"bitrix:main.register",
	"",
	Array(
		"AUTH" => "Y",
		"REQUIRED_FIELDS" => array("EMAIL","NAME","SECOND_NAME","LAST_NAME"),
		"SET_TITLE" => "N",
		"SHOW_FIELDS" => array("EMAIL","NAME","SECOND_NAME","LAST_NAME","PERSONAL_WWW","PERSONAL_ICQ","PERSONAL_GENDER","PERSONAL_BIRTHDAY"),
		"SUCCESS_PAGE" => "/login/user.php",
		"USER_PROPERTY" => array(),
		"USER_PROPERTY_NAME" => "",
		"USE_BACKURL" => "Y"
	)
);
}
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
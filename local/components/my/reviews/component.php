<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/**
* Bitrix vars
*
* @var array $arResult
* @var array $arParams
* @var CMain $APPLICATION
* @var CUser $USER
* @var CBitrixReviewsComponent $this
*/

$arDefaultUrlTemplates404 = array(
   "list" => "index.php",
   "detail" => "#CODE#/"
);

$arDefaultVariableAliases404 = array();

$arDefaultVariableAliases = array();

$arComponentVariables = array("CODE");


$SEF_FOLDER = "";
$arUrlTemplates = array();

if ($arParams["SEF_MODE"] == "Y")
{
    $arVariables = array();

    $arUrlTemplates = 
        CComponentEngine::MakeComponentUrlTemplates($arDefaultUrlTemplates404, 
                                                    $arParams["SEF_URL_TEMPLATES"]);
    $arVariableAliases = 
        CComponentEngine::MakeComponentVariableAliases($arDefaultVariableAliases404, 
                                                       $arParams["VARIABLE_ALIASES"]);

    $componentPage = CComponentEngine::ParseComponentPath(
      $arParams["SEF_FOLDER"],
      $arUrlTemplates,
      $arVariables
    );

   if (StrLen($componentPage) <= 0)
      $componentPage = "list";

   CComponentEngine::InitComponentVariables($componentPage, 
                                            $arComponentVariables, 
                                            $arVariableAliases, 
                                            $arVariables);

   $SEF_FOLDER = $arParams["SEF_FOLDER"];
}
else
{
   $arVariables = array();

    $arVariableAliases = 
       CComponentEngine::MakeComponentVariableAliases($arDefaultVariableAliases, 
                                                      $arParams["VARIABLE_ALIASES"]);
    CComponentEngine::InitComponentVariables(false, 
                                             $arComponentVariables, 
                                             $arVariableAliases, $arVariables);

   $componentPage = "";
   if (StrLen($arVariables["CODE"]) > 0)
      $componentPage = "detail";
   else
      $componentPage = "list";

}
$arResult = array(
   "FOLDER" => $SEF_FOLDER,
   "URL_TEMPLATES" => $arUrlTemplates,
   "VARIABLES" => $arVariables,
   "ALIASES" => $arVariableAliases
);

$this->IncludeComponentTemplate($componentPage);
?>
<?
AddEventHandler("iblock", "OnBeforeIBlockElementAdd", "AddElementOrSectionCode");

function AddElementOrSectionCode(&$arFields) { 
   $params = array(
      "max_len" => "100", 
      "change_case" => "L", 
      "replace_space" => "_", 
      "replace_other" => "_", 
      "delete_repeat_replace" => "true", 
      "use_google" => "false", 
   );
   
   if (strlen($arFields["NAME"])>0 && strlen($arFields["CODE"])<=0 && $arFields["IBLOCK_ID"] == 5) {
      $arFields['CODE'] = CUtil::translit($arFields["NAME"], "ru", $params);    
   }
}
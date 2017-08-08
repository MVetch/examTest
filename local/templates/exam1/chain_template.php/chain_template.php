
<?
// файл /bitrix/templates/.default/chain_template.php

$sChainProlog = "";   // HTML выводимый перед навигационной цепочкой
$sChainBody = "";     // пункт навигационной цепочки
$sChainEpilog = "";   // HTML выводимый после навигационной цепочки

// разделитель
if ($ITEM_INDEX > 0)
   $sChainBody = "<font class=\"chain\">&nbsp;/&nbsp;</font>";

// если указана ссылка то
if (strlen($LINK)>0)
{
    // выводим ссылку
    $sChainBody .= "<a href=\"".$LINK."\" class=\"chain\">".htmlspecialchars($TITLE)."</a>";
}
else // иначе
{
    // текст
    $sChainBody .= "<font class=\"chain\">".htmlspecialchars($TITLE)."</font>";
}
?>
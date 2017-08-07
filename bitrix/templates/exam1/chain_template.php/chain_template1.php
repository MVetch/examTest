<?
if($arResult[$index]["LINK"] <> "")
   $strReturn .= '<li><a href="'.$arResult[$index]["LINK"].'" title="'.$title.'">'.$title.'</a></li>';
else 
   $strReturn .= '<li>'.$title.'</li>';
?>
<?
if(CModule::IncludeModule("iblock"))
{ 
    $obCache = new CPHPCache();
    $lifetime = 60*60*4;
    $cacheID = "products";
    $cachePath = "/";

    if($obCache->InitCache($lifetime, $cacheID, $cachePath)){
        $vars = $obCache->getVars();
        $aMenuLinks = $vars['aMenuLinks'];
    } 
    elseif ($obCache->StartDataCache()) {
        $result = CIBlockSection::GetList(
            array(),
            array("IBLOCK_ID"=>2),
            true,
            array(
                "ID", 
                "NAME"
            ),
            array("nPageSize"=>30)
        );
        $ret = array();
        while ($list = $result->Fetch()) {
            $aMenuLinks[] = array($list['NAME'], "/products/".$list['ID']."/", array(), array(),"");
        }
        $obCache->EndDataCache(array("aMenuLinks" => $aMenuLinks));
    }
}
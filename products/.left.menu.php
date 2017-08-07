<?
if(CModule::IncludeModule("iblock"))
{ 
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
}
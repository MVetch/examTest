<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
    if($arParams['DISPLAY_TOP_PAGER'] == "Y"){
        echo $arParams['NAV_STRING'];
    }
?>
<?foreach($arResult as $arItem):?>
    <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <div class="review-block" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="review-text">
        
            <div class="review-block-title"><span class="review-block-name"><a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem['NAME']?></a></span><span class="review-block-description"><?=$arItem['DATE_ACTIVE_FROM']?>, <?=$arItem['PROPERTY_POSITION_VALUE']?>, <?=$arItem['PROPERTY_COMPANY_VALUE']?></span></div>
            
            <div class="review-text-cont">
                <?=$arItem['PREVIEW_TEXT']?>
            </div>
        </div>
        <div class="review-img-wrap">
            <a href="<?=$arItem['DETAIL_PAGE_URL']?>">
                <?$image=$arItem['PREVIEW_PICTURE'];?>
                <?if(!$image || $image==NULL):?>
                    <img src="<?=SITE_DIR?>upload/no_photo.jpg" alt="img">
                <?else:?>
                    <img src="<?='/upload/'.$image['SUBDIR'].'/'.$image['FILE_NAME']?>" alt="img">
                <?endif?>
            </a>
        </div>
    </div>
    
<?endforeach?>

<?
    if($arParams['DISPLAY_BOTTOM_PAGER'] == "Y"){
        echo $arParams['NAV_STRING'];
    }
?>
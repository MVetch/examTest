<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
    if($arParams['DISPLAY_TOP_PAGER'] == "Y"){
        echo $arParams['NAV_STRING'];
    }
?>
<div class="item-wrap">
    <div class="rew-footer-carousel">
        <?foreach($arResult as $arItem):?>
            <div class="item">
                <div class="side-block side-opin">
                    <div class="inner-block">
                        <div class="title">
                            <div class="photo-block">
                                <img src="<?=$arItem['PREVIEW_PICTURE']['src']?>" alt="img">
                            </div>
                            <div class="name-block"><a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem['NAME']?></a></div>
                            <div class="pos-block"><?=$arItem['PROPERTY_POSITION_VALUE']?>,"<?=$arItem['PROPERTY_COMPANY_VALUE']?>"</div>
                        </div>
                        <div class="text-block">“<?=$arItem['PREVIEW_TEXT']?>“</div>
                    </div>
                </div>
            </div>
        <?endforeach?>
    </div>
</div>
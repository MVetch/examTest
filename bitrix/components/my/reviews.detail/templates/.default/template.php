<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
	$arItem = $arResult[0];
	$APPLICATION->SetTitle('Отзыв - '.$arItem['NAME'].' - '.$arItem['PROPERTY_COMPANY_VALUE']);
	$APPLICATION->SetPageProperty('title', 'Отзыв - '.$arItem['NAME']);
	$APPLICATION->SetPageProperty('keywords', 'лучшие, отзывы, '.$arItem['PROPERTY_COMPANY_VALUE']);
	$APPLICATION->SetPageProperty('description', $arItem['PREVIEW_TEXT']);
?>
<hr>
<div class="review-block">
	<div class="review-text">
		<div class="review-text-cont">
			<?=$arItem['DETAIL_TEXT']?>
		</div>
		<div class="review-autor">
			<?=$arItem['NAME']?>, <?=$arItem['DATE_ACTIVE_FROM']?>, <?=$arItem['PROPERTY_POSITION_VALUE']?>, <?=$arItem['PROPERTY_COMPANY_VALUE']?>.
		</div>
	</div>
	<div style="clear: both;" class="review-img-wrap">
        <?$image=$arItem['DETAIL_PICTURE'];?>
        <?if(!$image || $image==NULL):?>
        	<img src="<?=SITE_DIR?>upload/no_photo.jpg" alt="img">
        <?else:?>
        	<img src="<?='/upload/'.$image['SUBDIR'].'/'.$image['FILE_NAME']?>" alt="img">
        <?endif?>
	</div>
</div>

<?if($arItem['PROPERTY_DOCUMENTS_VALUE'] != NULL):?>
	<div class="exam-review-doc">
		<p>Документы:</p>
		<?foreach($arItem['PROPERTY_DOCUMENTS_VALUE'] as $arItemDoc):?>
			<div class="exam-review-item-doc">
				<img class="rew-doc-ico" src="<?=SITE_TEMPLATE_PATH?>/img/icons/pdf_ico_40.png">
				<a href="<?='/upload/'.$arItemDoc['SUBDIR'].'/'.$arItemDoc['FILE_NAME']?>"><?=$arItemDoc['ORIGINAL_NAME']?></a>
			</div>
		<?endforeach?>
	</div>
<?endif?>
<hr>
<a href="/rew/" class="review-block_back_link"> &larr; К списку отзывов</a>	
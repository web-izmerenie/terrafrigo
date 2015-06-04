<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);?>
<?if(!empty($arResult['ITEMS'])){?>
    <div class="production-map">
        <img src="/bitrix/templates/main/img/map.png" alt="" class="width-all" />
        <div class="production-map-inr">
            <?foreach($arResult['ITEMS'] as $arItem){
            $photo = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width'=>565, 'height'=>133), BX_RESIZE_IMAGE_PROPORTIONAL, true);   
            ?>
                <div class="marker" style="left: <?=$arItem['PROPERTIES']['ATT_LEFT']['VALUE']?>; top: <?=$arItem['PROPERTIES']['ATT_TOP']['VALUE']?>">
                    <a href="#" class="span">+</a>
                    <div class="bubl" style="">
                        <a href="#" class="close">x</a>
                        <img src="<?=$photo['src'];?>" alt="" class="width-all" />
                        <h3><?=$arItem['NAME'];?></h3>
                        <p><?=$arItem['PREVIEW_TEXT'];?></p>
                    </div>
                </div>
            <?}?>
        </div>
    </div>
<?}?>
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
<?if($arResult['ITEMS']){
    $arResult['ITEMS'] = array_chunk($arResult['ITEMS'], 4);?>
    <?foreach($arResult['ITEMS'] as $mainItem){?>
        <div class="benefit-block benefit-career clearfix">
            <ul>
                <?foreach($mainItem as $arItem){
                $photo = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width'=>85, 'height'=>82), BX_RESIZE_IMAGE_PROPORTIONAL, true, array());?>
                    <li style="background:url(<?=$photo['src'];?>) no-repeat center center <?=$arItem['PROPERTIES']['ATT_COLOR']['VALUE_XML_ID']?>">
                        <span><?=$arItem['PREVIEW_TEXT'];?></span>
                    </li>
                <?}?>
            </ul>
        </div>
    <?}?>
<?}?>

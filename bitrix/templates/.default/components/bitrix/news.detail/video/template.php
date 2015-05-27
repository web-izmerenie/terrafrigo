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
<?if(!empty($arResult)){
$photo = CFile::ResizeImageGet($arResult['DETAIL_PICTURE'], array('width'=>1850, 'height'=>1040), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
    <div class="production-video">
        <iframe src="<?=$arResult['PROPERTIES']['ATT_YOUTUBE']['VALUE'];?>" frameborder="0" allowfullscreen></iframe>
        <img src="<?=$photo['src'];?>" alt="" class="width-all" />
    </div>
<?}?>
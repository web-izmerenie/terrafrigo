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
    <?foreach($arResult['ITEMS'] as $arItem){
    $photo = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width'=>1850, 'height'=>920), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
        <img alt="" class="width-all" src="<?=$photo['src'];?>">
        <div class="wrapper"><p><?=$arItem['PREVIEW_TEXT'];?></p></div>
    <?}?>
<?}?>
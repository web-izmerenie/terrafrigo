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
$this->setFrameMode(true);
?>
<div class="news wrapper">
    <span class="new-title"><a href="/o-zavode/news/?year=<?=$arResult['PROPERTIES']['ATT_YEAR']['VALUE'];?>">Новости <?=$arResult['PROPERTIES']['ATT_YEAR']['VALUE'];?></a></span>
    <h1><?=$arResult['NAME'];?></h1>
    <?=$arResult['~DETAIL_TEXT'];?>
    <div class="news_images wrapper">
        <?foreach($arResult['PHOTOS'] as $arPhoto){
        $photo = CFile::ResizeImageGet($arPhoto, array('width'=>599, 'height'=>408), BX_RESIZE_IMAGE_PROPORTIONAL, true);
        $photoBig = CFile::ResizeImageGet($arPhoto, array('width'=>1280, 'height'=>1024), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
            <a class="fancybox" rel="gallery" href="<?=$photoBig['src'];?>"><img src="<?=$photo['src'];?>" alt=""/></a>
        <?}?>
    </div>
</div>
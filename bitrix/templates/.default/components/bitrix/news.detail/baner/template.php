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
$photo = CFile::ResizeImageGet($arResult['PREVIEW_PICTURE'], array('width'=>1850, 'height'=>845), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
    <div class="main-slider-wrapper">
        <div class="about-page-top">
            <div class="main-slider__item js-imgLiquidFill">
                <img class="main-slider__image" src="<?=$photo['src'];?>" alt=""/>
                <div class="title-fix"><h1><?$APPLICATION->ShowTitle()?></h1></div>
                <div class="main-slider__overlay">
                    <div class="wrapper">
                        <div class="main-slider__slider-description"><?=$arResult['PREVIEW_TEXT'];?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?}?>
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
<?if(!empty($arResult['ITEMS'])){?>
    <div class="main-slider-wrapper no-controls">
        <ul class="js-main-slider">
            <?foreach($arResult['ITEMS'] as $arItem){
            $photo = CFile::ResizeImageGet($arItem['DETAIL_PICTURE'], array('width'=>1850, 'height'=>845), BX_RESIZE_IMAGE_PROPORTIONAL, true, array());?>
                <li class="js-imgLiquidFill">
                    <div class="about-page-top heaters-page-top">
                        <div class="main-slider__item js-imgLiquidFill">
                            <img class="main-slider__image" src="<?=$photo['src']?>" alt="<?=$arItem['DETAIL_PICTURE']['ALT'];?>"/>
                            <div class="title-fix">
                                 <div class="inside-title">
                                    <?require($_SERVER['DOCUMENT_ROOT'].'/inc/module_path.php');?>
                                </div>
                                <h1><?$APPLICATION->ShowTitle()?></h1>
                            </div>
                            <div class="main-slider__overlay">
                                <div class="wrapper">
                                    <div class="main-slider__slider-description"><?=$arItem['PREVIEW_TEXT'];?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            <?}?>
        </ul>
    </div>
<?}?>
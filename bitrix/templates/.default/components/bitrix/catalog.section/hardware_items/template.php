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
$GLOBALS['SEO_TEXT'] = $arResult['~UF_SEO_TEXT']?>
<?if(!empty($arResult['ITEMS'])){?>
    <div class="wrapper translators-wrap">
        <div class="translators">
            <?foreach($arResult['ITEMS'] as $arItem){
            $photo = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width'=>171, 'height'=>128), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
                <div class="translators-element">
                    <div class="series-model-element_img">
                        <img src="<?=$photo['src'];?>" alt=""/>
                    </div>
                    <div class="series-model-element_text">
                        <p><?=$arItem['PREVIEW_TEXT'];?></p>
                        <a href="#popup-form2" class = "btn-price popup-open">Узнать стоимость</a>
                    </div>
                </div>
            <?}?>
        </div>
    </div>
<?}?>
<div class="series-btn clearfix">
    <div class="find-a-dealer find-a-dealer-m">
        <a href="/transportnyj-holod/dilery/">Найти дилера</a>
    </div>
</div>

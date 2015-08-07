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
<div class="wrapper series-model-wrap">
    <div class="series-model">
        <?foreach($arResult['ITEMS'] as $arItem){
            $photo = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width'=>241, 'height'=>156), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
            <div class="series-model-element">
                <div class="series-model-element_img">
                    <a href="<?=$arItem['DETAIL_PAGE_URL'];?>"><img src="<?=$photo['src'];?>" alt=""/></a>
                </div>
                <div class="series-model-element_text">
                    <h4><a href="<?=$arItem['DETAIL_PAGE_URL'];?>"><?=$arItem['NAME'];?></a></h4>
                    <?if(!empty($arItem['PROPERTIES']['ATT_TEMP']['VALUE']) || !empty($arItem['PROPERTIES']['ATT_WEIGHT']['VALUE'])){?>
                        <div class = "model-element_text-list model-element_text-list_head">
                            <span class="text-list_left"><?=$arItem['PROPERTIES']['ATT_TEMP']['NAME'];?></span>
                            <span class="text-list_right"><?=$arItem['PROPERTIES']['ATT_WEIGHT']['NAME'];?></span>
                        </div>
                        <?foreach($arItem['PROPERTIES']['ATT_TEMP']['VALUE'] as $k => $arTemp){?>
                            <div class = "model-element_text-list">
                                <span class="text-list_left"><?=$arTemp;?>°C</span>
                                <span class="text-list_right"><?= $arItem['PROPERTIES']['ATT_WEIGHT']['VALUE'][$k];?>м³</span>
                            </div>
                        <?}?>
                    <?}?>
                </div>
            </div>
         <?}?>
    </div>
</div>
<?}?>

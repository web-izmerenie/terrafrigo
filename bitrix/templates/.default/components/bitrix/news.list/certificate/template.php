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
    <div class="certificares-block clearfix">
        <ul>
            <?foreach($arResult['ITEMS'] as $arItem){
            $icon = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width'=>129, 'height'=>129), BX_RESIZE_IMAGE_PROPORTIONAL, true);
            $photo = CFile::ResizeImageGet($arItem['DETAIL_PICTURE'], array('width'=>1024, 'height'=>768), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
                <li style="background-color: <?=$arItem['PROPERTIES']['ATT_COLOR']['VALUE_XML_ID'];?>">
                    <a href="<?=$photo['src'];?>">
                        <span class="image"><img src="<?=$icon['src'];?>" alt="" /></span>
                        <span class="text"><?=$arItem['NAME'];?></span>
                    </a>
                </li>
            <?}?>
        </ul>
    </div>
<?}?>
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
<div class="contact-block-text wrapper">
    <?if(!empty($arResult['ITEMS'])){?>
        <?foreach($arResult['ITEMS'] as $arItem){?>
            <div class = "contact-block-info">
                <h2><?=$arItem['NAME'];?></h2>
                <?if(!empty($arItem['PROPERTIES']['ATT_ADRES']['VALUE'])){?>
                    <span>Адрес:</span>
                    <p><?=$arItem['PROPERTIES']['ATT_ADRES']['VALUE'];?></p>
                <?}?>
                 <?if(!empty($arItem['PROPERTIES']['ATT_TEL']['VALUE'])){?>
                    <span>Телефоны:</span>
                    <?foreach($arItem['PROPERTIES']['ATT_TEL']['VALUE'] as $arTel){?>
                        <p><?=$arTel;?></p>
                    <?}?>
                <?}?>
                <p><?=$arItem['PREVIEW_TEXT'];?></p>
            </div>
        <?}?>
    <?}?>
</div>
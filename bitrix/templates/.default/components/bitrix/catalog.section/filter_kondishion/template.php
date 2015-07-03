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
<div class="radio-btn">
    <?foreach($arResult['ITEMS'] as $arItem){?>
        <div><input type="radio" name="gr1" value="<?=$arItem['ID']?>" id="bx<?=$arItem['ID']?>" /><label for="bx<?=$arItem['ID']?>"><?=$arItem['NAME'];?></label></div>
    <?}?>
</div>
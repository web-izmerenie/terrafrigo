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

<div class="dealers-map">
    <div class="dealers-map-title">Дилеры TerraFrigo</div>
    <div id="gomap" style="width:100%; height: 527px;"></div>
    <ul class="point">
        <?foreach($arResult['SECTIONS'] as $arSection){?>
            <li data-id="<?=$arSection['ID'];?>" data-name="<?=$arSection['NAME'];?>" data-url="<?=$arSection['SECTION_PAGE_URL'];?>" data-coordinat="<?=$arSection['UF_COORDINAT'];?>">
                <?foreach($arSection['ITEMS'] as $arItem){?>
                    <p><?=$arItem['NAME'];?></p>
                <?}?>
            </li>
        <?}?>
    </ul>
</div>
<div class="contact-city">
    <div class="contact-city_wrap wrapper">
        <?foreach($arResult['COUNTRY_LIST'] as $arList){?>
            <div class="wrap-colum">
                <ul>
                    <?foreach($arList as $arListItem){?>
                        <li><a data-id="<?=$arListItem['ID'];?>" href="#"><?=$arListItem['NAME'];?></a></li>
                    <?}?>
                </ul>
            </div>
        <?}?>
    </div>
</div>

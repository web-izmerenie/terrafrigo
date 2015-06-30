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
    <?foreach($arResult['ITEMS'] as $arItem){?>
        <h2><?=$arItem['NAME'];?></h2>
        <ul>
            <?if(!empty($arItem['PROPERTIES']['ATT_TEL']['VALUE'])){?>
                <li>
                    <span>Телефоны:</span>
                    <?foreach($arItem['PROPERTIES']['ATT_TEL']['VALUE'] as $arTel){?>
                        <p><?=$arTel?></p>
                    <?}?>
                    <?if(!empty($arItem['PROPERTIES']['ATT_FAKS']['VALUE'])){?>
                        <span>Факс:</span>
                        <p><?=$arItem['PROPERTIES']['ATT_FAKS']['VALUE'];?></p>
                    <?}?>
                </li>
            <?}?>
            <?if(!empty($arItem['PROPERTIES']['ATT_ADRES']['~VALUE']['TEXT'])){?>
                <li>
                    <span>Адрес:</span>
                    <p class="adress-text"><?=$arItem['PROPERTIES']['ATT_ADRES']['~VALUE']['TEXT'];?></p>
                </li>
            <?}?>
        </ul>
        <?if(!empty($arItem['PROPERTIES']['ATT_INPUT']['~VALUE'])){?>
            <ul>
                <?foreach($arItem['PROPERTIES']['ATT_INPUT']['~VALUE'] as $k => $arInput){?>
                    <li>
                        <span><?=$arItem['PROPERTIES']['ATT_INPUT']['DESCRIPTION'][$k]?></span>
                        <p><?=$arInput['TEXT'];?></p>
                    </li>
                <?}?>
            </ul>
        <?}?>
    <?}?>
<?}?>
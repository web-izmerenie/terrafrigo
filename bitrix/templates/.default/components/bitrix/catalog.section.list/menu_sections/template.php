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
<ul>
    <?foreach($arResult['SECTIONS'] as $arSections){?>
    <li <?if($_GET['SECTION_CODE'] === $arSections['CODE']){?>class="active"<?}?>>
            <a href="<?=$arSections['SECTION_PAGE_URL'];?>"><?=$arSections['NAME'];?></a>
        </li>
    <?}?>
</ul>

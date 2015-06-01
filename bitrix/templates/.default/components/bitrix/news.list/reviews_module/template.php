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
    <div class="reviews-block">
        <div class="title wrapper">
            <h3>Отзывы</h3>
            <a href="<?=$arResult['SECTION_PAGE_URL'];?>" class="btn-list-white">Все отзывы</a>
        </div>
        <ul>
            <?foreach($arResult['ITEMS'] as $arItem){?>
                <li>
                    <div class="logo-comp">
                        <img alt="" src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>">
                    </div>
                    <div class="name-comp"><?=$arItem['NAME'];?></div>
                    <div class="text-comp"><?=$arItem['PREVIEW_TEXT'];?></div>
                </li>
            <?}?>
        </ul>
    </div>
<?}?>
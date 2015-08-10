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
    <div class="career-list wrapper">
        <h2>Нам требуется:</h2>
        <ul>
            <?foreach($arResult['ITEMS'] as $arItem){?>
                <li>
                    <h3><?=$arItem['NAME'];?></h3>
                    <p>Обязанности: <?=$arItem['PREVIEW_TEXT'];?></p>
                    <div class="hid-text"><?=$arItem['DETAIL_TEXT'];?></div>
                </li>
            <?}?>
        </ul>
    </div>

    <div class="send-btn clearfix">
        <a href="mailto:personal@terrafrigo.ru" class="btn-type-1">Отправить резюме</a>
        <span class="btn-type-2">Служба персонала<br /><b>8 928 778-74-79</b></span>
    </div>
<?}else{?>
    <div class="career-list wrapper">
        <h2>сейчас открытых вакансий нет</h2>
    </div>
<?}?>

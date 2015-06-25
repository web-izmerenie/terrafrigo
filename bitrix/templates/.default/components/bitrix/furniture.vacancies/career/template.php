<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if(!empty($arResult['ITEMS'])){?>
<div class="career-list wrapper">
    <h2>Нам требуется:</h2>
    <ul>
        <?foreach($arResult['ITEMS'] as $arItem){?>
            <li>
                <h3><?=$arItem['NAME'];?></h3>
                <p>Обязанности: <?=$arItem['PREVIEW_TEXT'];?></p>
            </li>
        <?}?>
    </ul>
</div>

<div class="send-btn clearfix">
    <a href="#" class="btn-type-1">Отправить резюме</a>
    <span class="btn-type-2">Служба персонала<br /><b>8 928 778-74-79</b></span>
</div>
<?}?>
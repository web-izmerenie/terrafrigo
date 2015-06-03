<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?foreach($arResult['arMapStruct'] as $arItem){?>
    <ul class="footer-middle__list">
        <li class="footer-middle__list-item">
            <a class="footer-middle__list-link footer-middle__list-link-bold" href="<?=$arItem['FULL_PATH'];?>">
                <strong class="footer-middle__subhead"><?=$arItem['NAME'];?></strong>
            </a>
        </li>
        <?foreach($arItem['CHILDREN'] as $arChild){?>
            <li class="footer-middle__list-item">
                <a class="footer-middle__list-link" href="<?=$arChild['FULL_PATH'];?>"><?=$arChild['NAME'];?></a>
            </li>
        <?}?>
    </ul>
<?}?>
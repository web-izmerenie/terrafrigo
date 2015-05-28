<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <?foreach($arResult as $arItem){
        if($arItem['TEXT'] == $GLOBALS['MENU_INSIDE']){
            foreach($arItem['CHILDREN'] as $arChild){?>
                <li class="footer-middle__list-item">
                    <a class="footer-middle__list-link" href="<?=$arChild['LINK'];?>"><?=$arChild['TEXT'];?></a>
                </li>
            <?}
        }
    }?>
<?endif?>
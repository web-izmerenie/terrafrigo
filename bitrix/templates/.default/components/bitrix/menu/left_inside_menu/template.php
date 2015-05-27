<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <div class="fixed-left-menu close">
        <a href="/"><div class="logo"></div></a>
        <nav>
            <ul>
                <?foreach($arResult as $arItem){?>
                <li><a href="<?=$arItem['LINK']?>"><?=$arItem['TEXT'];?></a>
                    <?if(isset($arItem['CHILDREN'])){?>
                        <?foreach($arItem['CHILDREN'] as $arChildren){?>
                            <ul>
                                <li <?if($arChildren['SELECTED'] == 1){?>
                                    class="active"<?}?>>
                                    <a href="<?=$arChildren['LINK']?>"><?=$arChildren['TEXT'];?></a>
                                </li>
                            </ul>
                        <?}?>
                    <?}?>
                </li>
                <?}?>
            </ul>
        </nav>
    </div>
<?endif?>
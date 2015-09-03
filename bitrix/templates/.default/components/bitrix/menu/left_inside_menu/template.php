<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <div class="fixed-left-menu close">
        <a href="/"><div class="logo"></div></a>
        <nav>
            <ul>
                <?foreach($arResult as $arItem){?>
                <li><a href="<?=$arItem['LINK']?>"
                        <?if($arItem['PARAMS']){
                        foreach($arItem['PARAMS'] as $k=>$arParam){?>
                            <?=$k;?>="<?=$arParam;?>"
                        <?}
                    }?>>
                        <?=$arItem['TEXT'];?>
                    </a>
                    <?if(isset($arItem['CHILDREN']) && $arItem['SELECTED'] == 1){?>
                        <?foreach($arItem['CHILDREN'] as $arChildren){?>
                            <ul>
                                <li <?if($arChildren['SELECTED'] == 1){?>
                                    class="active"<?}?>>
                                    <a href="<?=$arChildren['LINK']?>"><?=$arChildren['TEXT'];?></a>
                                </li>
                                <?if($arChildren['SELECTED'] == '1'){?>
                                     <?$APPLICATION->IncludeComponent(
                                        "bitrix:menu",
                                        "left_innner_menu",
                                        Array(
                                            "ROOT_MENU_TYPE" => "inner_catalog",
                                            "MENU_CACHE_TYPE" => "N",
                                            "MENU_CACHE_TIME" => "3600",
                                            "MENU_CACHE_USE_GROUPS" => "Y",
                                            "MENU_CACHE_GET_VARS" => array(""),
                                            "MAX_LEVEL" => "1",
                                            "CHILD_MENU_TYPE" => "inner_catalog",
                                            "USE_EXT" => "N",
                                            "DELAY" => "N",
                                            "ALLOW_MULTI_SELECT" => "N"
                                        )
                                    );?>
                                <?}?>
                            </ul>
                        <?}?>
                    <?}?>
                </li>
                <?}?>
            </ul>
        </nav>
    </div>
<?endif?>

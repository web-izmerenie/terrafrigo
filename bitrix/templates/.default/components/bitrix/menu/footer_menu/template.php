<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <div class="footer-middle">
        <div class="footer-middle__wrapper wrapper clearfix">
            <?foreach($arResult as $k => $arItem){
            $k = $k + 1;?>
                <div class="footer-middle__col footer-middle__col_col<?=$k;?>">
                    <h4 class="footer-middle__heading"><a href="<?=$arItem['LINK'];?>"><?=$arItem['TEXT'];?></a></h4>
                    <?if(isset($arItem['CHILDREN'])){
                        if($arItem['TEXT'] == 'Продукция'){?>
                        <?foreach($arItem['CHILDREN'] as $arChildrenCat){
                        $GLOBALS['MENU_INSIDE'] = $arChildrenCat['TEXT'];?>
                            <ul class="footer-middle__list">
                                <li class="footer-middle__list-item">
                                    <a class="footer-middle__list-link footer-middle__list-link-bold" href="<?=$arChildrenCat['LINK']?>">
                                        <strong class="footer-middle__subhead"><?=$arChildrenCat['TEXT'];?></strong>
                                    </a>
                                </li>
                                <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"inside_catalog_menu", 
	array(
		"ROOT_MENU_TYPE" => "inner",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "2",
		"CHILD_MENU_TYPE" => "inner_catalog",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>
                            </ul>
                        <?}?>
                        <?}else{?>
                            <ul class="footer-middle__list">
                                <?foreach($arItem['CHILDREN'] as $arChildren){?>
                                    <li class="footer-middle__list-item">
                                        <a class="footer-middle__list-link" href="<?=$arChildren['LINK'];?>"><?=$arChildren['TEXT'];?></a>
                                    </li>
                                <?}?>
                            </ul>
                        <?}?>
                    <?}?>
                </div>
            <?}?>
        </div>
    </div>
<?endif?>
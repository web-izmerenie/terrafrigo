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
                            <?$APPLICATION->IncludeComponent("bitrix:main.map", "catalog_footer", Array(
                                    "CACHE_TYPE" => "A",	// Тип кеширования
                                    "CACHE_TIME" => "3600",	// Время кеширования (сек.)
                                    "SET_TITLE" => "N",	// Устанавливать заголовок страницы
                                    "LEVEL" => "3",	// Максимальный уровень вложенности (0 - без вложенности)
                                    "COL_NUM" => "1",	// Количество колонок
                                    "SHOW_DESCRIPTION" => "N",	// Показывать описания
                                ),
                                false
                            );?>
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
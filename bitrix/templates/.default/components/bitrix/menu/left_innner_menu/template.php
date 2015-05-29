<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <ul>
        <?foreach($arResult as $arItem){?>
        <li <?if($arItem['SELECTED'] == 1){?>class="active"<?}?>>
            <a href="<?=$arItem['LINK']?>"><?=$arItem['TEXT'];?></a>
             <?if($arItem['SELECTED'] == 1){?>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:catalog.section.list",
                    "",
                    Array(
                        "IBLOCK_TYPE" => "transport_cold",
                        "IBLOCK_ID" => "17",
                        "SECTION_ID" => "",
                        "SECTION_CODE" => $_REQUEST["SECTION_CODE"],
                        "COUNT_ELEMENTS" => "Y",
                        "TOP_DEPTH" => "2",
                        "SECTION_FIELDS" => array("", "undefined", ""),
                        "SECTION_USER_FIELDS" => array("", "undefined", ""),
                        "VIEW_MODE" => "LINE",
                        "SHOW_PARENT_NAME" => "Y",
                        "SECTION_URL" => "",
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "36000000",
                        "CACHE_GROUPS" => "Y",
                        "ADD_SECTIONS_CHAIN" => "Y"
                    )
                );?>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:catalog.section",
                    "",
                    Array(
                        "IBLOCK_TYPE" => "transport_cold",
                        "IBLOCK_ID" => "17",
                        "SECTION_ID" => "",
                        "SECTION_CODE" => $_REQUEST["SECTION_CODE"],
                        "SECTION_USER_FIELDS" => array("", "undefined", ""),
                        "ELEMENT_SORT_FIELD" => "sort",
                        "ELEMENT_SORT_ORDER" => "asc",
                        "ELEMENT_SORT_FIELD2" => "id",
                        "ELEMENT_SORT_ORDER2" => "desc",
                        "FILTER_NAME" => "arrFilter",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "SHOW_ALL_WO_SECTION" => "N",
                        "PAGE_ELEMENT_COUNT" => "30",
                        "LINE_ELEMENT_COUNT" => "3",
                        "PROPERTY_CODE" => array("", "undefined", ""),
                        "OFFERS_LIMIT" => "5",
                        "TEMPLATE_THEME" => "blue",
                        "MESS_BTN_BUY" => "Купить",
                        "MESS_BTN_ADD_TO_BASKET" => "В корзину",
                        "MESS_BTN_SUBSCRIBE" => "Подписаться",
                        "MESS_BTN_DETAIL" => "Подробнее",
                        "MESS_NOT_AVAILABLE" => "Нет в наличии",
                        "SECTION_URL" => "",
                        "DETAIL_URL" => "",
                        "SECTION_ID_VARIABLE" => "SECTION_CODE",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "AJAX_OPTION_HISTORY" => "N",
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "36000000",
                        "CACHE_GROUPS" => "Y",
                        "SET_TITLE" => "N",
                        "SET_BROWSER_TITLE" => "N",
                        "BROWSER_TITLE" => "-",
                        "SET_META_KEYWORDS" => "N",
                        "META_KEYWORDS" => "-",
                        "SET_META_DESCRIPTION" => "N",
                        "META_DESCRIPTION" => "-",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "SET_STATUS_404" => "N",
                        "CACHE_FILTER" => "N",
                        "ACTION_VARIABLE" => "action",
                        "PRODUCT_ID_VARIABLE" => "id",
                        "PRICE_CODE" => array(),
                        "USE_PRICE_COUNT" => "N",
                        "SHOW_PRICE_COUNT" => "1",
                        "PRICE_VAT_INCLUDE" => "Y",
                        "BASKET_URL" => "/personal/basket.php",
                        "USE_PRODUCT_QUANTITY" => "N",
                        "ADD_PROPERTIES_TO_BASKET" => "Y",
                        "PRODUCT_PROPS_VARIABLE" => "prop",
                        "PARTIAL_PRODUCT_PROPERTIES" => "N",
                        "PRODUCT_PROPERTIES" => array(),
                        "DISPLAY_COMPARE" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "DISPLAY_TOP_PAGER" => "N",
                        "DISPLAY_BOTTOM_PAGER" => "N",
                        "PAGER_TITLE" => "Товары",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "MESS_BTN_COMPARE" => "Сравнить",
                        "ADD_PICT_PROP" => "-",
                        "LABEL_PROP" => "-"
                    )
                );?>
            <?}?>
        </li>
        <?}?>
    </ul>
<?endif?>

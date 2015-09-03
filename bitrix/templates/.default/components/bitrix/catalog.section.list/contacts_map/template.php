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
<div class="contact-page_inside">
    <?foreach($arResult['SECTIONS'] as $k => $arSection){?>
        <div class="adress-map" id="<?=$arSection['CODE'];?>" data-coordinat="<?=$arSection['UF_COORDINAT'];?>">
            <div class="adress-map_head wrapper ">
                <h2><?=$arSection['NAME'];?></h2>
                <ul class="adress-map_head-list">
                    <?foreach($arResult['SECTIONS'] as $l => $arCity){
                        if($k != $l){?>
                            <li><a href="#<?=$arCity['CODE']?>"><?=$arCity['NAME']?></a></li>
                        <?}?>
                    <?}?>
                </ul>
            </div>
            <div class="map-wrap">

                <div id="gomap<?=$arSection['ID'];?>" class="gomap" style="width:100%; height: 465px;"></div>
            </div>

            <div class="contact-adress_wrap wrapper">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:catalog.section", 
                    "contacts_items", 
                    array(
                        "COMPONENT_TEMPLATE" => "contacts_items",
                        "IBLOCK_TYPE" => "content",
                        "IBLOCK_ID" => "26",
                        "SECTION_ID" => $arSection["ID"],
                        "SECTION_CODE" => "",
                        "SECTION_USER_FIELDS" => array(
                            0 => "UF_COORDINAT",
                            1 => "",
                        ),
                        "ELEMENT_SORT_FIELD" => "sort",
                        "ELEMENT_SORT_ORDER" => "asc",
                        "ELEMENT_SORT_FIELD2" => "id",
                        "ELEMENT_SORT_ORDER2" => "desc",
                        "FILTER_NAME" => "arrFilter",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "SHOW_ALL_WO_SECTION" => "N",
                        "PAGE_ELEMENT_COUNT" => "30",
                        "LINE_ELEMENT_COUNT" => "3",
                        "PROPERTY_CODE" => array(
                            0 => "ATT_ADRES",
                            1 => "ATT_INPUT",
                            2 => "ATT_TEL",
                            3 => "",
                        ),
                        "OFFERS_LIMIT" => "5",
                        "TEMPLATE_THEME" => "blue",
                        "MESS_BTN_BUY" => "Купить",
                        "MESS_BTN_ADD_TO_BASKET" => "В корзину",
                        "MESS_BTN_SUBSCRIBE" => "Подписаться",
                        "MESS_BTN_DETAIL" => "Подробнее",
                        "MESS_NOT_AVAILABLE" => "Нет в наличии",
                        "SECTION_URL" => "",
                        "DETAIL_URL" => "",
                        "SECTION_ID_VARIABLE" => "SECTION_ID",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
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
                        "PRICE_CODE" => array(
                        ),
                        "USE_PRICE_COUNT" => "N",
                        "SHOW_PRICE_COUNT" => "1",
                        "PRICE_VAT_INCLUDE" => "Y",
                        "BASKET_URL" => "/personal/basket.php",
                        "USE_PRODUCT_QUANTITY" => "N",
                        "PRODUCT_QUANTITY_VARIABLE" => "",
                        "ADD_PROPERTIES_TO_BASKET" => "Y",
                        "PRODUCT_PROPS_VARIABLE" => "prop",
                        "PARTIAL_PRODUCT_PROPERTIES" => "N",
                        "PRODUCT_PROPERTIES" => array(
                        ),
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
                    ),
                    false
                );?>
            </div>
        </div>
    <?}?>
</div>
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
<div class="wrapper">
    		
       <?$APPLICATION->IncludeComponent(
            "bitrix:news.detail",
            "text",
            Array(
                "IBLOCK_TYPE" => "content",
                "IBLOCK_ID" => "13",
                "ELEMENT_ID" => "148",
                "ELEMENT_CODE" => "",
                "CHECK_DATES" => "Y",
                "FIELD_CODE" => array("", "undefined", ""),
                "PROPERTY_CODE" => array("", "undefined", ""),
                "IBLOCK_URL" => "",
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
                "SET_STATUS_404" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "N",
                "ADD_ELEMENT_CHAIN" => "N",
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "USE_PERMISSIONS" => "N",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "USE_SHARE" => "N",
                "PAGER_TEMPLATE" => ".default",
                "DISPLAY_TOP_PAGER" => "N",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "PAGER_TITLE" => "Страница",
                "PAGER_SHOW_ALL" => "N"
            )
        );?>
    <?if(!empty($arResult['SECTIONS'])){?>
        <div class="search_result clearfix">
            <ul>
                <?foreach($arResult['SECTIONS'] as $arSections){
                $photo = CFile::ResizeImageGet($arSections['PICTURE'], array('width'=>241, 'height'=>156), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
                    <li class="element">
                        <a href="<?=$arSections['SECTION_PAGE_URL'];?>">
                            <div class="element-img"><img src="<?=$photo['src'];?>" alt=""></div>
                            <div class="element-name"><?=$arSections['NAME'];?></div>
                        </a>
                    </li>
                <?}?>
            </ul>
        </div>
    <?}?>
</div>

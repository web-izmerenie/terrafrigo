<?define('ABOUT', 'Y');
define('BANER', 'Y');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О заводе");?>
<div class="benefit-block">
    		<ul>
    			<li class="benefit-icon-1"><span>Проверка ОТК на каждом этапе производства оборудования</span></li>
    			<li class="benefit-icon-2"><span>Проверка ОТК на каждом этапе производства оборудования</span></li>
    			<li class="benefit-icon-3"><span>Проверка ОТК на каждом этапе производства оборудования</span></li>
    			<li class="benefit-icon-4"><span>Проверка ОТК на каждом этапе производства оборудования</span></li>
    		</ul>
    	</div>
<div class="about-text">
	 <?$APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "other_content",
        Array(
            "IBLOCK_TYPE" => "content",
            "IBLOCK_ID" => "13",
            "NEWS_COUNT" => "20",
            "SORT_BY1" => "SORT",
            "SORT_ORDER1" => "ASC",
            "SORT_BY2" => "ID",
            "SORT_ORDER2" => "DESC",
            "FILTER_NAME" => "",
            "FIELD_CODE" => array(0=>"",1=>"undefined",2=>"",),
            "PROPERTY_CODE" => array(0=>"",1=>"undefined",2=>"",),
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "AJAX_OPTION_HISTORY" => "N",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "36000000",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "PREVIEW_TRUNCATE_LEN" => "",
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "SET_TITLE" => "N",
            "SET_BROWSER_TITLE" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_STATUS_404" => "N",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "PARENT_SECTION" => "92",
            "PARENT_SECTION_CODE" => "",
            "INCLUDE_SUBSECTIONS" => "Y",
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "PAGER_TEMPLATE" => ".default",
            "DISPLAY_TOP_PAGER" => "N",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "PAGER_TITLE" => "Новости",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N"
        )
    );?>
</div>
<?require($_SERVER['DOCUMENT_ROOT'].'/inc/module_catalog.php');?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

<?$GLOBALS['iblock_id'] = '22';
define('HARDWARE', 'Y');
define('BANER', 'Y');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "комплектующие для холодильного оборудования, комплектующие для автокондиционеров");
$APPLICATION->SetPageProperty("description", "Завод ТерраФриго производит и продает комплектующие и расходные материалы для холодильного оборудования, автокондиционеров. Комплектующие используются для сервисного обслуживания промышленного оборудования Террафриго.");
$APPLICATION->SetTitle("Комплектующие");
?><?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"hardware_sections", 
	array(
		"IBLOCK_TYPE" => "transport_cold",
		"IBLOCK_ID" => "22",
		"SECTION_ID" => "",
		"SECTION_CODE" => $_REQUEST["SECTION_CODE"],
		"COUNT_ELEMENTS" => "Y",
		"TOP_DEPTH" => "2",
		"SECTION_FIELDS" => array(
			0 => "PICTURE",
			1 => "undefined",
			2 => "",
		),
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "undefined",
			2 => "",
		),
		"VIEW_MODE" => "LIST",
		"SHOW_PARENT_NAME" => "Y",
		"SECTION_URL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
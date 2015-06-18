<?define('DEALERS', 'Y');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Дилеры");
?>
<div class="inside-conent dealers-page">
<?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "map", Array(
	"IBLOCK_TYPE" => "content",	// Тип инфоблока
		"IBLOCK_ID" => "23",	// Инфоблок
		"SECTION_ID" => "",	// ID раздела
		"SECTION_CODE" => $_REQUEST["SECTION_CODE"],	// Код раздела
		"COUNT_ELEMENTS" => "N",	// Показывать количество элементов в разделе
		"TOP_DEPTH" => "2",	// Максимальная отображаемая глубина разделов
		"SECTION_FIELDS" => array(	// Поля разделов
			0 => "",
			1 => "undefined",
			2 => "",
		),
		"SECTION_USER_FIELDS" => array(	// Свойства разделов
			0 => "UF_COORDINAT",
			1 => "undefined",
			2 => "",
		),
		"VIEW_MODE" => "LIST",	// Вид списка подразделов
		"SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
		"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
	),
	false
);?>
</div>
<div id="map" style="width:100%; height:500px;"></div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
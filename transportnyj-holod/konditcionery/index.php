<?$GLOBALS['iblock_id'] = '19';
define('BANER', 'Y');
define('COLD-TRANSPORT', 'Y');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Кондиционеры для коммерческого транспорта");
?>
<div class="benefit-block">
    <ul>
        <li class="transport-icon-1" style="background-color: #4ea4e4;"><span>Отечественное оборудование по ценам ниже европейских аналогов</span></li>
        <li class="com-icon-1" style="background-color: #ec5a5d;"><span>Более 80 дилерских центров продаж и сервисного обслуживания по России и СНГ</span></li>
        <li class="com-icon-2" style="background-color: #edcf85;"><span>Проверка ОТК на каждом этапе производства оборудования</span></li>
        <li class="com-icon-3" style="background-color: #21c097;"><span>Фреон, заправляемый в установки, не содержит хлора и безопасен для окружающей среды и перевозимой продукции</span></li>
    </ul>
</div>
<?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "filter_kondishion", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "service",	// Тип инфоблока
		"IBLOCK_ID" => "20",	// Инфоблок
		"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
		"SECTION_CODE" => "",	// Код раздела
		"COUNT_ELEMENTS" => "Y",	// Показывать количество элементов в разделе
		"TOP_DEPTH" => "2",	// Максимальная отображаемая глубина разделов
		"SECTION_FIELDS" => array(	// Поля разделов
			0 => "",
			1 => "",
		),
		"SECTION_USER_FIELDS" => array(	// Свойства разделов
			0 => "",
			1 => "",
		),
		"VIEW_MODE" => "LINE",	// Вид списка подразделов
		"SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
		"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

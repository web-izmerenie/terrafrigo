<?define('BANER', 'Y');
define('CAREER', 'Y');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Карьера");?>
<div class="benefit-block benefit-career clearfix">
    <ul>
        <li class="career-icon-1" style="background-color: #4ea4e4;"><span>Стабильная высокая заработная плата</span></li>
        <li class="career-icon-2" style="background-color: #ec5a5d;"><span>Карьерный рост</span></li>
        <li class="career-icon-3" style="background-color: #edcf85;"><span>Оформление по ТК РФ</span></li>
        <li class="career-icon-4" style="background-color: #21c097;"><span>ДМС</span></li>
        <li class="career-icon-5" style="background-color: #21c097;"><span>Социальные программы</span></li>
        <li class="career-icon-6" style="background-color: #edcf85;"><span>Обучение</span></li>
        <li class="career-icon-7" style="background-color: #4ea4e4;"><span>Доставка на производство служебным транспортом</span></li>
        <li class="empty" style="background-color: #4b9ecc;"><span></span></li>
    </ul>
</div>
<?$APPLICATION->IncludeComponent("bitrix:furniture.vacancies", "career", Array(
	"IBLOCK_TYPE" => "content",	// Типы инфоблоков
		"IBLOCK_ID" => "16",	// Список инфоблоков
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
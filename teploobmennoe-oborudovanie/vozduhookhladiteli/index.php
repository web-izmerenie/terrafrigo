<?define('BANER', 'Y');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Воздухоохладители");
?><?$APPLICATION->IncludeComponent("bitrix:catalog.element", "heart_transport_element", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "heat_tranport",	// Тип инфоблока
		"IBLOCK_ID" => "28",	// Инфоблок
		"ELEMENT_ID" => "457",	// ID элемента
		"ELEMENT_CODE" => "",	// Код элемента
		"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
		"SECTION_CODE" => "",	// Код раздела
		"PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "",
		),
		"OFFERS_LIMIT" => "0",	// Максимальное количество предложений для показа (0 - все)
		"TEMPLATE_THEME" => "blue",	// Цветовая тема
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DETAIL_PICTURE_MODE" => "IMG",	// Режим показа детальной картинки
		"ADD_DETAIL_TO_SLIDER" => "N",	// Добавлять детальную картинку в слайдер
		"DISPLAY_PREVIEW_TEXT_MODE" => "E",	// Показ описания для анонса
		"MESS_BTN_BUY" => "Купить",	// Текст кнопки "Купить"
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",	// Текст кнопки "Добавить в корзину"
		"MESS_BTN_SUBSCRIBE" => "Подписаться",	// Текст кнопки "Уведомить о поступлении"
		"MESS_NOT_AVAILABLE" => "Нет в наличии",	// Сообщение об отсутствии товара
		"USE_VOTE_RATING" => "N",	// Включить рейтинг товара
		"USE_COMMENTS" => "N",	// Включить отзывы о товаре
		"BRAND_USE" => "N",	// Использовать компонент "Бренды"
		"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
		"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
		"SECTION_ID_VARIABLE" => "SECTION_ID",	// Название переменной, в которой передается код группы
		"CHECK_SECTION_ID_VARIABLE" => "N",	// Использовать код группы из переменной, если не задан раздел элемента
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SET_CANONICAL_URL" => "N",	// Устанавливать канонический URL
		"SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
		"BROWSER_TITLE" => "NAME",	// Установить заголовок окна браузера из свойства
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
		"SET_STATUS_404" => "Y",	// Устанавливать статус 404, если не найдены элемент или раздел
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"ADD_ELEMENT_CHAIN" => "N",	// Включать название элемента в цепочку навигации
		"USE_ELEMENT_COUNTER" => "N",	// Использовать счетчик просмотров
		"SHOW_DEACTIVATED" => "N",	// Показывать деактивированные товары
		"ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
		"PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
		"DISPLAY_COMPARE" => "N",	// Разрешить сравнение товаров
		"PRICE_CODE" => "",	// Тип цены
		"USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
		"SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
		"PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
		"PRICE_VAT_SHOW_VALUE" => "N",	// Отображать значение НДС
		"BASKET_URL" => "/personal/basket.php",	// URL, ведущий на страницу с корзиной покупателя
		"USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
		"PRODUCT_QUANTITY_VARIABLE" => "",	// Название переменной, в которой передается количество товара
		"ADD_PROPERTIES_TO_BASKET" => "Y",	// Добавлять в корзину свойства товаров и предложений
		"PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
		"PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
		"PRODUCT_PROPERTIES" => "",	// Характеристики товара
		"LINK_IBLOCK_TYPE" => "",	// Тип инфоблока, элементы которого связаны с текущим элементом
		"LINK_IBLOCK_ID" => "",	// ID инфоблока, элементы которого связаны с текущим элементом
		"LINK_PROPERTY_SID" => "",	// Свойство, в котором хранится связь
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",	// URL на страницу, где будет показан список связанных элементов
		"MESS_BTN_COMPARE" => "Сравнить",	// Текст кнопки "Сравнить"
		"ADD_PICT_PROP" => "-",	// Дополнительная картинка основного товара
		"LABEL_PROP" => "-",	// Свойство меток товара
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
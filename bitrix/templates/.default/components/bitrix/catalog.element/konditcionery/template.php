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
<div class="main-slider-wrapper no-controls">
    <ul class="js-main-slider about-page-top heaters-page-top">
        <?foreach($arResult['SLIDE'] as $arSlide){
        $slide = CFile::ResizeImageGet($arSlide, array('width'=>1850, 'height'=>845), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
            <li class="js-imgLiquidFill">
                <div class="about-page-top heaters-page-top">
                    <div class="main-slider__item js-imgLiquidFill">
                        <img class="main-slider__image" src="<?=$slide['src'];?>" alt=""/>
                        <div class="inside-title wrapper">
                             <?require($_SERVER['DOCUMENT_ROOT'].'/inc/module_path.php');?>
                            <h1><?=$arResult['NAME'];?></h1>
                        </div>
                        <div class="main-slider__overlay">
                            <div class="wrapper">
                                <div class="main-slider__slider-description"><?=$arResult['PREVIEW_TEXT'];?></div>
                            </div>
                            <div class="double-button">
                                <a href="#popup-form2" class="btn-1 popup-open">Узнать стоимость</a>
                                <a href="/transportnyj-holod/dilery/" class="btn-2">Найти дилера</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        <?}?>
    </ul>
</div>
<div class="inside-conent">
    <div class="model-car wrapper">
        <h2>Модель автомобиля</h2>
        <div class="model-car_list">
            <?foreach($arResult['MODELS'] as $arModels){
            $icon = CFile::ResizeImageGet($arModels['ICON'], array('width'=>150, 'height'=>100), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
                <div class="model-car_list-element">
                    <div class="model-car_img">
                        <span>
                            <img src="<?=$icon['src'];?>" alt=""/>
                        </span>
                    </div>
                    <span class="model-car_info"><?=$arModels['NAME'];?></span>
                </div>
            <?}?>
        </div>
    </div>
</div>
<div class="inside-conent heaters-page">
   	<?$APPLICATION->IncludeComponent("bitrix:news.list", "adventurage", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "service",	// Тип информационного блока (используется только для проверки)
		"IBLOCK_ID" => "29",	// Код информационного блока
		"NEWS_COUNT" => "4",	// Количество новостей на странице
		"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
		"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
		"SORT_BY2" => "ID",	// Поле для второй сортировки новостей
		"SORT_ORDER2" => "DESC",	// Направление для второй сортировки новостей
		"FILTER_NAME" => "",	// Фильтр
		"FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(	// Свойства
			0 => "ATT_COLOR",
			1 => "",
		),
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404, если не найдены элемент или раздел
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"PARENT_SECTION" => "204",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
	),
	false
);?>
    <div class="table-options">
        <div class="title wrapper">
            <h3>Характеристики</h3>
            <a href="<?=$arResult['CHARSET_FILE']['SRC'];?>" target="_blank" class="btn-down-white">Скачать</a>
        </div>

        <ul class="table-colum_options">
            <li class="table-head">
                <div class="wrapper">
                    <span class="td1"></span>
                    <span class="td2">Модель</span>
                    <span class="td3">Мощность</span>
                    <span class="td4">Напряжение</span>
                    <span class="td2">Воздушный поток</span>
                    <span class="td5">Габаритные размеры</span>
                </div>
            </li>
            <?$array_count = count($arResult['PROPERTIES']['CHARSET_NAME']['VALUE']);
            for($i = 0; $i < $array_count; $i++){?>
                <li>
                    <div class="wrapper">
                        <span class="td1"><?=$arResult['PROPERTIES']['CHARSET_NAME']['VALUE'][$i]?></span>
                        <span class="td2"><?=$arResult['PROPERTIES']['CHARSET_MODEL']['~VALUE'][$i]['TEXT']?></span>
                        <span class="td3"><?=$arResult['PROPERTIES']['CHARSET_POWER']['VALUE'][$i]?></span>
                        <span class="td4"><?=$arResult['PROPERTIES']['CHARSET_VOLT']['VALUE'][$i]?></span>
                        <span class="td2"><?=$arResult['PROPERTIES']['CHARSET_AIR']['VALUE'][$i]?></span>
                        <span class="td5"><?=$arResult['PROPERTIES']['CHARSET_WH']['VALUE'][$i]?></span>
                    </div>
                </li>
            <?}?>
        </ul>
    </div>
</div>
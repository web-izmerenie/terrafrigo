<?$GLOBALS['iblock_id'] = '17';
define('BANER', 'Y');
define('COLD-TRANSPORT', 'Y');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Купить рефрижераторные установки (реф установки) на автомобиль. Установка рефрижератора на авто");
$APPLICATION->SetPageProperty("keywords", "рефрижераторные установки, реф установка, установка рефрижератора, установка рефрижераторов на автомобили цена, рефрижераторные холодильные установки");
$APPLICATION->SetPageProperty("description", "Производство и продажа рефрижераторных установок. Купить реф установку в Москве, Ростове-на-Дону, Нижнем Новгороде, Росссии по ценам производителя. Установка холодильного рефрижератора на автомобиль.");
$APPLICATION->SetTitle("Рефрижераторы");
?>
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
		"PARENT_SECTION" => "200",	// ID раздела
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
<form class="filter_selection search" method="post" action="./filter.php">
    <div class="wrapper">
<!--
        <div class="title">Подбор рефрижератора</div>
        <div class="group group-search-1 clearfix">
            <div class="group-title ieb icon-f4">Внутренний объем фургона</div>
            <div class="line">
                <div class="radio-btn border">
                    <div><input type="radio" name="gr1" value="до 6м" id="gr1-1" /><label for="gr1-1"><span class="image"><img src="<?=$tplPath;?>img/icon-tr-1.png" alt="" /></span>до 6 м³</label></div>
                    <div><input type="radio" name="gr1" value="от 6м до 10м" id="gr1-2" /><label for="gr1-2"><span class="image"><img  src="<?=$tplPath;?>img/icon-tr-2.png" alt="" /></span>от 6 м³ до 10 м³</label></div>
                    <div><input type="radio" name="gr1" value="от 10м до 20м" id="gr1-3" /><label for="gr1-3"><span class="image"><img  src="<?=$tplPath;?>img/icon-tr-3.png" alt="" /></span>от 10 м³ до 20 м³</label></div>
                </div>
            </div>
            <div class="line">
                <div class="radio-btn border">
                    <div><input type="radio" name="gr1" value="от 20м до 26м" id="gr1-4" /><label for="gr1-4"><span class="image"><img  src="<?=$tplPath;?>img/icon-tr-4.png" alt="" /></span>от 20 м³ до 26 м³</label></div>
                    <div><input type="radio" name="gr1" value="от 26м до 32м" id="gr1-5" /><label for="gr1-5"><span class="image"><img  src="<?=$tplPath;?>img/icon-tr-5.png" alt="" /></span>от 26 м³ до 32 м³</label></div>
                    <div><input type="radio" name="gr1" value="от 32м до 40м" id="gr1-6" /><label for="gr1-6"><span class="image"><img  src="<?=$tplPath;?>img/icon-tr-5.png" alt="" /></span>от 32 м³ до 40 м³</label></div>
                </div>
            </div>
            <div class="line">
                     <div class="radio-btn border">
                    <div><input type="radio" name="gr1" value="от 40м до 50м" id="gr1-7" /><label for="gr1-7"><span class="image"><img  src="<?=$tplPath;?>img/icon-tr-6.png" alt="" /></span>от 40 м³ до 50 м³</label></div>
                </div>
            </div>
        </div>

        <div class="group group-search-2 clearfix">
            <div class="group-title ieb icon-f5">Материал и толщина утеплителя</div>
            <div class="line">
                <div class="radio-btn">
                    <div><input class="tabs" data-target="tab2" type="radio" name="gr2" value="Пенопласт" id="gr2-1" /><label for="gr2-1">Пенопласт</label></div>
                    <div><input class="tabs" type="radio" data-target="tab1" name="gr2" value="ППС" id="gr2-2" /><label for="gr2-2">Пенополистирол <br />экструдированный (ППС)</label></div>
                    <div><input class="tabs" type="radio" data-target="tab3" name="gr2" value="ППУ" id="gr2-3" /><label for="gr2-3">Пенополиуретан (ППУ)</label></div>
                </div>
            </div>
            <div class="line tabs-target" id="tab1">
                <div class="radio-btn">
                    <div><input type="radio" name="gr21" value="50мм" id="gr2-4" /><label for="gr2-4">50 мм</label></div>
                    <div><input type="radio" name="gr21" value="60мм" id="gr2-5" /><label for="gr2-5">60 мм</label></div>
                    <div><input type="radio" name="gr21" value="70мм" id="gr2-6" /><label for="gr2-6">70 мм</label></div>
                    <div><input type="radio" name="gr21" value="80мм" id="gr2-7" /><label for="gr2-7">80 мм</label></div>
                </div>
            </div>
            <div class="line tabs-target" id="tab2">
                <div class="radio-btn">
                    <div><input type="radio" name="gr22" value="50мм" id="gr2-8" /><label for="gr2-8">50 мм</label></div>
                    <div><input type="radio" name="gr22" value="60мм" id="gr2-9" /><label for="gr2-9">70 мм</label></div>
                    <div><input type="radio" name="gr22" value="70мм" id="gr2-10" /><label for="gr2-10">80 мм</label></div>
                </div>
            </div>
            <div class="line tabs-target" id="tab3">
                <div class="radio-btn">
                    <div><input type="radio" name="gr23" value="50мм" id="gr2-11" /><label for="gr2-11">50 мм</label></div>
                    <div><input type="radio" name="gr23" value="60мм" id="gr2-12" /><label for="gr2-12">60 мм</label></div>
                    <div><input type="radio" name="gr23" value="70мм" id="gr2-13" /><label for="gr2-13">70 мм</label></div>
                    <div><input type="radio" name="gr23" value="80мм" id="gr2-14" /><label for="gr2-14">80 мм</label></div>
                </div>
            </div>
        </div>

        <div class="group group-search-3 clearfix tabs-block">
            <div class="group-title ieb icon-f6">Режим работы</div>
            <div class="line">
                <div class="radio-btn border">
                    <div><input type="radio" value="до +1 в теплое время года" name="gr3" id="gr3-1" /><label for="gr3-1"><span class="image"><img  src="<?=$tplPath;?>img/icon-temp-1.png" alt="" /></span>Охлаждение до +1 С° <br />в теплое время года</label></div>
                    <div><input type="radio" value="от 0 до -20" name="gr3" id="gr3-2" /><label for="gr3-2"><span class="image"><img  src="<?=$tplPath;?>img/icon-temp-2.png" alt="" /></span>Холод <br />от 0 С° до –20 С°</label></div>
                    <div><input type="radio" value="от -20 до +12" name="gr3" id="gr3-3" /><label for="gr3-3"><span class="image"><img  src="<?=$tplPath;?>img/icon-temp-3.png" alt="" /></span>Холод-Тепло <br />от –20 С° до +12 С°</label></div>
                     <div><input type="radio" value="до +1 круглый год" name="gr3" id="gr3-4" /><label for="gr3-4"><span class="image"><img  src="<?=$tplPath;?>img/icon-prod-4.png" alt="" /></span>Охлажение до +1 °С <br />круглый год</label></div>
                </div>
            </div>
        </div>

        <div class="group group-search-4 clearfix tabs-block">
            <div class="group-title ieb icon-f7">Тип перевозимой продукции</div>
            <div class="line">
                <div class="radio-btn border">
                    <div><input type="radio" value="охлажденные продукты" name="gr4" id="gr4-1" /><label for="gr4-1"><span class="image"><img  src="<?=$tplPath;?>img/icon-prod-1.png" alt="" /></span><span class="text">Любые охлажденные продукты, <br />в том числе фрукты и овощи</span></label></div>
                    <div><input type="radio" value="замороженные продукты" name="gr4" id="gr4-2" /><label for="gr4-2"><span class="image"><img  src="<?=$tplPath;?>img/icon-prod-2.png" alt="" /></span><span class="text">Любые замороженные продукты</span></label></div>
                    <div><input type="radio" value="охлажденные продукты, замороженные продукты" name="gr4" id="gr4-3" /><label for="gr4-3"><span class="image"><img  src="<?=$tplPath;?>img/icon-prod-3.png" alt="" /></span><span class="text">Охлажденные продукты, замороженные продукты, <br />в том числе фрукты, кондитерские изделия, цветы, лекарства</span></label></div>
                </div>
            </div>
        </div>

        <div class="btn-filter">
            <input type="submit" value="Подобрать" class="btn-type-1" />
        </div>
-->
        <div class="btn-filter-2">
            <a href="./filter.php" class="btn-type-3">Посмотреть все</a>
            <a href="/transportnyj-holod/dilery/" class="btn-type-2">Найти дилера</a>
        </div>

    </div>
</form>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
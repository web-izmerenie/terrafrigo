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
<?if(!empty($arResult['SECTIONS'])){?>
    <form class="filter_selection" action="./filter.php" method="post">
        <div class="wrapper">
            <div class="title">Подбор автокондиционера</div>
            <div class="group group-1 clearfix">
                <div class="group-title ieb icon-f1">Модель автомобиля</div>
                <div class="colum colum-1">
                    <?foreach($arResult['SECTIONS'][0] as $arColumn1){
                    $photo = CFile::ResizeImageGet($arColumn1['PICTURE'], array('width'=>150, 'height'=>150), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
                        <div class="grop-s">
                            <img src="<?=$photo['src'];?>" alt="" />
                            <?$APPLICATION->IncludeComponent("bitrix:catalog.section", "filter_kondishion", Array(
                                "COMPONENT_TEMPLATE" => ".default",
                                    "IBLOCK_TYPE" => "service",	// Тип инфоблока
                                    "IBLOCK_ID" => "20",	// Инфоблок
                                    "SECTION_ID" => $arColumn1["ID"],	// ID раздела
                                    "SECTION_CODE" => "",	// Код раздела
                                    "SECTION_USER_FIELDS" => array(	// Свойства раздела
                                        0 => "",
                                        1 => "",
                                    ),
                                    "ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем элементы
                                    "ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки элементов
                                    "ELEMENT_SORT_FIELD2" => "id",	// Поле для второй сортировки элементов
                                    "ELEMENT_SORT_ORDER2" => "desc",	// Порядок второй сортировки элементов
                                    "FILTER_NAME" => "arrFilter",	// Имя массива со значениями фильтра для фильтрации элементов
                                    "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
                                    "SHOW_ALL_WO_SECTION" => "N",	// Показывать все элементы, если не указан раздел
                                    "PAGE_ELEMENT_COUNT" => "30",	// Количество элементов на странице
                                    "LINE_ELEMENT_COUNT" => "3",	// Количество элементов выводимых в одной строке таблицы
                                    "PROPERTY_CODE" => array(	// Свойства
                                        0 => "",
                                        1 => "",
                                    ),
                                    "OFFERS_LIMIT" => "5",	// Максимальное количество предложений для показа (0 - все)
                                    "TEMPLATE_THEME" => "blue",	// Цветовая тема
                                    "MESS_BTN_BUY" => "Купить",	// Текст кнопки "Купить"
                                    "MESS_BTN_ADD_TO_BASKET" => "В корзину",	// Текст кнопки "Добавить в корзину"
                                    "MESS_BTN_SUBSCRIBE" => "Подписаться",	// Текст кнопки "Уведомить о поступлении"
                                    "MESS_BTN_DETAIL" => "Подробнее",	// Текст кнопки "Подробнее"
                                    "MESS_NOT_AVAILABLE" => "Нет в наличии",	// Сообщение об отсутствии товара
                                    "SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
                                    "DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
                                    "SECTION_ID_VARIABLE" => "SECTION_ID",	// Название переменной, в которой передается код группы
                                    "AJAX_MODE" => "N",	// Включить режим AJAX
                                    "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                                    "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                                    "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                                    "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                                    "CACHE_TYPE" => "A",	// Тип кеширования
                                    "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                                    "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                                    "SET_TITLE" => "N",	// Устанавливать заголовок страницы
                                    "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
                                    "BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
                                    "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
                                    "META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
                                    "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
                                    "META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
                                    "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
                                    "SET_STATUS_404" => "N",	// Устанавливать статус 404, если не найдены элемент или раздел
                                    "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                                    "ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
                                    "PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
                                    "PRICE_CODE" => "",	// Тип цены
                                    "USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
                                    "SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
                                    "PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
                                    "BASKET_URL" => "/personal/basket.php",	// URL, ведущий на страницу с корзиной покупателя
                                    "USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
                                    "PRODUCT_QUANTITY_VARIABLE" => "",	// Название переменной, в которой передается количество товара
                                    "ADD_PROPERTIES_TO_BASKET" => "Y",	// Добавлять в корзину свойства товаров и предложений
                                    "PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
                                    "PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
                                    "PRODUCT_PROPERTIES" => "",	// Характеристики товара
                                    "DISPLAY_COMPARE" => "N",	// Разрешить сравнение товаров
                                    "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                                    "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                                    "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
                                    "PAGER_TITLE" => "Товары",	// Название категорий
                                    "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                                    "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                                    "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                                    "MESS_BTN_COMPARE" => "Сравнить",	// Текст кнопки "Сравнить"
                                    "ADD_PICT_PROP" => "-",	// Дополнительная картинка основного товара
                                    "LABEL_PROP" => "-",	// Свойство меток товара
                                ),
                                false
                            );?>
                        </div>
                    <?}?>
                </div>
                <div class="colum colum-2">
                    <?foreach($arResult['SECTIONS'][1] as $arColumn2){
                    $photo = CFile::ResizeImageGet($arColumn2['PICTURE'], array('width'=>150, 'height'=>150), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
                        <div class="grop-s">
                            <img src="<?=$photo['src'];?>" alt="" />
                            <?$APPLICATION->IncludeComponent("bitrix:catalog.section", "filter_kondishion", Array(
                                "COMPONENT_TEMPLATE" => ".default",
                                    "IBLOCK_TYPE" => "service",	// Тип инфоблока
                                    "IBLOCK_ID" => "20",	// Инфоблок
                                    "SECTION_ID" => $arColumn2["ID"],	// ID раздела
                                    "SECTION_CODE" => "",	// Код раздела
                                    "SECTION_USER_FIELDS" => array(	// Свойства раздела
                                        0 => "",
                                        1 => "",
                                    ),
                                    "ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем элементы
                                    "ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки элементов
                                    "ELEMENT_SORT_FIELD2" => "id",	// Поле для второй сортировки элементов
                                    "ELEMENT_SORT_ORDER2" => "desc",	// Порядок второй сортировки элементов
                                    "FILTER_NAME" => "arrFilter",	// Имя массива со значениями фильтра для фильтрации элементов
                                    "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
                                    "SHOW_ALL_WO_SECTION" => "N",	// Показывать все элементы, если не указан раздел
                                    "PAGE_ELEMENT_COUNT" => "30",	// Количество элементов на странице
                                    "LINE_ELEMENT_COUNT" => "3",	// Количество элементов выводимых в одной строке таблицы
                                    "PROPERTY_CODE" => array(	// Свойства
                                        0 => "",
                                        1 => "",
                                    ),
                                    "OFFERS_LIMIT" => "5",	// Максимальное количество предложений для показа (0 - все)
                                    "TEMPLATE_THEME" => "blue",	// Цветовая тема
                                    "MESS_BTN_BUY" => "Купить",	// Текст кнопки "Купить"
                                    "MESS_BTN_ADD_TO_BASKET" => "В корзину",	// Текст кнопки "Добавить в корзину"
                                    "MESS_BTN_SUBSCRIBE" => "Подписаться",	// Текст кнопки "Уведомить о поступлении"
                                    "MESS_BTN_DETAIL" => "Подробнее",	// Текст кнопки "Подробнее"
                                    "MESS_NOT_AVAILABLE" => "Нет в наличии",	// Сообщение об отсутствии товара
                                    "SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
                                    "DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
                                    "SECTION_ID_VARIABLE" => "SECTION_ID",	// Название переменной, в которой передается код группы
                                    "AJAX_MODE" => "N",	// Включить режим AJAX
                                    "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                                    "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                                    "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                                    "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                                    "CACHE_TYPE" => "A",	// Тип кеширования
                                    "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                                    "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                                    "SET_TITLE" => "N",	// Устанавливать заголовок страницы
                                    "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
                                    "BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
                                    "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
                                    "META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
                                    "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
                                    "META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
                                    "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
                                    "SET_STATUS_404" => "N",	// Устанавливать статус 404, если не найдены элемент или раздел
                                    "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                                    "ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
                                    "PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
                                    "PRICE_CODE" => "",	// Тип цены
                                    "USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
                                    "SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
                                    "PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
                                    "BASKET_URL" => "/personal/basket.php",	// URL, ведущий на страницу с корзиной покупателя
                                    "USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
                                    "PRODUCT_QUANTITY_VARIABLE" => "",	// Название переменной, в которой передается количество товара
                                    "ADD_PROPERTIES_TO_BASKET" => "Y",	// Добавлять в корзину свойства товаров и предложений
                                    "PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
                                    "PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
                                    "PRODUCT_PROPERTIES" => "",	// Характеристики товара
                                    "DISPLAY_COMPARE" => "N",	// Разрешить сравнение товаров
                                    "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                                    "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                                    "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
                                    "PAGER_TITLE" => "Товары",	// Название категорий
                                    "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                                    "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                                    "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                                    "MESS_BTN_COMPARE" => "Сравнить",	// Текст кнопки "Сравнить"
                                    "ADD_PICT_PROP" => "-",	// Дополнительная картинка основного товара
                                    "LABEL_PROP" => "-",	// Свойство меток товара
                                ),
                                false
                            );?>
                        </div>
                    <?}?>
                </div>
             </div>

            <div class="group group-2 clearfix">
                <div class="group-title ieb icon-f2">Направление воздушного потока</div>
                <div class="colum colum-1">
                    <div class="grop-s">
                        <div class="radio-btn">
                            <div><input type="radio" name="gr2" value="В кабину водителя" id="gr2-1" /><label for="gr2-1">В кабину водителя</label></div>
                            <div><input type="radio" name="gr2" value="В салон (монтаж в переднюю полку)" id="gr2-2" /><label for="gr2-2">В салон (монтаж в переднюю полку)</label></div>
                        </div>
                    </div>
                </div>
                <div class="colum colum-2">
                    <div class="grop-s">
                        <div class="radio-btn">
                            <div><input type="radio" name="gr2" value="В салон (монтаж в заднюю полку)" id="gr2-3" /><label for="gr2-3">В салон (монтаж в заднюю полку)</label></div>
                            <div><input type="radio" name="gr2" value="В кабину водителя и в салон" id="gr2-4" /><label for="gr2-4">В кабину водителя и в салон</label></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="group group-3 clearfix">
                <div class="group-title ieb icon-f3">Количество пассажирских мест</div>
                <div class="radio-btn">
                    <div><input type="radio" value="до 6" name="gr3" id="gr3-1" /><label for="gr3-1">до 6</label></div>
                    <div><input type="radio" value="до 11" name="gr3" id="gr3-2" /><label for="gr3-2">до 11</label></div>
                    <div><input type="radio" value="до 14" name="gr3" id="gr3-3" /><label for="gr3-3">до 14</label></div>
                    <div><input type="radio" value="до 20" name="gr3" id="gr3-4" /><label for="gr3-4">до 20</label></div>
                    <div><input type="radio" value="более 20" name="gr3" id="gr3-5" /><label for="gr3-5">более 20</label></div>
                </div>
            </div>

            <div class="btn-filter">
                <input type="submit" value="Подобрать" class="btn-type-1" />
            </div>
            <div class="btn-filter-2">
                <a href="./filter.php" class="btn-type-3">Посмотреть все</a>
                <a href="/transportnyj-holod/dilery/" class="btn-type-2">Найти дилера</a>
            </div>
        </div>
    </form>
<?}?>
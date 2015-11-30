    <?if($APPLICATION->GetCurPage(false) !== '/' || !defined('MODEL')){?></div><?}?>
    <?if(!defined('NOT_FOUND')){?>
        <div class="additional-text">
            <div class="wrapper">
                <button class="additional-text__button btn-link" type="button">Доп. информация</button>
                <div class="additional-text__container">
                    <?if(!defined('NO_SEO')){?>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                            )
                        );?>
                    <?}else{
                        print $GLOBALS['SEO_TEXT'];
                    }?>
                </div>
            </div>
        </div>
    <?}?>

    <footer class="footer">
        <?if(!defined('NOT_FOUND')){?>
            <div class="footer-top">
                <div class="wrapper">
                    <button class="go-to-top btn-link js-to-top" type="button">
                        <span class="go-to-top__inner">Наверх</span>
                    </button>
                </div>
            </div>
        <?}?>
        <?$APPLICATION->IncludeComponent(
            "bitrix:menu",
            "footer_menu",
            array(
                "ROOT_MENU_TYPE" => "main",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "MENU_CACHE_GET_VARS" => array(
                ),
                "MAX_LEVEL" => "2",
                "CHILD_MENU_TYPE" => "inner",
                "USE_EXT" => "N",
                "DELAY" => "N",
                "ALLOW_MULTI_SELECT" => "N"
            ),
            false
        );?>
        <div class="footer-bottom">
            <div class="footer-bottom__wrapper wrapper clearfix">
                <div class="footer-bottom__copy">
                    © 2006-2015 ООО «Завод ТерраФриго». Все права защищены.
                    Вся представленная
                    информация, касающаяся технических
                    характеристик, наличия на складе,
                    стоимости товаров, носит информационный
                    характер, и ни при каких условиях не
                    является публичной офертой, определяемой
                    положениями Статьи 437(2) Гражданского
                    кодекса РФ.
                </div>
                <div class="footer-bottom__made-in">
                    <span class="made-in-span">Сделано в</span>
                    <a class="made-in" href="http://web-izmerenie.ru/"></a>
                </div>
            </div>
        </div>
    </footer>
    <?$APPLICATION->IncludeComponent("bitrix:news.detail", "call_me", Array(
        "COMPONENT_TEMPLATE" => ".default",
            "IBLOCK_TYPE" => "service",	// Тип информационного блока (используется только для проверки)
            "IBLOCK_ID" => "25",	// Код информационного блока
            "ELEMENT_ID" => "306",	// ID новости
            "ELEMENT_CODE" => "",	// Код новости
            "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
            "FIELD_CODE" => array(	// Поля
                0 => "",
                1 => "",
            ),
            "PROPERTY_CODE" => array(	// Свойства
                0 => "ATT_OKRUG",
                1 => "ATT_OTDEL",
                2 => "",
            ),
            "IBLOCK_URL" => "",	// URL страницы просмотра списка элементов (по умолчанию - из настроек инфоблока)
            "AJAX_MODE" => "N",	// Включить режим AJAX
            "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
            "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
            "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
            "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
            "CACHE_TYPE" => "A",	// Тип кеширования
            "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
            "CACHE_GROUPS" => "Y",	// Учитывать права доступа
            "SET_TITLE" => "N",	// Устанавливать заголовок страницы
            "SET_CANONICAL_URL" => "N",	// Устанавливать канонический URL
            "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
            "BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
            "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
            "META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
            "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
            "META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
            "SET_STATUS_404" => "N",	// Устанавливать статус 404, если не найдены элемент или раздел
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
            "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
            "ADD_ELEMENT_CHAIN" => "N",	// Включать название элемента в цепочку навигации
            "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
            "USE_PERMISSIONS" => "N",	// Использовать дополнительное ограничение доступа
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "USE_SHARE" => "N",
            "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
            "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
            "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
            "PAGER_TITLE" => "Страница",	// Название категорий
            "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
        ),
        false
    );?>
    <?$APPLICATION->IncludeComponent("bitrix:news.detail", "write_me", Array(
        "COMPONENT_TEMPLATE" => ".default",
            "IBLOCK_TYPE" => "service",	// Тип информационного блока (используется только для проверки)
            "IBLOCK_ID" => "25",	// Код информационного блока
            "ELEMENT_ID" => "306",	// ID новости
            "ELEMENT_CODE" => "",	// Код новости
            "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
            "FIELD_CODE" => array(	// Поля
                0 => "",
                1 => "",
            ),
            "PROPERTY_CODE" => array(	// Свойства
                0 => "ATT_OKRUG",
                1 => "ATT_OTDEL",
                2 => "",
            ),
            "IBLOCK_URL" => "",	// URL страницы просмотра списка элементов (по умолчанию - из настроек инфоблока)
            "AJAX_MODE" => "N",	// Включить режим AJAX
            "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
            "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
            "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
            "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
            "CACHE_TYPE" => "A",	// Тип кеширования
            "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
            "CACHE_GROUPS" => "Y",	// Учитывать права доступа
            "SET_TITLE" => "N",	// Устанавливать заголовок страницы
            "SET_CANONICAL_URL" => "N",	// Устанавливать канонический URL
            "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
            "BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
            "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
            "META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
            "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
            "META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
            "SET_STATUS_404" => "N",	// Устанавливать статус 404, если не найдены элемент или раздел
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
            "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
            "ADD_ELEMENT_CHAIN" => "N",	// Включать название элемента в цепочку навигации
            "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
            "USE_PERMISSIONS" => "N",	// Использовать дополнительное ограничение доступа
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "USE_SHARE" => "N",
            "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
            "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
            "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
            "PAGER_TITLE" => "Страница",	// Название категорий
            "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
        ),
        false
    );?>

    <div class="popup-inner" id="popup-successful">
        <div class="popup-form">
            <a href="#" class="close"></a>
            <div class="text-successful">Спасибо за заявку. <br />Наш менеджер свяжется с вами в ближайшее время</div>
        </div>
    </div>

    <script src="<?=$tplPath;?>js/plugins.min.js"></script>
    <script src="<?=$tplPath;?>js/jquery-ui.js"></script>
    <script src="<?=$tplPath;?>js/main.js"></script>
    <script src="<?=$tplPath;?>js/jquery.selectBoxIt.js"></script>
    <script src="<?=$tplPath;?>js/jquery.fancybox.pack.js"></script>

    <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
	<script type="text/javascript" src="<?=$tplPath;?>js/gmaps.js"></script>
    <script src="<?=$tplPath;?>js/backend.js"></script>


<!-- Yandex.Metrika counter -->
<script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript"></script>
<script type="text/javascript">
try { var yaCounter819194 = new Ya.Metrika({id:819194,
          webvisor:true,
          clickmap:true,
          trackLinks:true,
          accurateTrackBounce:true});
} catch(e) { }
</script>
<!-- /Yandex.Metrika counter -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter22161481 = new Ya.Metrika({id:22161481,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<!-- /Yandex.Metrika counter -->
<!-- Google counter -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new
Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

   ga('create', 'UA-52229140-1', 'terrafrigo.ru');
   ga('send', 'pageview');
</script>
<!-- /Google counter -->


</body>
</html>

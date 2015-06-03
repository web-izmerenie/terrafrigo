    <?if($APPLICATION->GetCurPage(false) !== '/' || !defined('MODEL')){?></div><?}?>
    <div class="additional-text">
        <div class="wrapper">
            <button class="additional-text__button btn-link" type="button">Доп. информация</button>
            <div class="additional-text__container">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                    )
                );?>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-top">
            <div class="wrapper">
                <button class="go-to-top btn-link js-to-top" type="button">
                    <span class="go-to-top__inner">Наверх</span>
                </button>
            </div>
        </div>
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
                <div class="footer-bottom__copy">© 2006-2015 ООО «Завод ТерраФриго». Все права защищены.</div>
                <div class="footer-bottom__made-in">
                    <span class="made-in-span">Сделано в</span>
                    <a class="made-in" href="#"></a>
                </div>
            </div>
        </div>
    </footer>

    <div class="popup-inner" id="popup-call">
        <div class="popup-form">
            <a href="#" class="close"></a>
            <div class="title">Заказать звонок</div>
            <div class="form">
                <form>
                    <div class="line"><input type="text" value="Телефон *" class="placeholder-1"/></div>
                    <div class="line"><input type="text" value="Фио*" class="placeholder-2"/></div>
                    <div class="line line-t2">
                        <select class="style-select">
                            <option value="default">Округ *</option>
                            <option value="1">Округ 1</option>
                            <option value="2">Округ 2</option>
                            <option value="3">Округ 3</option>
                        </select>
                        <input type="text" value="Время звонка" class="placeholder-8"/>
                    </div>
                    <div class="line-send"><input type="submit" value="Отправить" class="btn-type-1" /></div>
                </form>
            </div>
        </div>
    </div>

    <div class="popup-inner" id="popup-form2">
        <div class="popup-form">
            <a href="#" class="close"></a>
            <div class="title">Написать нам</div>
            <div class="form">
                <form>
                    <div class="line"><input type="text" value="Фио*" class="placeholder-2"/></div>
                    <div class="line"><input type="text" value="Компания*" class="placeholder-9"/></div>
                    <div class="line line-t2">
                        <input type="text" value="Телефон *" class="placeholder-1"/>
                        <input type="text" value="E-mail *" class="placeholder-3"/>
                    </div>
                    <div class="line line-t2">
                        <select class="style-select">
                            <option value="default">Округ *</option>
                            <option value="1">Округ 1</option>
                            <option value="2">Округ 2</option>
                            <option value="3">Округ 3</option>
                        </select>
                        <select class="style-select">
                            <option value="default">Отдел *</option>
                            <option value="1">Отдел 1</option>
                            <option value="2">Отдел 2</option>
                            <option value="3">Отдел 3</option>
                        </select>
                    </div>
                    <div class="line line-textarea">
                        <textarea class="placeholder-10">Сообщение *</textarea>
                    </div>
                    <div class="line-send"><input type="submit" value="Отправить" class="btn-type-1" /></div>
                </form>
            </div>
        </div>
    </div>

    <div class="popup-inner" id="popup-form3">
        <div class="popup-form">
            <a href="#" class="close"></a>
            <div class="title">Узнать стоимость</div>
            <div class="form">
                <form>
                    <div class="line"><input type="text" value="Фио*" class="placeholder-2"/></div>
                    <div class="line"><input type="text" value="Компания*" class="placeholder-9"/></div>
                    <div class="line line-t2">
                        <input type="text" value="Телефон *" class="placeholder-1"/>
                        <input type="text" value="E-mail *" class="placeholder-3"/>
                    </div>
                    <div class="line line-t2">
                        <select class="style-select">
                            <option value="default">Округ *</option>
                            <option value="1">Округ 1</option>
                            <option value="2">Округ 2</option>
                            <option value="3">Округ 3</option>
                        </select>
                        <select class="style-select">
                            <option value="default">Отдел *</option>
                            <option value="1">Отдел 1</option>
                            <option value="2">Отдел 2</option>
                            <option value="3">Отдел 3</option>
                        </select>
                    </div>
                    <div class="line line-textarea">
                        <textarea class="placeholder-10">Сообщение *</textarea>
                    </div>
                    <div class="line-send"><input type="submit" value="Отправить" class="btn-type-1" /></div>
                </form>
            </div>
        </div>
    </div>


    <script src="<?=$tplPath;?>js/plugins.min.js"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="<?=$tplPath;?>js/main.js"></script>
    <script src="<?=$tplPath;?>js/jquery.selectBoxIt.js"></script>
    <script src="<?=$tplPath;?>js/video.js"></script>
</body>
</html>

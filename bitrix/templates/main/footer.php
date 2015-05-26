    <?if($APPLICATION->GetCurPage(false) !== '/'){?></div><?}?>
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


    <script src="<?=$tplPath;?>js/plugins.min.js"></script>
    <script src="<?=$tplPath;?>js/main.js"></script>
</body>
</html>
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
    				<div class="line"><input type="text" value="Телефон *" class="placeholder-1 valid" data-default="Телефон *"/></div>
    				<div class="line"><input type="text" value="Фио*" class="placeholder-2 valid" data-default="Фио*"/></div>
    				<div class="line line-t2">
    					<select class="style-select valid" data-default="Округ *">
    						<option value="Округ *">Округ *</option>
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

	 <div class="popup-inner" id="popup-call">
    	<div class="popup-form">
    		<a href="#" class="close"></a>
    		<div class="title">Заказать звонок</div>
    		<div class="form">
    			<form>
    				<div class="line"><input type="text" value="Телефон *" class="placeholder-1 valid" data-default="Телефон *"/></div>
    				<div class="line"><input type="text" value="Фио*" class="placeholder-2 valid" data-default="Фио*"/></div>
    				<div class="line line-t2">
    					<select class="style-select valid" data-default="Округ *">
    						<option value="Округ *">Округ *</option>
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
    				<div class="line"><input type="text" value="Фио*" class="placeholder-2 valid" data-default="Фио*"/></div>
    				<div class="line"><input type="text" value="Компания*" class="placeholder-9 valid" data-default="Компания*"/></div>
    				<div class="line line-t2">
    					<span class="rel-container"><input type="text" value="Телефон *" class="placeholder-1 valid" data-default="Телефон *"/></span>
    					<span class="rel-container"><input type="text" value="E-mail *" class="placeholder-3 valid" data-default="E-mail *"/></span>
					</div>
					<div class="line line-t2">
						<span class="rel-container">
	    					<select class="style-select valid" data-default="Округ *">
	    						<option value="Округ *">Округ *</option>
	    						<option value="1">Округ 1</option>
	    						<option value="2">Округ 2</option>
	    						<option value="3">Округ 3</option>
	    					</select>
    					</span>
    					<span class="rel-container">
	    					<select class="style-select valid" data-default="Отдел *">
	    						<option value="Отдел *">Отдел *</option>
	    						<option value="1">Отдел 1</option>
	    						<option value="2">Отдел 2</option>
	    						<option value="3">Отдел 3</option>
	    					</select>
    					</span>
					</div>
					<div class="line line-textarea">
						<textarea class="placeholder-10 valid" data-default="Сообщение *">Сообщение *</textarea>
					</div>
					<div class="line-send"><input type="submit" value="Отправить" class="btn-type-1" /></div>
    			</form>
    		</div>
    	</div>
    </div>

    <script src="<?=$tplPath;?>js/plugins.min.js"></script>
    <script src="<?=$tplPath;?>js/jquery-ui.js"></script>
    <script src="<?=$tplPath;?>js/main.js"></script>
    <script src="<?=$tplPath;?>js/jquery.selectBoxIt.js"></script>

    <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
	<script type="text/javascript" src="<?=$tplPath;?>js/gmaps.js"></script>
    <script src="<?=$tplPath;?>js/backend.js"></script>
</body>
</html>

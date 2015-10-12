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
$this->setFrameMode(true);
require($_SERVER["DOCUMENT_ROOT"]."/ajax/captcha.php");
?>
<div class="popup-inner" id="popup-form2">
    <div class="popup-form">
        <a href="#" class="close"></a>
        <div class="title">Написать нам</div>
        <div class="form">
            <form action="/ajax/write_me.php" method="post">
                <div class="line"><input type="text" name="name" value="Фио*" class="placeholder-2 valid" data-default="Фио*"/></div>
                <div class="line"><input type="text" name="company" value="Компания*" class="placeholder-9 valid" data-default="Компания*"/></div>
                <div class="line line-t2">
                    <span class="rel-container"><input type="text" name="tel" value="Телефон *" class="placeholder-1 valid" data-default="Телефон *"/></span>
                    <span class="rel-container"><input type="text" name="email" value="E-mail *" class="placeholder-3 valid" data-default="E-mail *"/></span>
                </div>
                <div class="line line-t2">
                    <span class="rel-container">
                        <select class="style-select valid" name="okrug" data-default="Округ *">
                            <option value="Округ *">Округ *</option>
                            <?foreach($arResult['PROPERTIES']['ATT_OKRUG']['VALUE'] as $arOkrug){?>
                                <option value="<?=$arOkrug;?>"><?=$arOkrug;?></option>
                            <?}?>
                        </select>
                    </span>
                    <span class="rel-container">
                        <select class="style-select valid" name="otdel" data-default="Отдел *">
                            <option value="Отдел *">Отдел *</option>
                            <?foreach($arResult['PROPERTIES']['ATT_OTDEL']['VALUE'] as $arOtdel){?>
                                <option value="<?=$arOtdel;?>"><?=$arOtdel;?></option>
                            <?}?>
                        </select>
                    </span>
                </div>
                <div class="line line-textarea">
                    <textarea name="message" class="placeholder-10 valid" data-default="Сообщение *">Сообщение *</textarea>
                </div>
                <div class="captcha-form">
                    <input name="captcha_code_write" id="captcha_sid" value="<?=htmlspecialchars($cpt->GetCodeCrypt());?>" type="hidden">
                    <input id="captcha_word" class="inputBox s-2"
                    placeholder="Символы с картинки" name="captcha_word_write" type="text">
                    <img class="captcha_img" src="/bitrix/tools/captcha.php?captcha_code=<?=htmlspecialchars($cpt->GetCodeCrypt());?>">
                </div>
                <div id="error_capthca" class="questionnaire_notific wrapper alert-form">Введеные символы не свопадают с картинкой!</div>
                <div class="line-send"><input type="submit" value="Отправить" class="btn-type-1" /></div>
            </form>
        </div>
        <div id="sucsess2" class="questionnaire_notific wrapper">Спасибо за заявку. Наш менеджер свяжется с вами в ближайшее время</div>
    </div>
</div>

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
<div class="popup-inner" id="popup-call">
    <div class="popup-form">
        <a href="#" class="close"></a>
        <div class="title">Заказать звонок</div>
        <div class="form">
            <form method="post" action="/ajax/call_me.php">
                <div class="line"><input type="text" name="tel" value="Телефон *" class="placeholder-1 valid" data-default="Телефон *"/></div>
                <div class="line"><input type="text" name="name" value="Фио*" class="placeholder-2 valid" data-default="Фио*"/></div>
                <div class="line line-t2">
                    <select name="okrug" class="style-select valid" data-default="Округ *">
                        <option value="Округ *">Округ *</option>
                        <?foreach($arResult['PROPERTIES']['ATT_OKRUG']['VALUE'] as $arOkrug){?>
                            <option value="<?=$arOkrug;?>"><?=$arOkrug;?></option>
                        <?}?>
                    </select>
                    <input type="text" name="time" value="Время звонка" maxlength="5" class="placeholder-8"/>
                </div>
                <div class="captcha-form">
                    <input name="captcha_code_call" id="captcha_sid" value="<?=htmlspecialchars($cpt->GetCodeCrypt());?>" type="hidden">
                    <input id="captcha_word" class="inputBox s-2"
                    placeholder="Символы с картинки" name="captcha_word_call" type="text">
                    <img class="captcha_img" src="/bitrix/tools/captcha.php?captcha_code=<?=htmlspecialchars($cpt->GetCodeCrypt());?>">
                </div>
                <div id="error_capthca" class="questionnaire_notific wrapper alert-form">Введеные символы не свопадают с картинкой!</div>
                <div class="line-send"><input type="submit" value="Отправить" class="btn-type-1" /></div>
            </form>
        </div>
        <div id="sucsess" class="questionnaire_notific wrapper">Спасибо за заявку. Наш менеджер свяжется с вами в ближайшее время</div>
    </div>
</div>

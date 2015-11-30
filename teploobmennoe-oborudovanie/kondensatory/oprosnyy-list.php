<?define('QUESTIONNAIRE', 'Y');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
require($_SERVER["DOCUMENT_ROOT"]."/ajax/captcha.php");
$APPLICATION->SetTitle("Опросный лист");
$APPLICATION->AddChainItem($APPLICATION->GetTitle());
?>
<div class="inside-title-2 wrapper">на подбор и проектирование воздушного конденсатора</div>
<div class="questionnaire_notific wrapper">ВНИМАНИЕ: Просим Вас заполнить данную форму максимально корректно для того, <br />чтобы мы смогли оперативно произвести все необходимые для Вас расчеты.</div>
<div class="questionnaire_notific wrapper download">Или можете скачать <a href="<?=$APPLICATION->GetCurDir();?>oprosnyy-list.xls">опросной лист</a>, заполнить его и выслать на <a href="mailto:babalykhiyn.l@terrafrigo.ru">babalykhiyn.l@terrafrigo.ru</a></div>

<div class="inside-form questionnaire-form">
    <form action="/ajax/questionnaire_form4.php" method="post">
        <div class="line">
            <input name="name_organization" type="text" class="inputBox placeholder-7 valid" value="Название организации *" data-default="Название организации *"/>
        </div>
        <div class="line">
            <input name="contact_name" type="text" class="inputBox placeholder-6 valid" value="Контактное лицо *" data-default="Контактное лицо *"/>
        </div>
        <div class="line">
            <input name="city" type="text" class="inputBox placeholder-14 valid" value="Город *" data-default="Город *"/>
        </div>
        <div class="line line-2box">
            <span class="rel-container"><input name="tel" type="text" class="inputBox placeholder-1 valid" value="Телефон *" data-default="Телефон *"/></span>
            <span class="rel-container"><input name="mail" type="text" class="inputBox placeholder-3 valid" value="E-mail *" data-default="E-mail *"/></span>
        </div>
        <div class="title">Расчетные параметры агрегата</div>
        <div class="line line-label">
            <label>Мощность <span>воздушного конденсатора</span></label>
            <span class="inputBox">
                <input name="power" type="text" />
                кВТ
            </span>
        </div>
         <div class="line line-label">
            <label class="w2">Температура окружающей среды</label>
            <span class="inputBox">
                <input name="temp_start" type="text" />
                °С
            </span>
        </div>
        <div class="line line-label">
            <label class="w2">Температура конденсации хладагента</label>
            <span class="inputBox">
                <input name="temp_end" type="text" />
                °С
            </span>
        </div>
        <div class="line line-label">
            <label>Хладагент</label>
            <input name="name_agregat" type="text" class="inputBox placeholder-4" value="Наименование" />
        </div>
        <div class="title">Исполнение агрегата</div>
        <div class="line">
            <div class="radio-btn">
                <div><input type="radio" name="perfomance" id="gr1-1" value="Вертикальное положение" /><label for="gr1-1">Вертикальное положение</label></div>
                <div><input type="radio" name="perfomance" id="gr1-2" value="Горизонтальное положение" /><label for="gr1-2">Горизонтальное положение</label></div>
                 <div><input type="radio" name="perfomance" id="gr1-3" value="Поставка без вентиляторов" /><label for="gr1-3">Поставка без вентиляторов</label></div>

            </div>
        </div>
        <div class="title">Дополнительные требования</div>
        <div class="line">
            <textarea name="other" class="inputBox placeholder-5">Здесь вы можете указать информацию об ограничении габаритов, уровня шума и пр.</textarea>
        </div>
        <div class="title">CAPTCHA</div>
        <div class="line">
            <input name="captcha_code" id="captcha_sid" value="<?=htmlspecialchars($cpt->GetCodeCrypt());?>" type="hidden">
            <input id="captcha_word" class="inputBox s-2"
            placeholder="Символы с картинки" name="captcha_word" type="text">
            <img class="captcha_img" src="/bitrix/tools/captcha.php?captcha_code=<?=htmlspecialchars($cpt->GetCodeCrypt());?>">
        </div>
        <div class="line-send">
            <input type="submit" value="Отправить" class="btn-type-1"
            onclick="yaCounter22161481.reachGoal('OPROS-SUBMIT-454'); return true;"/>
        </div>
    </form>
</div>
<div id="error" class="questionnaire_notific wrapper alert-form">Заполните обязательные поля!</div>
<div id="sucsess" class="questionnaire_notific wrapper alert-form">Спасибо за заявку. Наш менеджер свяжется с вами в ближайшее время</div>
<div id="error_capthca" class="questionnaire_notific wrapper alert-form">Введеные символы не свопадают с картинкой!</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

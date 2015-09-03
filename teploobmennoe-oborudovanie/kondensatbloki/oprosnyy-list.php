<?define('QUESTIONNAIRE', 'Y');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Опросный лист");
$APPLICATION->AddChainItem($APPLICATION->GetTitle());
?>
<div class="inside-title-2 wrapper">для подбора и проектирования <br />компрессорно-конденсаторного блока</div>
<div class="questionnaire_notific wrapper">ВНИМАНИЕ: Просим Вас заполнить данную форму максимально корректно для того, <br />чтобы мы смогли оперативно произвести все необходимые для Вас расчеты.</div>
<div class="questionnaire_notific wrapper download">Или можете скачать<a href="<?=$APPLICATION->GetCurDir();?>oprosnyy-list.xls">опросной лист</a>, заполнить его и выслать на <a href="mailto:babalykhiyn.l@terrafrigo.ru">babalykhiyn.l@terrafrigo.ru</a></div>

<div class="inside-form questionnaire-form">
    <form action="/ajax/questionnaire_form1.php" method="post">
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
        <div class="title">Характеристики установки</div>
        <div class="line line-label">
            <label>Требуемая мощность <span>при заданных ниже условиях</span></label>
            <span class="inputBox">
                <input name="power" type="text" />
                кВТ
            </span>
        </div>
        <div class="line line-label">
            <label>Хладогент <span>наименование</span></label>
            <input name="cloudhed" type="text" class="inputBox placeholder-4" value="Наименование" />
        </div>
        <div class="title">Параметры работы блока в режиме охлаждения</div>
        <div class="line line-label">
            <label class="w2">Температура наружного воздуха <span>+35 °С (стандарт)</span></label>
            <span class="inputBox">
                <input name="temp_air" type="text" />
                °С
            </span>
        </div>
        <div class="line line-label">
            <label class="w2">Температура конденсации хладогента <span>+45 °С (стандарт)</span></label>
            <span class="inputBox">
                <input name="temp_cloudhead" type="text" />
                °С
            </span>
        </div>
        <div class="title">Дополнительные требования</div>
        <div class="line">
            <textarea name="other" class="inputBox placeholder-5">Здесь вы можете указать информацию об ограничении габаритов, уровня шума и пр.</textarea>
        </div>
        <div class="line-send">
            <input type="submit" value="Отправить" class="btn-type-1" />
        </div>
    </form>
</div>
<div id="error" class="questionnaire_notific wrapper">Заполните обязательные поля!</div>
<div id="sucsess" class="questionnaire_notific wrapper">Спасибо за заявку. Наш менеджер свяжется с вами в ближайшее время</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

<?define('QUESTIONNAIRE', 'Y');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
require($_SERVER["DOCUMENT_ROOT"]."/ajax/captcha.php");
$APPLICATION->SetTitle("Опросный лист");
$APPLICATION->AddChainItem($APPLICATION->GetTitle());
?>
<div class="inside-title-2 wrapper">для проектирования и изготовления <br />трубчато-ламельного теплообменника</div>
    <div class="questionnaire_notific wrapper">ВНИМАНИЕ: Просим Вас заполнить данную форму максимально корректно для того, <br />чтобы мы смогли оперативно произвести все необходимые для Вас расчеты.</div>
<div class="questionnaire_notific wrapper download">Или можете скачать <a href="<?=$APPLICATION->GetCurDir();?>oprosnyy-list.xls">опросной лист</a>, заполнить его и выслать на <a href="mailto:babalykhiyn.l@terrafrigo.ru">babalykhiyn.l@terrafrigo.ru</a></div>

    <div class="inside-form questionnaire-form">
        <form method="post" action="/ajax/questionnaire_form2.php">
            <div class="line">
                <input name="nameOrg" type="text" class="inputBox placeholder-7 valid" value="Название организации *" data-default="Название организации *"/>
            </div>
            <div class="line">
                <input name="fio" type="text" class="inputBox placeholder-6 valid" value="Контактное лицо *" data-default="Контактное лицо *"/>
            </div>
            <div class="line">
                <input name="city" type="text" class="inputBox placeholder-14 valid" value="Город *" data-default="Город *"/>
            </div>
            <div class="line line-2box">
                <span class="rel-container"><input name="tel" type="text" class="inputBox placeholder-1 valid" value="Телефон *" data-default="Телефон *"/></span>
                <span class="rel-container"><input name="email" type="text" class="inputBox placeholder-3 valid" value="E-mail *" data-default="E-mail *"/></span>
            </div>
            <div class="title">Тип теплообменника</div>
            <div class="line">
                <div class="radio-btn">
                    <div><input type="radio" name="freon" id="gr1-1" value="Фреоновый теплообменник" /><label for="gr1-1">Фреоновый теплообменник</label></div>
                    <div><input type="radio" name="water" id="gr1-2" value="Водяной теплообменник" /><label for="gr1-2">Водяной теплообменник</label></div>
                </div>
                <div><input name="other_colhead" type="text" class="inputBox s-2 placeholder-11 click_unckeck" value="ДРУГОЙ" /></div>
            </div>
            <div class="line line-label">
                <label class="w3 middle">КОЛИЧЕСТВО ОДИНАКОВЫХ ТЕПЛООБМЕННИКОВ</label>
                <span class="inputBox n2">
                    <input name="count_coldhead" type="text">
                    шт.
                </span>
            </div>
            <div class="title">Цель использования теплообменника</div>
            <div class="line">
                <div class="radio-btn colum">
                    <div><input type="radio" name="condensator" id="gr2-1" value="Конденсатор" /><label for="gr2-1">Конденсатор</label></div>
                    <div><input type="radio" name="air" id="gr2-2" value="Охладитель воздуха" /><label for="gr2-2">Охладитель воздуха</label></div>
                    <div><input type="radio" name="isparitel" id="gr2-3" value="Испаритель" /><label for="gr2-3">Испаритель</label></div>
                    <div><input type="radio" name="heat" id="gr2-4" value="Нагреватель воздуха" /><label for="gr2-4">Нагреватель воздуха</label></div>
                </div>
            </div>
            <div class="title">Габаритные и присоединительные размеры</div>
            <div class="line-image">
                <img src="<?=$tplPath;?>img/schema.png" alt="" />
            </div>
            <div class="line line-label line-colum">
                <div>
                    <label class="middle">L1</label>
                    <span class="inputBox n2">
                        <input name="l1-1" type="text">
                        мм
                    </span>
                </div>
                <div>
                    <label class="middle">L1</label>
                    <span class="inputBox n2">
                        <input name="l1-2" type="text">
                        мм
                    </span>
                </div>
                <div>
                    <label class="middle">L2</label>
                    <span class="inputBox n2">
                        <input name="l2-1" type="text">
                        мм
                    </span>
                </div>
                <div>
                    <label class="middle">L2</label>
                    <span class="inputBox n2">
                        <input name="l2-2" type="text">
                        мм
                    </span>
                </div>
                <div>
                    <label class="middle">L3</label>
                    <span class="inputBox n2">
                        <input name="l3-1" type="text">
                        мм
                    </span>
                </div>
                <div>
                    <label class="middle">L3</label>
                    <span class="inputBox n2">
                        <input name="l3-2" type="text">
                        мм
                    </span>
                </div>
                <div>
                    <label class="middle">Вход D1</label>
                    <span class="inputBox n2">
                        <input name="D1-1" type="text">
                        мм
                    </span>
                </div>
                <div>
                    <label class="middle">Вход D2</label>
                    <span class="inputBox n2">
                        <input name="D2-2" type="text">
                        мм
                    </span>
                </div>
            </div>
            <div class="questionnaire_notific">Примечание: Все размеры являются желательными при заполнении опросного листа, <br />но при изготовлении могут быть изменены по согласованию с заказчиком.</div>



            <div class="title">Воздух</div>
            <div class="line line-label">
                <label class="middle wAu">Расход</label>
                <span class="inputBox noTr">
                    <input name="rasxod" type="text" />
                    м³/ч
                </span>
            </div>
            <div class="line line-label">
                <label class="middle wAu">Температура</label>
                <span class="dubl">
                    <span class="inputBox noTr">
                        <input name="temp_in" type="text" class="placeholder-12" value="ВХОД" />
                        °С
                    </span>
                    <span class="inputBox noTr">
                        <input name="temp_out" type="text" class="placeholder-13" value="ВЫХОД" />
                        °С
                    </span>
                </span>
            </div>
            <div class="line line-label">
                <label class="middle wAu">Влажность относительная</label>
                <span class="dubl">
                    <span class="inputBox noTr">
                        <input name="dry_in" type="text" class="placeholder-12" value="ВХОД" />
                        %
                    </span>
                    <span class="inputBox noTr">
                        <input name="dry_out" type="text" class="placeholder-13" value="ВЫХОД" />
                        %
                    </span>
                </span>
            </div>
            <div class="line line-label">
                <label class="middle wAu">Допустимое сопротивление</label>
                <span class="inputBox noTr">
                    <input name="soprot" type="text" />
                    Па
                </span>
            </div>
            <div class="title">Теплоноситель (жидкость)</div>
            <div class="line line-label">
                <label class="middle wAu">Расход</label>
                <span class="inputBox noTr">
                    <input name="heat_rasxod" type="text" />
                    кг/ч
                </span>
            </div>
            <div class="line line-label">
                <label class="middle wAu">Допустимое сопротивление</label>
                <span class="inputBox noTr">
                    <input name="dop_soprot" type="text" />
                    кПа
                </span>
            </div>
            <div class="line line-label">
                <label class="wAu">Хладогент <span>Фреон, вода, этиленгликоль, другое</span></label>
                <input name="hladogent_teplonositel" type="text" class="inputBox placeholder-4 s-3" value="Наименование">
            </div>
            <div class="title">Для нагрева или охлаждения воздуха</div>
            <div class="line line-label">
                <label class="middle wAu">Температура</label>
                <span class="dubl">
                    <span class="inputBox noTr">
                        <input name="teplonos_tempIN" type="text" class="placeholder-12" value="ВХОД" />
                        °С
                    </span>
                    <span class="inputBox noTr">
                        <input name="teplonos_tempOUT" type="text" class="placeholder-13" value="ВЫХОД" />
                        °С
                    </span>
                </span>
            </div>
            <div class="title">Для конденсатора</div>
            <div class="line line-label">
                <label class="middle wAu">Температура  конденсации</label>
                <span class="inputBox noTr">
                    <input name="condensat_temp" type="text" />
                    °С
                </span>
            </div>
            <div class="title">Для испарителя</div>
            <div class="line line-label">
                <label class="middle wAu">Температура  кипения</label>
                <span class="inputBox noTr">
                    <input name="isparitel_temp" type="text" />
                    °С
                </span>
            </div>
            <div class="title"></div>
            <div class="line line-label">
                <label class="middle wAu">Мощность</label>
                <span class="inputBox noTr">
                    <input name="power" type="text" />
                    кВт
                </span>
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
                <input type="submit" value="Отправить" class="btn-type-1" onclick="yaCounter22161481.reachGoal('TH-OPROS-SUBMIT'); return true;"/>
            </div>
        </form>
    </div>
<div id="error" class="questionnaire_notific wrapper alert-form">Заполните обязательные поля!</div>
<div id="sucsess" class="questionnaire_notific wrapper alert-form">Спасибо за заявку. Наш менеджер свяжется с вами в ближайшее время</div>
<div id="error_capthca" class="questionnaire_notific wrapper alert-form">Введеные символы не свопадают с картинкой!</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

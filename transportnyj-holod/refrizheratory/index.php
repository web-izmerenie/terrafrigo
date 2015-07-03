<?$GLOBALS['iblock_id'] = '17';
define('BANER', 'Y');
define('COLD-TRANSPORT', 'Y');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Рефрижераторы");
?>
<div class="benefit-block">
    <ul>
        <li class="transport-icon-1" style="background-color: #4ea4e4;"><span>Отечественное оборудование по ценам ниже европейских аналогов</span></li>
        <li class="transport-icon-2" style="background-color: #ec5a5d;"><span>Более 80 дилерских центров продаж и сервисного обслуживания по России и СНГ</span></li>
        <li class="trailers-icon-1" style="background-color: #edcf85;"><span>Проверка ОТК на каждом этапе производства оборудования</span></li>
        <li class="trailers-icon-2" style="background-color: #21c097;"><span>Фреон, заправляемый в установки, не содержит хлора и безопасен для окружающей среды и перевозимой продукции</span></li>
    </ul>
</div>
<form class="filter_selection search" method="post" action="./filter.php">
    <div class="wrapper">
        <div class="title">Подбор рефрижератора</div>
        <div class="group group-search-1 clearfix">
            <div class="group-title ieb icon-f4">Внутренний объем фургона</div>
            <div class="line">
                <div class="radio-btn border">
                    <div><input type="radio" name="gr1" value="до 6м" id="gr1-1" /><label for="gr1-1"><span class="image"><img src="<?=$tplPath;?>img/icon-tr-1.png" alt="" /></span>до 6 м³</label></div>
                    <div><input type="radio" name="gr1" value="от 6м до 10м" id="gr1-2" /><label for="gr1-2"><span class="image"><img  src="<?=$tplPath;?>img/icon-tr-2.png" alt="" /></span>от 6 м³ до 10 м³</label></div>
                    <div><input type="radio" name="gr1" value="от 10м до 20м" id="gr1-3" /><label for="gr1-3"><span class="image"><img  src="<?=$tplPath;?>img/icon-tr-3.png" alt="" /></span>от 10 м³ до 20 м³</label></div>
                </div>
            </div>
            <div class="line">
                <div class="radio-btn border">
                    <div><input type="radio" name="gr1" value="от 20м до 26м" id="gr1-4" /><label for="gr1-4"><span class="image"><img  src="<?=$tplPath;?>img/icon-tr-4.png" alt="" /></span>от 20 м³ до 26 м³</label></div>
                    <div><input type="radio" name="gr1" value="от 26м до 36м" id="gr1-5" /><label for="gr1-5"><span class="image"><img  src="<?=$tplPath;?>img/icon-tr-5.png" alt="" /></span>от 26 м³ до 36 м³</label></div>
                    <div><input type="radio" name="gr1" value="от 36м до 50м" id="gr1-6" /><label for="gr1-6"><span class="image"><img  src="<?=$tplPath;?>img/icon-tr-6.png" alt="" /></span>от 36 м³ до 50 м³</label></div>
                </div>
            </div>
        </div>

        <div class="group group-search-2 clearfix">
            <div class="group-title ieb icon-f5">Материал и толщина утеплителя</div>
            <div class="line">
                <div class="radio-btn">
                    <div><input class="tabs" data-target="tab2" type="radio" name="gr2" value="Пенопласт" id="gr2-1" /><label for="gr2-1">Пенопласт</label></div>
                    <div><input class="tabs" type="radio" data-target="tab1" name="gr2" value="ППС" id="gr2-2" /><label for="gr2-2">Пенополистирол <br />экструдированный (ППС)</label></div>
                    <div><input class="tabs" type="radio" data-target="tab3" name="gr2" value="ППУ" id="gr2-3" /><label for="gr2-3">Пенополиуретан (ППУ)</label></div>
                </div>
            </div>
            <div class="line tabs-target" id="tab1">
                <div class="radio-btn">
                    <div><input type="radio" name="gr21" value="50мм" id="gr2-4" /><label for="gr2-4">50 мм</label></div>
                    <div><input type="radio" name="gr21" value="60мм" id="gr2-5" /><label for="gr2-5">60 мм</label></div>
                    <div><input type="radio" name="gr21" value="70мм" id="gr2-6" /><label for="gr2-6">70 мм</label></div>
                    <div><input type="radio" name="gr21" value="80мм" id="gr2-7" /><label for="gr2-7">80 мм</label></div>
                </div>
            </div>
            <div class="line tabs-target" id="tab2">
                <div class="radio-btn">
                    <div><input type="radio" name="gr22" value="50мм" id="gr2-8" /><label for="gr2-8">50 мм</label></div>
                    <div><input type="radio" name="gr22" value="60мм" id="gr2-9" /><label for="gr2-9">70 мм</label></div>
                    <div><input type="radio" name="gr22" value="70мм" id="gr2-10" /><label for="gr2-10">80 мм</label></div>
                </div>
            </div>
            <div class="line tabs-target" id="tab3">
                <div class="radio-btn">
                    <div><input type="radio" name="gr23" value="50мм" id="gr2-11" /><label for="gr2-11">50 мм</label></div>
                    <div><input type="radio" name="gr23" value="60мм" id="gr2-12" /><label for="gr2-12">60 мм</label></div>
                    <div><input type="radio" name="gr23" value="70мм" id="gr2-13" /><label for="gr2-13">70 мм</label></div>
                    <div><input type="radio" name="gr23" value="80мм" id="gr2-14" /><label for="gr2-14">80 мм</label></div>
                </div>
            </div>
        </div>

        <div class="group group-search-3 clearfix tabs-block">
            <div class="group-title ieb icon-f6">Режим работы</div>
            <div class="line">
                <div class="radio-btn border">
                    <div><input type="radio" value="до +1 в теплое время года" name="gr3" id="gr3-1" /><label for="gr3-1"><span class="image"><img  src="<?=$tplPath;?>img/icon-temp-1.png" alt="" /></span>Охлаждение до +1 С° <br />в теплое время года</label></div>
                    <div><input type="radio" value="от 0 до -20" name="gr3" id="gr3-2" /><label for="gr3-2"><span class="image"><img  src="<?=$tplPath;?>img/icon-temp-2.png" alt="" /></span>Холод <br />от 0 С° до –20 С°</label></div>
                    <div><input type="radio" value="от -20 до +12" name="gr3" id="gr3-3" /><label for="gr3-3"><span class="image"><img  src="<?=$tplPath;?>img/icon-temp-3.png" alt="" /></span>Холод-Тепло <br />от –20 С° до +12 С°</label></div>
                     <div><input type="radio" value="до +1 круглый год" name="gr3" id="gr3-4" /><label for="gr3-4"><span class="image"><img  src="<?=$tplPath;?>img/icon-prod-4.png" alt="" /></span>Охлажение до +1 °С <br />круглый год</label></div>
                </div>
            </div>
        </div>

        <div class="group group-search-4 clearfix tabs-block">
            <div class="group-title ieb icon-f7">Тип перевозимой продукции</div>
            <div class="line">
                <div class="radio-btn border">
                    <div><input type="radio" value="охлажденные продукты" name="gr4" id="gr4-1" /><label for="gr4-1"><span class="image"><img  src="<?=$tplPath;?>img/icon-prod-1.png" alt="" /></span><span class="text">Любые охлажденные продукты, <br />в том числе фрукты и овощи</span></label></div>
                    <div><input type="radio" value="замороженные продукты" name="gr4" id="gr4-2" /><label for="gr4-2"><span class="image"><img  src="<?=$tplPath;?>img/icon-prod-2.png" alt="" /></span><span class="text">Любые замороженные продукты</span></label></div>
                    <div><input type="radio" value="охлажденные продукты, замороженные продукты" name="gr4" id="gr4-3" /><label for="gr4-3"><span class="image"><img  src="<?=$tplPath;?>img/icon-prod-3.png" alt="" /></span><span class="text">Охлажденные продукты, замороженные продукты, <br />в том числе фрукты, кондитерские изделия, цветы, лекарства</span></label></div>
                </div>
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
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

<?require_once($_SERVER['DOCUMENT_ROOT'].'/PHPMailer/class.phpmailer.php');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if($_POST['nameOrg'] != 'Название организации *'){
    $mail_body ='<ul>
                    <li>Название организации: '.$_POST['nameOrg'].'</li>
                    <li>Контактное лицо: '.$_POST['fio'].'</li>
                    <li>Город: '.$_POST['city'].'</li>
                    <li>Телефон: '.$_POST['tel'].'</li>
                    <li>E-mail: '.$_POST['email'].'</li>
                    <li>Тип теплообменника: '.$_POST['freon'].' '.$_POST['water'].' '.$_POST['other_colhead'].'</li>
                    <li>КОЛИЧЕСТВО ОДИНАКОВЫХ ТЕПЛООБМЕННИКОВ: '.$_POST['count_coldhead'].'</li>
                    <li>Цель использования теплообменника: '.$_POST['condensator'].' '.$_POST['air'].' '.$_POST['air'].' '.$_POST['isparitel'].' '.$_POST['heat'].'</li>
                    <li><h3>Габаритные и присоединительные размеры:</h3></li>
                    <li>L1: '.$_POST['l1-1'].' L1: '.$_POST['l1-2'].'</li>
                    <li>L2: '.$_POST['l2-1'].' L2: '.$_POST['l2-2'].'</li>
                    <li>L3: '.$_POST['l3-1'].' L3: '.$_POST['l3-2'].'</li>
                    <li>Вход D1: '.$_POST['D1-1'].' Вход D2: '.$_POST['D2-2'].'</li>
                    <li><h3>Воздух:</h3></li>
                    <li>Расход: '.$_POST['rasxod'].'</li>
                    <li>Температура: Вход - '.$_POST['temp_in'].' Выход - '.$_POST['temp_out'].'</li>
                    <li>Влажность относительная: Вход - '.$_POST['dry_in'].' Выход - '.$_POST['dry_out'].'</li>
                    <li>Допустимое сопротивление: '.$_POST['soprot'].'</li>
                    <li><h3>Теплоноситель (жидкость):</h3></li>
                    <li>Расход: '.$_POST['heat_rasxod'].'</li>
                    <li>Допустимое сопротивление: '.$_POST['dop_soprot'].'</li>
                    <li>Хладогент : '.$_POST['hladogent_teplonositel'].'</li>
                    <li><h3>Для нагрева или охлаждения воздуха:</h3></li>
                    <li>Температура: Вход - '.$_POST['teplonos_tempIN'].' Выход - '.$_POST['teplonos_tempOUT'].'</li>
                    <li><h3>Для конденсатора:</h3></li>
                    <li>Температура  конденсации: '.$_POST['condensat_temp'].'</li>
                    <li><h3>Для испарителя:</h3></li>
                    <li>Температура  кипения: '.$_POST['isparitel_temp'].'</li>
                    <li>Мощность: '.$_POST['power'].'</li>
                </ul>
                <p>'.$_POST['other'].'</p>';

    /*запись данных в инфоблок*/
    $arLoadProductArray = Array( "MODIFIED_BY" => $USER->GetID(),
        "IBLOCK_SECTION_ID" => 144,
        "IBLOCK_ID" => 24,
        "NAME" => 'Организация '.$_POST['nameOrg'],
        "ACTIVE" => "N",
        "DETAIL_TEXT" => $mail_body,
        );
    CModule::IncludeModule("iblock");
    $element = new CIBlockElement;
    if($product_ID = $element->Add($arLoadProductArray)){

        /*отправка формы*/
        $mail = new PHPMailer;
        $mail->From = "no-replay@terrafrigo.ru";
        $mail->FromName = "no-replay";
        $mail->AddAddress('andrey.chechkin@web-izmerenie.ru');

        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Subject = 'Опросный лист для проектирования и изготовления трубчато-ламельного теплообменника';
        $mail->Body = $mail_body;

        if($mail->Send()){
                return true;
            }
        }
}
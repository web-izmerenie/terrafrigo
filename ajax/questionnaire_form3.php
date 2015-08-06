<?require_once($_SERVER['DOCUMENT_ROOT'].'/PHPMailer/class.phpmailer.php');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if($_POST['name_organization'] != 'Название организации *'){
    $mail_body ='<ul>
                    <li>Название организации: '.$_POST['name_organization'].'</li>
                    <li>Контактное лицо: '.$_POST['contact_name'].'</li>
                    <li>Город: '.$_POST['city'].'</li>
                    <li>Телефон: '.$_POST['tel'].'</li>
                    <li>E-mail: '.$_POST['mail'].'</li>
                    <li>Требуемая мощность: '.$_POST['power'].'</li>
                    <li>Начальная температура теплоносителя: '.$_POST['temp_start'].'</li>
                    <li>Конечная температура теплоносителя: '.$_POST['temp_end'].'</li>
                    <li>Теплоноситель: '.$_POST['name_agregat'].'</li>
                    <li>Температура воздуха: '.$_POST['temp_air'].'</li>
                    <li>Исполнение агрегата: '.$_POST['perfomance'].'</li>
                </ul>
                <p>'.$_POST['other'].'</p>';

    /*запись данных в инфоблок*/
    $arLoadProductArray = Array( "MODIFIED_BY" => $USER->GetID(),
        "IBLOCK_SECTION_ID" => 145,
        "IBLOCK_ID" => 24,
        "NAME" => 'Организация '.$_POST['name_organization'],
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
        $mail->AddAddress('babalykhiyn.l@terrafrigo.ru');
        $mail->AddAddress('marketing@terrafrigo.ru');

        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Subject = 'Опросный лист на подбор и проэктирование градирни';
        $mail->Body = $mail_body;

        if($mail->Send()){
              return true;
            }
        }
}

<?require_once($_SERVER['DOCUMENT_ROOT'].'/PHPMailer/class.phpmailer.php');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if($_POST['name_organization'] !== ''){
    $mail_body ='<ul>
                    <li>Название организации: '.$_POST['name_organization'].'</li>
                    <li>Контактное лицо: '.$_POST['contact_name'].'</li>
                    <li>Город: '.$_POST['city'].'</li>
                    <li>Телефон: '.$_POST['tel'].'</li>
                    <li>E-mail: '.$_POST['email'].'</li>
                    <li>Требуемая мощность: '.$_POST['power'].'</li>
                    <li>Хладогент: '.$_POST['cloudhed'].'</li>
                    <li>Температура наружного воздуха: '.$_POST['temp_air'].'</li>
                    <li>Температура конденсации хладогента: '.$_POST['temp_cloudhead'].'</li>
                </ul>
                <p>'.$_POST['other'].'</p>';

    /*запись данных в инфоблок*/
    $arLoadProductArray = Array( "MODIFIED_BY" => $USER->GetID(),
        "IBLOCK_SECTION_ID" => 143,
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
        $mail->Subject = 'Опросный лист для подбора и проектирования компрессорно-конденсаторного блока';
        $mail->Body = $mail_body;

        if($mail->Send()){
              return true;
            }
        }
}

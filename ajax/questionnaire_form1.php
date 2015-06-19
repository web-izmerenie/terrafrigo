<?require_once($_SERVER['DOCUMENT_ROOT'].'/PHPMailer/class.phpmailer.php');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$mail_body ='<ul>
                <li>Название организации: '.$_POST['name_organization'].'</li>
                <li>Контактное лицо: '.$_POST['contact_name'].'</li>
                <li>Город: '.$_POST['city'].'</li>
                <li>Телефон: '.$_POST['tel'].'</li>
                <li>Требуемая мощность: '.$_POST['power'].'</li>
                <li>Хладогент: '.$_POST['cloudhed'].'</li>
                <li>Температура наружного воздуха: '.$_POST['temp_air'].'</li>
                <li>Температура конденсации хладогента: '.$_POST['temp_cloudhead'].'</li>
            </ul> 
            <p>'.$_POST['other'].'</p>';

/*запись данных в инфоблок*/ 
$arLoadProductArray = Array( "MODIFIED_BY" => $USER->GetID(),
    "IBLOCK_SECTION_ID" => false,
    "IBLOCK_ID" => 24,
    "NAME" => $_POST['name_organization'],
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
    $mail->Subject = 'Опросный лист для подбора и проектирования компрессорно-конденсаторного блока'; 
    $mail->Body = $mail_body;

    if($mail->Send()){ 
        echo 'Отправлено';
    }
    echo 'Элемент записан ('.$product_ID.') '; 
}else{ 
    echo "Error: ".$element->LAST_ERROR.' '; 
}

<?
require_once($_SERVER['DOCUMENT_ROOT']."/smsc/smsc_api.php");
require_once($_SERVER['DOCUMENT_ROOT'].'/PHPMailer/class.phpmailer.php');

if($_POST['tel'] != 'Телефон *' || $_POST['name'] != 'Фио*'){
    $mail_body ='<ul>
                    <li>Телефон: '.$_POST['tel'].'</li>
                    <li>ФИО: '.$_POST['name'].'</li>
                    <li>Округ: '.$_POST['okrug'].'</li>
                    <li>Время звонка: '.$_POST['time'].'</li>
                </ul>';
    
    $sms = 'Заказ звонка
            Телефон: '.$_POST['tel'].'
            ФИО: '.$_POST['name'].'
            Округ: '.$_POST['okrug'].'
            Время звонка: '.$_POST['time'];
    
    $phones = '79185342507';
    
     /*отправка смс*/
    //send_sms_mail($phones, $sms);

    /*отправка формы*/
    $mail = new PHPMailer;
    $mail->From = "no-replay@terrafrigo.ru";
    $mail->FromName = "no-replay";
    $mail->AddAddress('marketing@terrafrigo.ru');

    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Subject = 'Заказ звонка';
    $mail->Body = $mail_body;

    if($mail->Send()){
          return true;
        }
}

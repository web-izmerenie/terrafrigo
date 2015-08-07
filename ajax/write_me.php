<?
require_once($_SERVER['DOCUMENT_ROOT']."/smsc/smsc_api.php");
require_once($_SERVER['DOCUMENT_ROOT'].'/PHPMailer/class.phpmailer.php');

if($_POST['tel'] != 'Телефон *' || $_POST['name'] != 'Фио*'){
    $mail_body ='<ul>
                    <li>ФИО: '.$_POST['name'].'</li>
                    <li>Компания: '.$_POST['company'].'</li>
                    <li>Телефон: '.$_POST['tel'].'</li>
                    <li>Email: '.$_POST['email'].'</li>
                    <li>Округ: '.$_POST['okrug'].'</li>
                    <li>Отдел: '.$_POST['otdel'].'</li>
                    <li>Сообщение: '.$_POST['message'].'</li>
                </ul>';
    
    $sms = 'Написать нам
            ФИО: '.$_POST['name'].'
            Компания: '.$_POST['company'].'
            Телефон: '.$_POST['tel'].'
            Email: '.$_POST['email'].'
            Округ: '.$_POST['okrug'].'
            Отдел: '.$_POST['otdel'].'
            Сообщение: '.$_POST['message'];
    
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
    $mail->Subject = 'Написать нам';
    $mail->Body = $mail_body;

    if($mail->Send()){
          return true;
        }
}

<?
require_once($_SERVER['DOCUMENT_ROOT']."/smsc/smsc_api.php");
require_once($_SERVER['DOCUMENT_ROOT'].'/PHPMailer/class.phpmailer.php');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
if(!$APPLICATION->CaptchaCheckCode($_POST["captcha_word_call"], $_POST["captcha_code_call"]))
{
    print 'false';
}
else
{
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

        $phones = '';

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
            print 'true';
            return true;
            }
    }
}

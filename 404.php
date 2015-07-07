<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");
define('BANER', 'Y');
define('NOT_FOUND', 'Y');

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Страница не найдена");
?>
<section class="not-found">
    <section class="wrap">
        <h1>Ошибка 404</h1>
        <span>
            Введен неверный адрес, или такой страницы больше нет.<br />
    Вернитесь на <a href="/">главную</a>
        </span>
    </section>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/transportnyj-holod/dlya-spetctekhniki/(.*?)/(\\?.*\$|\$)#",
		"RULE" => "&ELEMENT_CODE=\$1",
		"ID" => "",
		"PATH" => "/transportnyj-holod/dlya-spetctekhniki/detail.php",
	),
	array(
		"CONDITION" => "#^/transportnyj-holod/refrizheratory/(.+?)/(.+?)/(\\?|\$)#",
		"RULE" => "SECTION_CODE=\$1&ELEMENT_CODE=\$2&",
		"ID" => "",
		"PATH" => "/transportnyj-holod/refrizheratory/detail.php",
	),
	array(
		"CONDITION" => "#^/transportnyj-holod/komplektuiushchie/(.+?)/(\\\\?|\\\$)#",
		"RULE" => "SECTION_CODE=\$1&",
		"ID" => "",
		"PATH" => "/transportnyj-holod/komplektuiushchie/detail.php",
	),
	array(
		"CONDITION" => "#^/transportnyj-holod/konditcionery/(.*?)/(\\?.*\$|\$)#",
		"RULE" => "&ELEMENT_CODE=\$1",
		"ID" => "",
		"PATH" => "/transportnyj-holod/konditcionery/detail.php",
	),
	array(
		"CONDITION" => "#^/transportnyj-holod/refrizheratory/(.+?)/(\\\\?|\\\$)#",
		"RULE" => "SECTION_CODE=\$1&",
		"ID" => "",
		"PATH" => "/transportnyj-holod/refrizheratory/sections.php",
	),
	array(
		"CONDITION" => "#^/transportnyj-holod/dilery/(.+?)/(\\\\?|\\\$)#",
		"RULE" => "SECTION_CODE=\$1&",
		"ID" => "",
		"PATH" => "/transportnyj-holod/dilery/detail.php",
	),
	array(
		"CONDITION" => "#^/o-zavode/news/(.*?).html(\\?.*\$|\$)#",
		"RULE" => "&ELEMENT_CODE=\$1&",
		"ID" => "",
		"PATH" => "/o-zavode/news/detail.php",
	),
	array(
		"CONDITION" => "#^/vopros-otvet/#",
		"RULE" => "",
		"ID" => "bitrix:catalog",
		"PATH" => "/vopros-otvet/index.php",
	),
);

?>
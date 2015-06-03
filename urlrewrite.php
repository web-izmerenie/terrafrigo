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
		"RULE" => "ELEMENT_CODE=\$2&",
		"ID" => "",
		"PATH" => "/transportnyj-holod/refrizheratory/detail.php",
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
);

?>
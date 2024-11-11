<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("ROBOTS", "Password recovery");
$APPLICATION->SetPageProperty("keywords_inner", "Password recovery");
$APPLICATION->SetPageProperty("title", "Password recovery");
$APPLICATION->SetPageProperty("keywords", "Password recovery");
$APPLICATION->SetPageProperty("description", "Password recovery");
$APPLICATION->SetTitle("Password recovery");
?><?$APPLICATION->IncludeComponent("bitrix:main.auth.forgotpasswd", "get_password", Array(
	"AUTH_AUTH_URL" => "/personal/login/index.php",	// Страница для авторизации
		"AUTH_REGISTER_URL" => "/personal/login/registration.php",	// Страница для регистрации
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
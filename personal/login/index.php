<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Login");
?><?$APPLICATION->IncludeComponent("bitrix:main.auth.form", "login", Array(
	"AUTH_FORGOT_PASSWORD_URL" => "/personal/login/get_password.php",	// Страница для восстановления пароля
		"AUTH_REGISTER_URL" => "/personal/login/registartion.php",	// Страница для регистрации
		"AUTH_SUCCESS_URL" => "/personal/",	// Страница после успешной авторизации
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
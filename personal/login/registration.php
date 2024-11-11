<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "Registration");
$APPLICATION->SetPageProperty("title", "Registration");
$APPLICATION->SetPageProperty("keywords", "Registration");
$APPLICATION->SetPageProperty("description", "Registration");
$APPLICATION->SetTitle("Registration");
?><?$APPLICATION->IncludeComponent("bitrix:main.register", "registartion", Array(
	"AUTH" => "Y",	// Автоматически авторизовать пользователей
		"REQUIRED_FIELDS" => "",	// Поля, обязательные для заполнения
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SHOW_FIELDS" => "",	// Поля, которые показывать в форме
		"SUCCESS_PAGE" => "/personal/",	// Страница окончания регистрации
		"USER_PROPERTY" => "",	// Показывать доп. свойства
		"USER_PROPERTY_NAME" => "",	// Название блока пользовательских свойств
		"USE_BACKURL" => "Y",	// Отправлять пользователя по обратной ссылке, если она есть
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
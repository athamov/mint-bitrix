<?php
if (!defined ('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}
?>

<?php 
use Bitrix\Main\Page\Asset;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php $APPLICATION->ShowHead() ?>
  <?php 
    Asset::getInstance()->addCss(DEFAULT_TEMPLATES_PATH . '/css/style.css');
    Asset::getInstance()->addCss(DEFAULT_TEMPLATES_PATH . '/css/contact.css');
    Asset::getInstance()->addCss(DEFAULT_TEMPLATES_PATH . '/css/footer.css');
    Asset::getInstance()->addCss(DEFAULT_TEMPLATES_PATH . '/css/header.css');
    Asset::getInstance()->addCss(DEFAULT_TEMPLATES_PATH . '/css/media.css');


    Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
    Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="IE=edge">');
    Asset::getInstance()->addString('<link rel="icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" />');


    Asset::getInstance()->addString('<link rel="preconnect" href="https://fonts.googleapis.com">');
    Asset::getInstance()->addString('<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>');
    Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">');
    Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;800&display=swap" rel="stylesheet">');

    
    Asset::getInstance()->addString('<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">');
    Asset::getInstance()->addString('<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>');
    Asset::getInstance()->addString('<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>');



    Asset::getInstance()->addString('<link href="c" rel="stylesheet" media="(max-width: 768px)">');

  ?>
  <title>MINT - Minimal Portfolio</title>
</head>
<body>

  <div id="panel"><?php $APPLICATION->ShowPanel(); ?></div>

  <div class="container">      
      <?php $APPLICATION->IncludeComponent("bitrix:menu", "mint-menu", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "top",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);
      ?>
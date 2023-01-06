<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("MINT");
?>
<section class="header" id="header" data-aos="fade-up">
	<div class="header__content">
		<h2 class="h2">Hello!!! <br>
			WE ARE CREATIVE <br>
			DIGITAL AGENCY. </h2>
		<p class="header__content__text">
			Minim incididunt sint fugiat ullamco ad consequat commodo velit.Consequat exercitation laboris Magna elit ea velit
			nisi.
		</p>
		<a href="#contact"> <button class="header__content__button">
				SEND MESSAGE </button> </a>
	</div>
	<h2></h2>
	<img src="/local/templates/visit/image/skyscapper1.jpg" class="header__image" alt="">
</section>
<section class="work" id="work">
	<div class="section__head">
		<h2 class="h2">Work showcase</h2>
	</div>
		<? $APPLICATION->IncludeComponent(
			"bitrix:catalog.section.list",
			"type_work",
			array(
				"ADD_SECTIONS_CHAIN" => "Y",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"COUNT_ELEMENTS" => "Y",
				"COUNT_ELEMENTS_FILTER" => "CNT_ALL",
				"FILTER_NAME" => "sectionsFilter",
				"IBLOCK_ID" => "8",
				"IBLOCK_TYPE" => "works",
				"SECTION_CODE" => "",
				"SECTION_FIELDS" => array(0 => "CODE", 1 => "",
				),
				"SECTION_ID" => $_REQUEST["SECTION_ID"],
				"SECTION_URL" => "",
				"SECTION_USER_FIELDS" => array(0 => "", 1 => "",
				),
				"SHOW_ANGLE" => "Y",
				"SHOW_PARENT_NAME" => "Y",
				"TOP_DEPTH" => "2",
				"VIEW_MODE" => "LINE"
			)
		); ?>
	<div class="work__image__row">
		<? $APPLICATION->IncludeComponent(
			"bitrix:photo",
			"mint-galery",
			array(
				"AJAX_MODE" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_JUMP" => "Y",
				"AJAX_OPTION_STYLE" => "Y",
				"BROWSER_TITLE" => "-",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"DETAIL_FIELD_CODE" => array(0 => "DETAIL_PICTURE", 1 => "",
				),
				"DETAIL_PROPERTY_CODE" => array(0 => "", 1 => "",
				),
				"DISPLAY_BOTTOM_PAGER" => "Y",
				"DISPLAY_TOP_PAGER" => "N",
				"ELEMENT_SORT_FIELD" => "sort",
				"ELEMENT_SORT_ORDER" => "asc",
				"IBLOCK_ID" => "8",
				"IBLOCK_TYPE" => "works",
				"LIST_BROWSER_TITLE" => "-",
				"LIST_FIELD_CODE" => array(0 => "DETAIL_PICTURE", 1 => "",
				),
				"LIST_PROPERTY_CODE" => array(0 => "", 1 => "",
				),
				"MESSAGE_404" => "",
				"META_DESCRIPTION" => "-",
				"META_KEYWORDS" => "-",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "Y",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_TEMPLATE" => "grid",
				"PAGER_TITLE" => "Фотографии",
				"SECTION_COUNT" => "6",
				"SECTION_LINE_ELEMENT_COUNT" => "3",
				"SECTION_PAGE_ELEMENT_COUNT" => "6",
				"SECTION_SORT_FIELD" => "sort",
				"SECTION_SORT_ORDER" => "asc",
				"SEF_MODE" => "N",
				"SET_LAST_MODIFIED" => "N",
				"SET_STATUS_404" => "N",
				"SET_TITLE" => "N",
				"SHOW_404" => "N",
				"TOP_ELEMENT_COUNT" => "6",
				"TOP_ELEMENT_SORT_FIELD" => "sort",
				"TOP_ELEMENT_SORT_ORDER" => "asc",
				"TOP_FIELD_CODE" => array(0 => "DETAIL_PICTURE", 1 => "",
				),
				"TOP_LINE_ELEMENT_COUNT" => "3",
				"TOP_PROPERTY_CODE" => array(0 => "", 1 => "",
				),
				"USE_FILTER" => "N",
				"USE_PERMISSIONS" => "N",
				"USE_RATING" => "N",
				"VARIABLE_ALIASES" => array("ELEMENT_ID" => "ELEMENT_ID", "SECTION_ID" => "SECTION_ID",
				)
			)
		); ?>
	</div>
	<button style="margin: auto;">
		show me more </button> <br>
	<? $APPLICATION->IncludeComponent(
		"bitrix:photo",
		"mint-sponsors",
		array(
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"BROWSER_TITLE" => "-",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"COMPONENT_TEMPLATE" => ".default",
			"DETAIL_FIELD_CODE" => array(0 => "DETAIL_PICTURE", 1 => "",
			),
			"DETAIL_PROPERTY_CODE" => array(0 => "", 1 => "",
			),
			"DISPLAY_BOTTOM_PAGER" => "N",
			"DISPLAY_TOP_PAGER" => "N",
			"ELEMENT_SORT_FIELD" => "sort",
			"ELEMENT_SORT_ORDER" => "asc",
			"IBLOCK_ID" => "11",
			"IBLOCK_TYPE" => "about",
			"LIST_BROWSER_TITLE" => "-",
			"LIST_FIELD_CODE" => array(0 => "DETAIL_PICTURE", 1 => "",
			),
			"LIST_PROPERTY_CODE" => array(0 => "", 1 => "",
			),
			"MESSAGE_404" => "",
			"META_DESCRIPTION" => "-",
			"META_KEYWORDS" => "-",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Фотографии",
			"SECTION_COUNT" => "20",
			"SECTION_LINE_ELEMENT_COUNT" => "3",
			"SECTION_PAGE_ELEMENT_COUNT" => "20",
			"SECTION_SORT_FIELD" => "sort",
			"SECTION_SORT_ORDER" => "asc",
			"SEF_MODE" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"TOP_ELEMENT_COUNT" => "9",
			"TOP_ELEMENT_SORT_FIELD" => "sort",
			"TOP_ELEMENT_SORT_ORDER" => "asc",
			"TOP_FIELD_CODE" => array(0 => "DETAIL_PICTURE", 1 => "",
			),
			"TOP_LINE_ELEMENT_COUNT" => "3",
			"TOP_PROPERTY_CODE" => array(0 => "", 1 => "",
			),
			"USE_FILTER" => "N",
			"USE_PERMISSIONS" => "N",
			"USE_RATING" => "N",
			"VARIABLE_ALIASES" => array("SECTION_ID" => "SECTION_ID", "ELEMENT_ID" => "ELEMENT_ID",
			)
		)
	); ?>
</section>
<section class="about" id="about">
	<div class="section__head">
		<h2 class="h2">About us</h2>
		<p>
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima rerum commodi iusto deleniti doloribus repellendus
			numquam, nemo possimus adipisci illo!
		</p>
	</div>
		<? $APPLICATION->IncludeComponent(
			"bitrix:photo",
			"team-members",
			array(
				"COMPONENT_TEMPLATE" => ".default",
				"IBLOCK_TYPE" => "about",
				// Тип инфоблока
				"IBLOCK_ID" => "12",
				// Инфоблок
				"SEF_MODE" => "N",
				// Включить поддержку ЧПУ
				"AJAX_MODE" => "N",
				// Включить режим AJAX
				"AJAX_OPTION_JUMP" => "N",
				// Включить прокрутку к началу компонента
				"AJAX_OPTION_STYLE" => "Y",
				// Включить подгрузку стилей
				"AJAX_OPTION_HISTORY" => "N",
				// Включить эмуляцию навигации браузера
				"AJAX_OPTION_ADDITIONAL" => "",
				// Дополнительный идентификатор
				"CACHE_TYPE" => "A",
				// Тип кеширования
				"CACHE_TIME" => "36000000",
				// Время кеширования (сек.)
				"CACHE_FILTER" => "N",
				// Кешировать при установленном фильтре
				"CACHE_GROUPS" => "Y",
				// Учитывать права доступа
				"SET_TITLE" => "Y",
				// Устанавливать заголовок страницы
				"SET_LAST_MODIFIED" => "N",
				// Устанавливать в заголовках ответа время модификации страницы
				"USE_PERMISSIONS" => "N",
				// Использовать дополнительное ограничение доступа
				"USE_RATING" => "N",
				// Разрешить голосование
				"USE_FILTER" => "N",
				// Показывать фильтр
				"SECTION_COUNT" => "20",
				// Максимальное количество выводимых разделов
				"TOP_ELEMENT_COUNT" => "9",
				// Максимальное количество фотографий, выводимых в каждом разделе
				"TOP_LINE_ELEMENT_COUNT" => "3",
				// Количество фотографий, выводимых в одной строке таблицы списка разделов
				"SECTION_SORT_FIELD" => "sort",
				// По какому полю сортируем разделы
				"SECTION_SORT_ORDER" => "asc",
				// Порядок сортировки разделов
				"TOP_ELEMENT_SORT_FIELD" => "sort",
				// По какому полю сортируем фотографии
				"TOP_ELEMENT_SORT_ORDER" => "asc",
				// Порядок сортировки фотографий в разделе
				"TOP_FIELD_CODE" => array(
					// Поля
					0 => "DETAIL_PICTURE",
					1 => "",
				),
				"TOP_PROPERTY_CODE" => array(
					// Свойства
					0 => "",
					1 => "",
				),
				"SECTION_PAGE_ELEMENT_COUNT" => "20",
				// Количество элементов на странице
				"SECTION_LINE_ELEMENT_COUNT" => "3",
				// Количество фотографий, выводимых в одной строке таблицы раздела
				"ELEMENT_SORT_FIELD" => "sort",
				// По какому полю сортируем фотографии
				"ELEMENT_SORT_ORDER" => "asc",
				// Порядок сортировки фотографий в разделе
				"LIST_FIELD_CODE" => array(
					// Поля
					0 => "DETAIL_PICTURE",
					1 => "",
				),
				"LIST_PROPERTY_CODE" => array(
					// Свойства
					0 => "",
					1 => "",
				),
				"LIST_BROWSER_TITLE" => "-",
				// Установить заголовок окна браузера из свойства
				"META_KEYWORDS" => "-",
				// Установить ключевые слова страницы из свойства
				"META_DESCRIPTION" => "-",
				// Установить описание страницы из свойства
				"BROWSER_TITLE" => "-",
				// Установить заголовок окна браузера из свойства
				"DETAIL_FIELD_CODE" => array(
					// Поля
					0 => "DETAIL_PICTURE",
					1 => "",
				),
				"DETAIL_PROPERTY_CODE" => array(
					// Свойства
					0 => "",
					1 => "",
				),
				"PAGER_TEMPLATE" => ".default",
				// Шаблон постраничной навигации
				"DISPLAY_TOP_PAGER" => "N",
				// Выводить над списком
				"DISPLAY_BOTTOM_PAGER" => "Y",
				// Выводить под списком
				"PAGER_TITLE" => "Фотографии",
				// Название категорий
				"PAGER_SHOW_ALWAYS" => "N",
				// Выводить всегда
				"PAGER_DESC_NUMBERING" => "N",
				// Использовать обратную навигацию
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				// Время кеширования страниц для обратной навигации
				"PAGER_SHOW_ALL" => "N",
				// Показывать ссылку "Все"
				"PAGER_BASE_LINK_ENABLE" => "N",
				// Включить обработку ссылок
				"SET_STATUS_404" => "N",
				// Устанавливать статус 404
				"SHOW_404" => "N",
				// Показ специальной страницы
				"MESSAGE_404" => "",
				// Сообщение для показа (по умолчанию из компонента)
				"VARIABLE_ALIASES" => array(
					"SECTION_ID" => "SECTION_ID",
					"ELEMENT_ID" => "ELEMENT_ID",
				)
			),
			false
		); ?>
</section>
<section class="blog" id="blog">
	<div class="section__head">
		<h2 class="h2">our blog</h2>
		<p>
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem earum iste asperiores magnam ea aliquam
			perspiciatis sed. Labore provident.
		</p>
	</div>
	<? $APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"mint-blog",
		array(
			"ACTIVE_DATE_FORMAT" => "j F Y",
			"ADD_SECTIONS_CHAIN" => "Y",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"COMPONENT_TEMPLATE" => "mint-blog",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "Y",
			"DISPLAY_DATE" => "Y",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"DISPLAY_TOP_PAGER" => "Y",
			"FIELD_CODE" => array(0 => "TIMESTAMP_X", 1 => "",
			),
			"FILTER_NAME" => "",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "9",
			"IBLOCK_TYPE" => "-",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
			"INCLUDE_SUBSECTIONS" => "Y",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "20",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "Y",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => "arrows",
			"PAGER_TITLE" => "Новости",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => array(0 => "", 1 => "",
			),
			"SET_BROWSER_TITLE" => "Y",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "Y",
			"SET_META_KEYWORDS" => "Y",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "Y",
			"SHOW_404" => "N",
			"SORT_BY1" => "ACTIVE_FROM",
			"SORT_BY2" => "SORT",
			"SORT_ORDER1" => "DESC",
			"SORT_ORDER2" => "ASC",
			"STRICT_SECTION_CHECK" => "N"
		)
	); ?> 
 </section>
	<section class="contact" id="contact">
		<div class="section__head">
			<h2 class="h2">contact us</h2>
			<p>
				Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero, esse eum numquam ex architecto eos amet quae id
				earum porro molestias ducimus aliquid eveniet.
			</p>
		</div>
		<div class="contact__content">
			<? $APPLICATION->IncludeComponent(
				"bitrix:main.feedback",
				"mint-mail",
				array(
					"COMPONENT_TEMPLATE" => "mint-mail",
					"EMAIL_TO" => "abdulloxathamoff@gmail.com",
					"EVENT_MESSAGE_ID" => array(),
					"OK_TEXT" => "Спасибо, ваше сообщение принято.",
					"REQUIRED_FIELDS" => array(),
					"USE_CAPTCHA" => "N"
				)
			); ?>
			<div class="contact__image" data-aos="fade-up-right">
				<img src="/local/templates/visit/image/skyskyper.jpg" alt="">
			</div>
		</div>
	</section> <br>
</section><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
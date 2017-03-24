<?php

/** Вырезает теги из строки &str аналогично strip_tags(), меняет кавычки на спецсимволы.

	&tags (0 - нет|1 - да)- вырезать ли теги. Default: 0.
	&str - строка, с котрой работает сниппеток.

	[[cleanString? &tags = `1` &str = `[*desc*]`]] к примеру для вывода description, очищенного oт тегов.
**/

if(!defined('MODX_BASE_PATH')){die('What are you doing? Get out of here!');}

	$tags = isset($tags) ? $tags : 0;

	if($tags) {
		$str = strip_tags($str);
	}

	return htmlentities($str,ENT_QUOTES,"UTF-8");
?>

Упрощенный.
Меняет кавычки на спецсимволы.
=======================================


<?php
//[[cleanString? &str = `[*desc*]`]] к примеру для вывода description, с преобразованными кавычками

if(!defined('MODX_BASE_PATH')){die('What are you doing? Get out of here!');}

	return htmlspecialchars($str,ENT_QUOTES,"UTF-8");
?>

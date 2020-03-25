<?php
/**
 * cleanSymbols
 * Убирает ненужные символы, например из телефона
 * пригодится, чтобы например убирать из номера вида +7 (383) 123-45-67 дефисы, пробелы и скобки для подстановки в ссылку
 *
 * @category	snippet
 * @version     1.0
 * @package     evo
 * @author      Author: http://aharito.ru
 * @internal    @modx_category Content
 * @internal    @installset base
 *
 * @param (string) str - строка, которую надо чистить
 * @param (string) sym - список символов через запятую, которые надо убрать
 * @param (int) space - убирать ли пробел (0|1), по умолчанию убирать
 * @example [[cleanSymbols? &str=`+7 (383) 123-45-67` &sym=`+,(,)`]]
 */
 
	
$_sym = array();
	
$space = (!isset($space)) ? 1 : $space;

$sym = str_replace(' ', '', $sym); // Удаляем возможные пробелы между запятыми в списке символов

$_sym = explode(',', $sym);

if($space) { $_sym[] = ' '; }


return str_replace($_sym, '', $str);

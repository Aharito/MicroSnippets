<?php
/**
 * ArticleDate
 * Вывод даты статьи с учетом pub_date в нужном формате
 *
 * @category snippet
 * @version   0.1
 * @CMS version MODx Evo 7.1.6
 *
 * @param (string) &format - формат вывода даты согласно http://php.net/manual/ru/function.strftime.php, по умолчанию "%d.%m.%Y"
 * 
 * @author Aharito http://aharito.ru
**/

if(!defined('MODX_BASE_PATH')){die('What are you doing? Get out of here!');}
	
$pub_date = $modx->documentObject['pub_date'];
$publishedon = $modx->documentObject['publishedon'];
$createdon = $modx->documentObject['createdon'];

$date = ($pub_date) ? $pub_date : $publishedon;

if ($format == '' ) $format = "%d.%m.%Y";
return strftime($format, $date);
?>
<?php
/**
 * ArticleAuthor
 * Вывод имени автора текущей статьи в нужном формате
 *
 * @category snippet
 * @version   0.1
 * @CMS version MODx Evo 7.1.6
 *
 * @param (int) &full - если 1, выводится полное имя, 0 - юзерник, по умолчанию юзерник
 *
 * @example [[ArticleAuthor? &full=`1`]] выведется полное имя
 * @example [[ArticleAuthor]] выведется юзерник
 * 
 * @author Aharito http://aharito.ru
**/

if(!defined('MODX_BASE_PATH')){die('What are you doing? Get out of here!');}	

$key = ($full) ? 'fullname' : 'username';
	
$name = $modx->getUserInfo($modx->documentObject['createdby']);

return $name[$key];
?>
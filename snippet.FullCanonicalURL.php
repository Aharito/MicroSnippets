<?php
// FullCanonicalURL snippet
// Возвращает полный URL  ресурса
// 
// @version 0.1
// @author Aharito http://aharito.ru
// @param &docId - ID ресурса (по умолчанию - ID текущей страницы)
// @param &excludeTpl - ID шаблонов через запятую. Для док-тов с такими ID ничего не выводится.
// @param &tpl - string ('tag'|'url') default - tag. Если &tpl=`tag`, то выдает полный тег вида <link rel="canonical" href="http://site.ru/..."/>. Если &tpl=`url`, то выдает только УРЛ
//
//	
// @example [[FullCanonicalURL]]

if(!defined('MODX_BASE_PATH')){die('What are you doing? Get out of here!');}

$docId = isset( $docId ) ? $docId : $modx->documentObject['id'];
$tag = isset( $tag ) ? $tag : 'tag';

$out = '';

if ( !isset($excludeTpl) ) {
	$out = ($tag == 'tag') ? '<link rel="canonical" href="' . $modx->makeUrl($docId, '', '', 'full') . '">' : $modx->makeUrl($docId, '', '', 'full');
} else {
	$excludeTpl = str_replace(" ", "", $excludeTpl);
	$_excludeTpl = explode(",", $excludeTpl);
	
	if ( !in_array($modx->documentObject['template'], $_excludeTpl) ) {
		$out = ($tag == 'tag') ? '<link rel="canonical" href="' . $modx->makeUrl($docId, '', '', 'full') . '">' : $modx->makeUrl($docId, '', '', 'full');	
	}
}

return $out;
<?php
/**
 * SGgetOnePic
 * 
 * Быстро берем первую картинку для документа из Галереи SimpleGallery
 * 
 * @category snippet
 * @version   0.1
 * @CMS version MODx Evo 7.1.6
 * 16.02.2017
 * 
 * @author Aharito http://aharito.ru
 *
 * @params
 * (int) &docId - ID документа,
 * (string) &thumbOptions - название подпапки в галерее как для sgThumb
 *
 * @example <img src="[[SGgetOnePic? &docId=`[+id+]` &thumbOptions=`sidebar_featured_img`]]" alt=""> (чанк-шаблон для Doclister)
 * @example <img src="[[SGgetOnePic? &docId=`[*id*]` &thumbOptions=`sidebar_featured_img`]]" alt=""> (просто чанк)
 *
 * @NOTE: При этом а папках галерей должны существовать подпапки с именем /sidebar_featured_img
 *        то есть среди параметров плагина sgThumb для SimpleGallery должна быть и подобная запись:
 *        {"template":5,"options":"w=110&h=140&zc=C","folder":"sidebar_featured_img"}	
 *
 * @TODO: Написать ту же хрень в виде prepare или дописать сюда с проверкой на объект ДокЛистера как в FastImageTVPreviews
**/ 
	
if(!defined('MODX_BASE_PATH')){die('What are you doing? Get out of here!');}	

$q = "SELECT `sg_image` FROM ".$modx->getFullTableName("sg_images")." WHERE sg_rid={$docId} AND sg_index=0";
$input = $modx->db->getValue($modx->db->query($q));
	
$file = array_pop(explode('/',$input));
return str_replace($file,$thumbOptions.'/'.$file,$input);
?>
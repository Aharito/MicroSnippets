<?php
/**
 * FastImagePreviews
 * 
 * Вывод превьюшек в FastImage
 * Работает и в качестве prepare-сниппета для DocLister, и как обычный сниппет
 * 
 * @category snippet
 * @version   0.1
 * @CMS version MODx Evo 7.1.6
 *
 * @xample вызов как prepare
 *    [[DocLister? &thumbSnippet=`sgThumb` &thumbOptions=`{"tv.image":{"small":"250x250","medium":"500x500"}}` &tpl=`@CODE:[+tv.image+] [+tv.image.small+] [+tv.image.medium+]` &tvList=`image` &prepare=`FastImagePreviews`]]
 *
 * @example вызов как обычный сниппет
 *    <img src="[[FastImagePreviews? &input=`[*image*]` &options=`250x250`]]">
 *     
 *
 * @author Pathologic (m@xim.name) доработка Aharito http://aharito.ru 
 * 
 * @TODO: http://modx.im/blog/addons/4533.html#comment35842
**/

if(!defined('MODX_BASE_PATH')){die('What are you doing? Get out of here!');}
	
if (isset($_DocLister) && is_object($_DocLister)) {
    $thumbs = json_decode($_DocLister->getCFGDef('thumbOptions','{}'),true);
    foreach ($thumbs as $key=>$value) {
        if (isset($data[$key])) {
            foreach ($value as $name => $options) {
                $data[$key.'.'.$name] = $modx->runSnippet($_DocLister->getCFGDef('thumbSnippet','sgThumb'),array('input'=>$data[$key],'options'=>$options));
            }
        }
    }
    return $data;
} else {
    return $modx->runSnippet('sgThumb', array('input'=>$input,'options'=>$options));
}

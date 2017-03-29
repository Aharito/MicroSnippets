<?php
/**
 * TVListElementsName
 * Преобразует цифру в значении ТВ в её название для ТВ типа DropDownList, у которого значения записаны текстом в elements (для текущего док-та)
 * У меня он выводил одно из ||Ожидается==1||В наличии==2||Под заказ==3
 *
 * @category snippet
 * @version   0.1
 *
 * @param $tvid - ID или имя TV-параметра
 * @example [[TVListElementsName? &tvid=`55`]]
 *
 * @author Aharito http://aharito.ru
**/

$docid = $modx->documentIdentifier;

$tv = $modx->getTemplateVar($tvid, '*', $docid, $modx->documentObject['published']);
$tv_elements = explode("||", $tv['elements']);	

$tv_array = array();

foreach ( $tv_elements as $element ) {
   $_tv = explode("==", $element);
   $tv_array[$_tv[1]] = $_tv[0];
}

return $tv_array[$tv['value']];

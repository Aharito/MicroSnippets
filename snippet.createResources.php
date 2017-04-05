<?php
if(empty($modx->doc)) {
	include_once(MODX_BASE_PATH."assets/lib/MODxAPI/modResource.php");
	$modx->doc = new modResource($modx);
}

/* Создание в цикле */

for ($i = 1; $i < 48; $i++) {
	$q = "SELECT id,pagetitle,createdon,pub_date,alias FROM ".$modx->getFullTableName("site_content")."WHERE id IN(29,91,35,92,93,116)  ORDER BY createdon DESC";
	$res = $modx->db->query($q);

	while( $row = $modx->db->getRow( $res ) ) {
		$newId = $modx->doc->copy($row['id'])->save();
		$modx->doc->close();

		$modx->doc->edit($newId);

		$modx->doc->set('pagetitle', $row['pagetitle'].' - '.$i);
		$modx->doc->set('alias', $row['alias'].'-'.$i);
		$modx->doc->set('createdon', time() + 87500 * rand(1, 365));
		$modx->doc->set('pub_date', 0);
		$modx->doc->set('titl', $modx->doc->get('titl').' - '.$i);
		$modx->doc->set('h1',  $modx->doc->get('h1').' - '.$i);	
		$modx->doc->save(false, true);
		$modx->doc->close();
	}
}

/* Удаление */
/*
$q = "SELECT id".
	" FROM ".$modx->getFullTableName("site_content").
	" WHERE parent = 24 AND id NOT IN(29,91,35,92,93,116)".
	" ORDER BY createdon DESC";

$ids = $modx->db->getColumn('id', $q);

$modx->doc->toTrash($ids);
*/




// Тест для одного документа
/*$id = 35;
$i = 1;
$newId = $modx->doc->copy($id)->save();
$modx->doc->close();

$modx->doc->edit($newId);

$modx->doc->set('pagetitle', $modx->doc->get('pagetitle').' - '.$i);
$modx->doc->set('alias', substr($modx->doc->get('alias'),0,-2).'-'.$i);
$modx->doc->set('titl', $modx->doc->get('titl').' - '.$i);
$modx->doc->set('h1', $modx->doc->get('h1').' - '.$i);
$newCreat = $modx->doc->get('createdon');
$modx->doc->set('createdon', $newCreat + 87500*$i);
$modx->doc->save();
$modx->doc->close();*/



return;
?>
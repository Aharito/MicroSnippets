<?php
//[[pageHeader? &h1 = `[*h1*]` &h1_alt=`[*pagetitle*]` &h2=`[*h2*]` &h2_alt=`[*longtitle*]`]]

if(!defined('MODX_BASE_PATH')){die('What are you doing? Get out of here!');}

	$out = '';
	
	$h1_alt = !empty($h1_alt) ? $h1_alt : $modx->documentObject['pagetitle'];
	$h1 = !empty($h1) ? $h1 : $h1_alt;

	$out .= '<div class="page-header"><h1>'.$h1.'</h1>';

	if(empty($h2)) {
		if(!empty($h2_alt)) $out .= '<h2 class="h3 text-muted">'.$h2_alt.'</h2>';
	} else {
		$out .= '<h2 class="h3 text-muted">'.$h2.'</h2>';
	}

	$out .= '</div>';
	
return $out;
?>
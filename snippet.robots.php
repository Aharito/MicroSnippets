<?php
	// rofots
	// Отдает нужный robots.txt c https или без
	
if(strpos(MODX_SITE_URL, 'https:') !== FALSE) {
	$out = "User-agent: *
Disallow: /assets/backup/
Disallow: /assets/cache/
Disallow: /assets/docs/
Disallow: /assets/export/
Disallow: /assets/import/
Disallow: /assets/modules/
Disallow: /assets/plugins/
Disallow: /assets/snippets/
Disallow: /assets/packages/ 
Disallow: /assets/user_images/
Disallow: /assets/galleries/
Disallow: /assets/tvs/
Disallow: /install/

Allow: /assets/cache/images/
Allow: /assets/modules/*.css
Allow: /assets/modules/*.js
Allow: /assets/plugins/*.css
Allow: /assets/plugins/*.js
Allow: /assets/snippets/*.css
Allow: /assets/snippets/*.js
Allow: /assets/galleries/*/photo_report_popup/
Allow: /assets/galleries/*/doc_preview_big/
Allow: /assets/user_images/*/1000x500/
Allow: /assets/user_images/*/740x400/

Host: https://antiled-sib.ru
Sitemap: https://antiled-sib.ru/sitemap.xml";
} else {
	$out = "User-agent: *
Disallow: /assets/backup/
Disallow: /assets/cache/
Disallow: /assets/docs/
Disallow: /assets/export/
Disallow: /assets/import/
Disallow: /assets/modules/
Disallow: /assets/plugins/
Disallow: /assets/snippets/
Disallow: /assets/packages/ 
Disallow: /assets/user_images/
Disallow: /assets/galleries/
Disallow: /assets/tvs/
Disallow: /install/

Allow: /assets/cache/images/
Allow: /assets/modules/*.css
Allow: /assets/modules/*.js
Allow: /assets/plugins/*.css
Allow: /assets/plugins/*.js
Allow: /assets/snippets/*.css
Allow: /assets/snippets/*.js
Allow: /assets/galleries/*/photo_report_popup/
Allow: /assets/galleries/*/doc_preview_big/
Allow: /assets/user_images/*/1000x500/
Allow: /assets/user_images/*/740x400/

Host: antiled-sib.ru
Sitemap: http://antiled-sib.ru/sitemap.xml";
}

return $out;

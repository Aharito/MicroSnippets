<?php
/**
 * site_url
 * Вместо системной переменной [(site_url)]
 *
 * @category snippet
 * @internal @modx_category SEO
 * @example <base href="[!site_url!]">
 */

if(!defined('MODX_BASE_PATH')){die('What are you doing? Get out of here!');}

return MODX_SITE_URL;
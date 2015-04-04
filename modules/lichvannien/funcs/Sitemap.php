<?php

/**
 * @Project NUKEVIET 4.x
 * @Author Since1993 (ct17.NguyenLuongNam@gmail.com)
 * @Copyright (C) 2015 Since1993. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Sat, 04 Apr 2015 04:24:47 GMT
 */

if ( ! defined( 'NV_IS_MOD_LICHVANNIEN' ) ) die( 'Stop!!!' );

$url = array();

$cacheFile = NV_LANG_DATA . '_Sitemap_' . NV_CACHE_PREFIX . '.cache';
$pa = NV_CURRENTTIME - 7200;

if( ( $cache = nv_get_cache( $module_name, $cacheFile ) ) != false and filemtime( NV_ROOTDIR . '/' . NV_CACHEDIR . '/' . $module_name . '/' . $cacheFile ) >= $pa )
{
    $url = unserialize( $cache );
}
else
{
    /*$sql = 'SELECT alias, add_time FROM ' . NV_PREFIXLANG . '_' . $module_data . ' WHERE status=1';
    $result = $db->query( $sql );
    while ( list( $alias, $publtime ) = $result->fetch( 3 ) )
    {
        $url[] = array(
            'link' => NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=' . $alias,
            'publtime' => $publtime
        );
    }*/

    $cache = serialize($url);
    nv_set_cache( $module_name, $cacheFile, $cache );
}

nv_xmlSitemap_generate( $url );
die();
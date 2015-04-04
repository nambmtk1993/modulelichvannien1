<?php

/**
 * @Project NUKEVIET 4.x
 * @Author Since1993 (ct17.NguyenLuongNam@gmail.com)
 * @Copyright (C) 2015 Since1993. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Sat, 04 Apr 2015 04:24:47 GMT
 */

if ( ! defined( 'NV_IS_MOD_RSS' ) ) die( 'Stop!!!' );

$rssarray = array();

/*$result2 = $db->query( 'SELECT catid, parentid, title, alias, numsubcat, subcatid FROM ' . NV_PREFIXLANG . '_' . $module_data . '_cat ORDER BY weight' );
while ( list( $catid, $parentid, $title, $alias, $numsubcat, $subcatid ) = $result2->fetch( 3 ) )
{
    $rssarray[$catid] = array(
        'catid' => $catid, 'parentid' => $parentid, 'title' => $title, 'alias' => $alias, 'numsubcat' => $numsubcat, 'subcatid' => $subcatid, 'link' => NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_title . '&amp;' . NV_OP_VARIABLE . '=rss/' . $alias
    );
}*/

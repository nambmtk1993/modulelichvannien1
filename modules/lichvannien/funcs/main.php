<?php

/**
 * @Project NUKEVIET 4.x
 * @Author Since1993 (ct17.NguyenLuongNam@gmail.com)
 * @Copyright (C) 2015 Since1993. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Sat, 04 Apr 2015 04:24:47 GMT
 */

if ( ! defined( 'NV_IS_MOD_LICHVANNIEN' ) ) die( 'Stop!!!' );

$page_title = $module_info['custom_title'];
$key_words = $module_info['keywords'];

$array_data = array();



$contents = nv_theme_lichvannien_main( $array_data );

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme( $contents );
include NV_ROOTDIR . '/includes/footer.php';

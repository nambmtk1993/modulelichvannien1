<?php

/**
 * @Project NUKEVIET 4.x
 * @Author Since1993 (ct17.NguyenLuongNam@gmail.com)
 * @Copyright (C) 2015 Since1993. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Sat, 04 Apr 2015 04:24:47 GMT
 */

if ( ! defined( 'NV_IS_MOD_LICHVANNIEN' ) ) die( 'Stop!!!' );

/**
 * nv_theme_lichvannien_main()
 * 
 * @param mixed $array_data
 * @return
 */
function nv_theme_lichvannien_main ( $array_data )
{
    global $global_config, $module_name, $module_file, $lang_module, $module_config, $module_info, $op;

    $xtpl = new XTemplate( $op . '.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_file );
    $xtpl->assign( 'LANG', $lang_module );

    

    $xtpl->parse( 'main' );
    return $xtpl->text( 'main' );
}

/**
 * nv_theme_lichvannien_year()
 * 
 * @param mixed $array_data
 * @return
 */
function nv_theme_lichvannien_year ( $array_data )
{
    global $global_config, $module_name, $module_file, $lang_module, $module_config, $module_info, $op;

    $xtpl = new XTemplate( $op . '.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_file );
    $xtpl->assign( 'LANG', $lang_module );

    

    $xtpl->parse( 'main' );
    return $xtpl->text( 'main' );
}

/**
 * nv_theme_lichvannien_month()
 * 
 * @param mixed $array_data
 * @return
 */
function nv_theme_lichvannien_month ( $array_data )
{
    global $global_config, $module_name, $module_file, $lang_module, $module_config, $module_info, $op;

    $xtpl = new XTemplate( $op . '.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_file );
    $xtpl->assign( 'LANG', $lang_module );

    

    $xtpl->parse( 'main' );
    return $xtpl->text( 'main' );
}
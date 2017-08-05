//<?php

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	exit;
}

class hook100 extends _HOOK_CLASS_
{

/* !Hook Data - DO NOT REMOVE */
public static function hookData() {
 return array_merge_recursive( array (
  'settings' => 
  array (
    0 => 
    array (
      'selector' => '#elSettingsTabs > div.ipsColumns.ipsColumns_collapsePhone.ipsColumns_bothSpacing > div.ipsColumn.ipsColumn_wide > div.ipsSideMenu > ul.ipsSideMenu_list',
      'type' => 'add_inside_end',
      'content' => '{template="customGroupNameTab" group="plugins" location="global" app="core" params="$tab"}',
    ),
  ),
), parent::hookData() );
}
/* End Hook Data */


}

//<?php

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	exit;
}

class hook66 extends _HOOK_CLASS_
{

/* !Hook Data - DO NOT REMOVE */
public static function hookData() {
 return array_merge_recursive( array (
  'profileHeader' => 
  array (
    0 => 
    array (
      'selector' => '#elProfileHeader > div.ipsColumns.ipsColumns_collapsePhone > div.ipsColumn.ipsColumn_fluid > div.ipsPos_left.ipsPad.cProfileHeader_name.ipsType_normal > span > span.ipsPageHead_barText',
      'type' => 'replace',
      'content' => '<span class="ipsPageHead_barText">
{template="customgroupname" group="plugins" location="global" app="core" params="$member, true"}
</span>',
    ),
  ),
), parent::hookData() );
}
/* End Hook Data */


}

//<?php

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	exit;
}

class hook65 extends _HOOK_CLASS_
{

/* !Hook Data - DO NOT REMOVE */
public static function hookData() {
 return array_merge_recursive( array (
  'hovercard' => 
  array (
    0 => 
    array (
      'selector' => 'div.ipsPad_half.cUserHovercard > div.ipsPageHead_special > p.ipsType_reset.ipsType_normal > span.ipsPageHead_barText_small',
      'type' => 'replace',
      'content' => '<span class="ipsPageHead_barText_small">
{template="customgroupname" group="plugins" location="global" app="core" params="$member, true"}
</span>',
    ),
  ),
), parent::hookData() );
}
/* End Hook Data */


}

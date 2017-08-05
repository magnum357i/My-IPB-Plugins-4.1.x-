//<?php

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	exit;
}

class hook89 extends _HOOK_CLASS_
{

/* !Hook Data - DO NOT REMOVE */
public static function hookData() {
 return array_merge_recursive( array (
  'memberRow' => 
  array (
    0 => 
    array (
      'selector' => 'li.ipsGrid_span3.ipsStreamItem.ipsStreamItem_contentBlock.cTopMembers_member.ipsAreaBackground_reset.ipsPad.ipsType_center > div.ipsStreamItem_container > div.ipsStreamItem_header.ipsSpacer_top.ipsSpacer_half > p.ipsType_reset.ipsType_medium',
      'type' => 'replace',
      'content' => '<p class="ipsType_reset ipsType_medium">{template="customgroupname" group="plugins" location="global" app="core" params="$member, false"}</p>',
    ),
  ),
), parent::hookData() );
}
/* End Hook Data */


}

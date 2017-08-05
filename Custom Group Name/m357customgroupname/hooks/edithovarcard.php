//<?php

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	exit;
}

class hook103 extends _HOOK_CLASS_
{

/* !Hook Data - DO NOT REMOVE */
public static function hookData() {
 return array_merge_recursive( array (
  'hovercard' => 
  array (
    0 => 
    array (
      'selector' => 'div.ipsPad_half.cUserHovercard > div.ipsPageHead_special > p.ipsType_reset.ipsType_normal',
      'type' => 'replace',
      'content' => '<p class="ipsType_reset ipsType_normal">
{{if !empty($member->m357_custom_group_name)}}
{expression="\IPS\Member\Group::load( $member->member_group_id )->formattedName" raw="true"} <i class="fa fa-angle-right"></i> {expression="$member->group[\'prefix\']" raw="true"}{$member->m357_custom_group_name}{expression="$member->group[\'suffix\']" raw="true"}
{{else}}
{expression="\IPS\Member\Group::load( $member->member_group_id )->formattedName" raw="true"}
{{endif}}
</p>',
    ),
  ),
), parent::hookData() );
}
/* End Hook Data */


}

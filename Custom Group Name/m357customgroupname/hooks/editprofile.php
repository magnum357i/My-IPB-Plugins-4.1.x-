//<?php

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	exit;
}

class hook104 extends _HOOK_CLASS_
{

/* !Hook Data - DO NOT REMOVE */
public static function hookData() {
 return array_merge_recursive( array (
  'profileHeader' => 
  array (
    0 => 
    array (
      'selector' => '#elProfileHeader > div.ipsColumns.ipsColumns_collapsePhone > div.ipsColumn.ipsColumn_fluid > div.ipsPos_left.ipsPad.cProfileHeader_name > span',
      'type' => 'replace',
      'content' => '<div style="display: flex;">
{{if !empty($member->m357_custom_group_name)}}
{expression="\IPS\Member\Group::load( $member->member_group_id )->formattedName" raw="true"}&nbsp;<i class="fa fa-angle-right"></i>&nbsp;{expression="$member->group[\'prefix\']" raw="true"}{$member->m357_custom_group_name}{expression="$member->group[\'suffix\']" raw="true"}
{{else}}
{expression="\IPS\Member\Group::load( $member->member_group_id )->formattedName" raw="true"}
{{endif}}
</div>',
    ),
  ),
), parent::hookData() );
}
/* End Hook Data */


}

//<?php

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	exit;
}

class hook102 extends _HOOK_CLASS_
{

/* !Hook Data - DO NOT REMOVE */
public static function hookData() {
 return array_merge_recursive( array (
  'postContainer' => 
  array (
    0 => 
    array (
      'selector' => 'article[itemtype=\'http://schema.org/Answer\'] > aside.ipsComment_author.cAuthorPane.ipsColumn.ipsColumn_medium > ul.cAuthorPane_info.ipsList_reset > li.cAuthorPane_photo + li',
      'type' => 'replace',
      'content' => '<li class="customgroupname">{expression="$comment->author()->group[\'prefix\']" raw="true"}{$comment->author()->m357_custom_group_name}{expression="$comment->author()->group[\'suffix\']" raw="true"}</li>',
    ),
  ),
), parent::hookData() );
}
/* End Hook Data */


}

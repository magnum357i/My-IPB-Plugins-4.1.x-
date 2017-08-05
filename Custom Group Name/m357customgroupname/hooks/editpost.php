//<?php

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	exit;
}

class hook85 extends _HOOK_CLASS_
{

/* !Hook Data - DO NOT REMOVE */
public static function hookData() {
 return array_merge_recursive( array (
  'postContainer' => 
  array (
    0 => 
    array (
      'selector' => 'article > aside.ipsComment_author.cAuthorPane.ipsColumn.ipsColumn_medium.ipsResponsive_hidePhone > ul.cAuthorPane_info.ipsList_reset > li.cAuthorPane_photo + li',
      'type' => 'replace',
      'content' => '<li>{template="customgroupname" group="plugins" location="global" app="core" params="$comment->author(), false"}</li>',
    ),
  ),
), parent::hookData() );
}
/* End Hook Data */


}

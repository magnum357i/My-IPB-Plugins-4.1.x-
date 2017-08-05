//<?php

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	exit;
}

class hook84 extends _HOOK_CLASS_
{

	/**
	 * Process Form
	 *
	 * @param	\IPS\Helpers\Form		$form	The form
	 * @param	\IPS\Member				$member	Existing Member
	 * @return	void
	 */
	public function process( &$form, $member )
	{
      	$form->addHeader('m357_custom_group_name_profile_header');
      	$form->add( new \IPS\Helpers\Form\Text( 'm357_custom_group_name', $member->m357_custom_group_name ) );
      	parent::process($form, $member);
		
	}  
  
	/**
	 * Save
	 *
	 * @param	array				$values	Values from form
	 * @param	\IPS\Member			$member	The member
	 * @return	void
	 */
	public function save( $values, &$member )
	{
      	parent::save($values, $member);
		$member->m357_custom_group_name = $values['m357_custom_group_name'];
	}

}

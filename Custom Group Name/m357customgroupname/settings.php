//<?php

$form->add( new \IPS\Helpers\Form\Select( 'm357_customgroupname_who_can_edit', \IPS\Settings::i()->m357_customgroupname_who_can_edit ? explode( ",", \IPS\Settings::i()->m357_customgroupname_who_can_edit ) : 0, FALSE, array( 'options' => \IPS\Member\Group::groups(), 'parse' => 'normal', 'multiple' => TRUE, 'unlimited' => 0, 'unlimitedLang' => 'all' ), NULL, NULL, NULL, 'm357_customgroupname_who_can_edit' ) );


if ( $values = $form->values() )
{
	$form->saveAsSettings();
	return TRUE;
}

return $form;
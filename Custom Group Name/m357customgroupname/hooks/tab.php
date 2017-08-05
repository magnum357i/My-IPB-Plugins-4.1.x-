//<?php

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	exit;
}

class hook99 extends _HOOK_CLASS_
{
		
	protected function _customgroupname()
	{
		try
		{
			try
			{
				try
				{
					try
					{
						try
						{
							try
							{
				
								$member = \IPS\Member::loggedIn();
								$form = new \IPS\Helpers\Form;
												
			                  $form->add( new \IPS\Helpers\Form\Text( 'm357_custom_group_name', $member->m357_custom_group_name ) );
			                 
												      
			
			                  	if ( $values = $form->values() )
								{
									$member->m357_custom_group_name = $values['m357_custom_group_name'];
									$member->save();
								}
			                  
								
				              	return \IPS\Theme::i()->getTemplate( 'plugins', 'core', 'global' )->settingsCustomGroupName( $form );
							}
							catch ( \RuntimeException $e )
							{
								if ( method_exists( get_parent_class(), __FUNCTION__ ) )
								{
									return call_user_func_array( 'parent::' . __FUNCTION__, func_get_args() );
								}
								else
								{
									throw $e;
								}
							}
						}
						catch ( \RuntimeException $e )
						{
							if ( method_exists( get_parent_class(), __FUNCTION__ ) )
							{
								return call_user_func_array( 'parent::' . __FUNCTION__, func_get_args() );
							}
							else
							{
								throw $e;
							}
						}
					}
					catch ( \RuntimeException $e )
					{
						if ( method_exists( get_parent_class(), __FUNCTION__ ) )
						{
							return call_user_func_array( 'parent::' . __FUNCTION__, func_get_args() );
						}
						else
						{
							throw $e;
						}
					}
				}
				catch ( \RuntimeException $e )
				{
					if ( method_exists( get_parent_class(), __FUNCTION__ ) )
					{
						return call_user_func_array( 'parent::' . __FUNCTION__, func_get_args() );
					}
					else
					{
						throw $e;
					}
				}
			}
			catch ( \RuntimeException $e )
			{
				if ( method_exists( get_parent_class(), __FUNCTION__ ) )
				{
					return call_user_func_array( 'parent::' . __FUNCTION__, func_get_args() );
				}
				else
				{
					throw $e;
				}
			}
		}
		catch ( \RuntimeException $e )
		{
			if ( method_exists( get_parent_class(), __FUNCTION__ ) )
			{
				return call_user_func_array( 'parent::' . __FUNCTION__, func_get_args() );
			}
			else
			{
				throw $e;
			}
		}
	}

}

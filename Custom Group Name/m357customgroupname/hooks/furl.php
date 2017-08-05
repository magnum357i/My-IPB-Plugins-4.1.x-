//<?php

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	exit;
}

class hook101 extends _HOOK_CLASS_
{


	static public function furlDefinition( $revert=false )
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
											
							$furls = parent::furlDefinition( $revert );
												      
					      	if ( !isset( $furls['settings_customgroupname'] ) ) {
												
							$furls['settings_cover'] = array(
							'friendly'  => 'settings/customgroupname',
							'real'      => 'app=core&module=system&controller=settings&area=customgroupname'
							);
												
				          	return $furls;
												          
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

<?php
/**
 * @brief		latestattachments Widget
 * @author		<a href='https://www.invisioncommunity.com'>Invision Power Services, Inc.</a>
 * @copyright	(c) Invision Power Services, Inc.
 * @license		https://www.invisioncommunity.com/legal/standards/
 * @package		Invision Community
 * @subpackage	m357latestattachments
 * @since		03 Aug 2017
 */

namespace IPS\plugins\m357latestattachments\widgets;

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	header( ( isset( $_SERVER['SERVER_PROTOCOL'] ) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0' ) . ' 403 Forbidden' );
	exit;
}

/**
 * latestattachments Widget
 */
class _latestattachments extends \IPS\Widget\StaticCache
{
	/**
	 * @brief	Widget Key
	 */
	public $key = 'latestattachments';
	
	/**
	 * @brief	App
	 */
	public $app = '';
		
	/**
	 * @brief	Plugin
	 */
	public $plugin = '12';
	
	/**
	 * Initialise this widget
	 *
	 * @return void
	 */ 
	public function init()
	{
		// Use this to perform any set up and to assign a template that is not in the following format:
		// $this->template( array( \IPS\Theme::i()->getTemplate( 'widgets', $this->app, 'front' ), $this->key ) );
		// If you are creating a plugin, uncomment this line:
		// $this->template( array( \IPS\Theme::i()->getTemplate( 'plugins', 'core', 'global' ), $this->key ) );
		// And then create your template at located at plugins/<your plugin>/dev/html/latestattachments.phtml
		
		
		parent::init();
		$this->template( array( \IPS\Theme::i()->getTemplate( 'plugins', 'core', 'global' ), $this->key ) );
	}
	
	/**
	 * Specify widget configuration
	 *
	 * @param	null|\IPS\Helpers\Form	$form	Form object
	 * @return	null|\IPS\Helpers\Form
	 */
	public function configuration( &$form=null )
	{
 		if ( $form === null )
		{
	 		$form = new \IPS\Helpers\Form;
 		}

		$form->add( new \IPS\Helpers\Form\Text( 'latestattachments_title', isset( $this->configuration['latestattachments_title'] ) ? $this->configuration['latestattachments_title'] : 'Son Dosya Ekleri', FALSE, array('maxItems' => 10, 'stackFieldType'=>'Text','removeEmptyValues'=>true)));

		$form->add( new \IPS\Helpers\Form\Stack( 'latestattachments_keywords', isset( $this->configuration['latestattachments_keywords'] ) ? $this->configuration['latestattachments_keywords'] : '', FALSE, array('maxItems' => 5, 'stackFieldType'=>'Text','removeEmptyValues'=>true)));

		$form->add( new \IPS\Helpers\Form\Stack( 'latestattachments_exts', isset( $this->configuration['latestattachments_exts'] ) ? $this->configuration['latestattachments_exts'] : '', FALSE, array('maxItems' => 10, 'stackFieldType'=>'Text','removeEmptyValues'=>true)));

		$form->add( new \IPS\Helpers\Form\Number( 'latestattachments_items', isset( $this->configuration['latestattachments_items'] ) ? $this->configuration['latestattachments_items'] : '10', FALSE, array( 'max' => '1', 'max' => '20' ) ));

		$form->add( new \IPS\Helpers\Form\Node( 'latestattachments_forums', isset($this->configuration['latestattachments_forums']) ? $this->configuration['latestattachments_forums'] : 0, FALSE, array(
			'class'           => '\IPS\forums\Forum',
			'permissionCheck' => 'view',
			'multiple'        => true,
			'zeroVal'         => 'all',
		) ) );

 		return $form;

 	}

 	 /**
 	 * Ran before saving widget configuration
 	 *
 	 * @param	array	$values	Values from form
 	 * @return	array
 	 */
 	public function preConfig( $values )
 	{

 		if(is_array( $values['latestattachments_forums'])) {

			$values['latestattachments_forums'] = array_keys($values['latestattachments_forums']);

		}

 		return $values;

 	}

	/**
	 * Render a widget
	 *
	 * @return	string
	 */
	public function render()
	{

		$this->configuration['latestattachments_title']    = isset($this->configuration['latestattachments_title'] )    ? $this->configuration['latestattachments_title']    : 'Son Dosya Ekleri';
		$this->configuration['latestattachments_exts']     = isset($this->configuration['latestattachments_exts'] )     ? $this->configuration['latestattachments_exts']     : '';
		$this->configuration['latestattachments_keywords'] = isset($this->configuration['latestattachments_keywords'] ) ? $this->configuration['latestattachments_keywords'] : '';
		$this->configuration['latestattachments_items']    = isset($this->configuration['latestattachments_items'] )    ? $this->configuration['latestattachments_items']    : '10';
		$this->configuration['latestattachments_forums']   = isset($this->configuration['latestattachments_forums'] )   ? $this->configuration['latestattachments_forums']   : 0;

		$where = array();

		$where[] = array('core_attachments_map.location_key=?', 'forums_Forums');

		if ($this->configuration['latestattachments_exts']) {

			$where[] = array("core_attachments.attach_ext IN ('" . implode( "','", $this->configuration['latestattachments_exts'] ) . "')");

		}

		if ($this->configuration['latestattachments_keywords']) {

			$keyword_sentence = "";
			$keyword_counter  = 0;
			$keyword_count    = count($this->configuration['latestattachments_keywords']);

			foreach ($this->configuration['latestattachments_keywords'] as $keyword) {

				$keyword_counter++;

				if ($keyword_counter != $keyword_count) {

					$keyword_sentence .= "core_attachments.attach_file LIKE '%" . $keyword . "%' OR ";

				}
				else {

					$keyword_sentence .= "core_attachments.attach_file LIKE '%" . $keyword . "%'";

				}

			}

			$where[] = array($keyword_sentence);

		}

		if ($this->configuration['latestattachments_forums']) {

			$where[] = array("forums_topics.forum_id IN ('" . implode( "','", $this->configuration['latestattachments_forums'] ) . "')");

		}


		$attachs = \IPS\Db::i()->select('*', 'core_attachments_map', $where, 'core_attachments_map.attachment_id DESC', $this->configuration['latestattachments_items'], NULL, NULL, \IPS\Db::SELECT_SQL_CALC_FOUND_ROWS)
		->join('core_attachments', 'core_attachments_map.attachment_id=core_attachments.attach_id')
		->join('forums_topics', 'forums_topics.tid=core_attachments_map.id1');

		return $this->output( $this->configuration['latestattachments_title'],  $attachs );
		// Use $this->output( $foo, $bar ); to return a string generated by the template set in init() or manually added via $widget->template( $callback );
		// Note you MUST route output through $this->output() rather than calling \IPS\Theme::i()->getTemplate() because of the way widgets are cached
	}
}
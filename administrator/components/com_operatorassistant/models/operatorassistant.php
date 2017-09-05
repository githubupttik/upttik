<?php

/*
 * @license    GNU General Public License version 2 or later; see LICENSE
*/

defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.model');

class OperatorAssistantModelOperatorAssistant extends JModelLegacy
{

  function __construct()
	{
		parent::__construct();
	}
      
	function getItem()
	{
		if (empty( $this->_data )) {
			$query = ' SELECT * FROM #__operatorassistant_params ';
			$this->_db->setQuery( $query );
			$this->_data = $this->_db->loadObject();
		}
		return $this->_data;
	}
	
	function saveItem($jinput)
	{
		  $db = JFactory::getDBO();
		  
      $id = $jinput->get('id', '', '');
      $mail = $jinput->get('mail', '', '');
      $directory = $jinput->get('directory', '', '');
      $frequency = $jinput->get('frequency', '', '');
      $enabled = $jinput->get('enabled', '', '');
      $title = $jinput->get('title', '', '');
      
      $row = new JObject();
      $row->id = $id;
      $row->mail = $mail;
      $row->directory = $directory;
      $row->frequency = $frequency;
      $row->enabled = $enabled;
      $row->title = $title;
      
      $db->updateObject('#__operatorassistant_params', $row,'id');
	}
	
	
}



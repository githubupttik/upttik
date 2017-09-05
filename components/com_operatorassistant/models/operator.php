<?php

/*
 * @license    GNU General Public License version 2 or later; see LICENSE
*/

defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.modelitem');
 
class OperatorAssistantModelOperator extends JModelItem
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
          
}
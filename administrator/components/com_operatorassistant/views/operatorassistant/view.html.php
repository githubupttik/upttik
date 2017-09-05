<?php

/*
 * @license    GNU General Public License version 2 or later; see LICENSE
*/

defined('_JEXEC') or die('Restricted access');
jimport( 'joomla.application.component.view');

class OperatorAssistantViewOperatorAssistant extends JViewLegacy
{
    function display($tpl = null)
    {
        $this->addToolBar();
        $this->setDocument();
        
        $jinput = JFactory::getApplication()->input;
        $task = $jinput->get('task', '', '');
        
        if ($task == 'save') {
          $model = $this->getModel();
          $model->saveItem($jinput);
        }
        
        $this->item = $this->get('Item');
        parent::display($tpl);
    }
    
    protected function addToolBar() 
    {
            JToolBarHelper::title(JText::_('COM_OPERATORASSISTANT_MANAGER'), 'operatorassistant');
    }
    
    protected function setDocument() 
    {
            $document = JFactory::getDocument();
            $document->setTitle(JText::_('COM_OPERATORASSISTANT_ADMINISTRATION'));
    }
}
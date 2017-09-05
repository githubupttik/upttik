<?php

/*
 * @license    GNU General Public License version 2 or later; see LICENSE
*/

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');
 
class OperatorAssistantViewOperator extends JViewLegacy
{
    // Overwriting JView display method
    function display($tpl = null) 
    {
        // Assign data to the view
        $this->msg = 'Hello World';

        // Display the view
        parent::display($tpl);
    }
}
<?php

/*
 * @license    GNU General Public License version 2 or later; see LICENSE
*/

// No direct access
defined('_JEXEC') or die('Restricted access');
// Require the base controller
jimport('joomla.application.component.controller');
// Create the controller
$controller = JControllerLegacy::getInstance('OperatorAssistant');
// Perform the Request task
$controller->execute( JRequest::getCmd('task') );
// Redirect if set by the controller
$controller->redirect(); 
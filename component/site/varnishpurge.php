<?php
/**
 * @version     1.0.0
 * @package     com_varnishpurge
 * @copyright   Copyright (C) 2015. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      AlchemistHQ <info@alchemisthq.com> - http://www.alchemisthq.com
 */

defined('_JEXEC') or die;

// Include dependancies
jimport('joomla.application.component.controller');

// Execute the task.
$controller	= JControllerLegacy::getInstance('Varnishpurge');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();

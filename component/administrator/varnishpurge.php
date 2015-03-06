<?php
/**
 * @version     1.0.0
 * @package     com_varnishpurge
 * @copyright   Copyright (C) 2015. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      AlchemistHQ <info@alchemisthq.com> - http://www.alchemisthq.com
 */


// no direct access
defined('_JEXEC') or die;

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_varnishpurge')) 
{
	throw new Exception(JText::_('JERROR_ALERTNOAUTHOR'));
}

// Include dependancies
jimport('joomla.application.component.controller');

$controller	= JControllerLegacy::getInstance('Varnishpurge');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();

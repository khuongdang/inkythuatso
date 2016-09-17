<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Gocsangtao
 * @author     kent <kent.dang1706t@gmail.com>
 * @copyright  Bản quyền (C) 2014. Các quyền đều được bảo vệ.
 * @license    bản quyền mã nguồn mở GNU phiên bản 2
 */

// No direct access
defined('_JEXEC') or die;

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_gocsangtao'))
{
	throw new Exception(JText::_('JERROR_ALERTNOAUTHOR'));
}

// Include dependancies
jimport('joomla.application.component.controller');

JLoader::registerPrefix('Gocsangtao', JPATH_COMPONENT_ADMINISTRATOR);

$controller = JControllerLegacy::getInstance('Gocsangtao');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();

<?php
/**
 * @package      ITPGoogleSearch 
 * @subpackage   Components
 * @author       Todor Iliev
 * @copyright    Copyright (C) 2013 Todor Iliev <todor@itprism.com>. All rights reserved.
 * @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */

// No direct access.
defined('_JEXEC') or die;

require_once JPATH_COMPONENT_ADMINISTRATOR . DIRECTORY_SEPARATOR . "libraries" . DIRECTORY_SEPARATOR ."init.php";

jimport('joomla.application.component.controller');

$app = JFactory::getApplication();
/** @var $app JSite **/

$controller = JControllerLegacy::getInstance('ITPGoogleSearch');
$controller->execute($app->input->getCmd('task'));
$controller->redirect();
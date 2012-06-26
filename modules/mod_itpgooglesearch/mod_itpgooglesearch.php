<?php
/**
 * @package      ITPrism Modules
 * @subpackage   ITPGoogleSearch
 * @author       Todor Iliev
 * @copyright    Copyright (C) 2010 Todor Iliev <todor.iliev@itprism.co.uk>. All rights reserved.
 * @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * ITPGoogleSearch is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

defined('_JEXEC') or die('Restricted access'); // no direct access 

$moduleClassSfx = htmlspecialchars($params->get('moduleclass_sfx'));
$phrase         = htmlentities(JRequest::getVar("q", "", "get"), ENT_QUOTES, "UTF-8");

require JModuleHelper::getLayoutPath('mod_itpgooglesearch', $params->get('layout', 'default'));
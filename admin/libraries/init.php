<?php
/**
 * @package      ITPrism Libraries
 * @subpackage   ITPrism Initializators
 * @author       Todor Iliev
 * @copyright    Copyright (C) 2010 Todor Iliev <todor@itprism.com>. All rights reserved.
 * @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * ITPrism Library is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

// no direct access
defined('_JEXEC') or die;

jimport('joomla.log.loggers.formattedtext');

if(!defined("ITPGOOGLESEARCH_COMPONENT_ADMINISTRATOR")) {
    define("ITPGOOGLESEARCH_COMPONENT_ADMINISTRATOR", JPATH_ADMINISTRATOR . DS. "components" . DS . "com_itpgooglesearch");
}

// Register Component libraries
JLoader::register("ItpGoogleSearchVersion", ITPGOOGLESEARCH_COMPONENT_ADMINISTRATOR . DS . "libraries" . DS . "version.php");

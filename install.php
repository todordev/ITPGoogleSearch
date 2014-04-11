<?php
/**
 * @package      ITPGoogleSearch
 * @subpackage   Components
 * @author       Todor Iliev
 * @copyright    Copyright (C) 2014 Todor Iliev <todor@itprism.com>. All rights reserved.
 * @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */

// no direct access
defined('_JEXEC') or die;

/**
 * Install script for ITPGoogleSearch component
 */
class pkg_itpGoogleSearchInstallerScript {

    /**
     * Method to install the component.
     *
     * @param $parent
     * @return void
     */
    public function install($parent) {
    }

    /**
     * Method to uninstall the component.
     *
     * @param $parent
     * @return void
     */
    public function uninstall($parent) {
    }

    /**
     * Method to update the component.
     *
     * @param $parent
     * @return void
     */
    public function update($parent) {
    }

    /**
     * Method to run before an install/update/uninstall method.
     *
     * @param $type
     * @param $parent
     * @return void
     */
    public function preflight($type, $parent) {
    }

    /**
     * Method to run after an install/update/uninstall method.
     *
     * @param $type
     * @param $parent
     *
     * @return void
     */
    public function postflight($type, $parent) {
        
        if(!defined("ITPGOOGLESEARCH_PATH_COMPONENT_ADMINISTRATOR")) {
            define("ITPGOOGLESEARCH_PATH_COMPONENT_ADMINISTRATOR", JPATH_ADMINISTRATOR . DIRECTORY_SEPARATOR . "components" . DIRECTORY_SEPARATOR ."com_itpgooglesearch");
        }
        
        // Register Install Helper
        JLoader::register("ITPGoogleSearchInstallHelper", ITPGOOGLESEARCH_PATH_COMPONENT_ADMINISTRATOR . DIRECTORY_SEPARATOR . "helpers" . DIRECTORY_SEPARATOR ."install.php");
        
        // Start table with the information
        ITPGoogleSearchInstallHelper::startTable();
        
        // Requirements
        ITPGoogleSearchInstallHelper::addRowHeading(JText::_("COM_ITPGOOGLESEARCH_MINIMUM_REQUIREMENTS"));
        
        // Display result about verification Magic Quotes
        $title  = JText::_("COM_ITPGOOGLESEARCH_MAGIC_QUOTES");
        $info   = "";
        if( get_magic_quotes_gpc() ) {
            $info   = JText::_("COM_ITPGOOGLESEARCH_MAGIC_QUOTES_INFO");
            $result = array("type" => "important", "text" => JText::_("JON"));
        } else {
            $result = array("type" => "success"  , "text" => JText::_("JOFF"));
        }
        ITPGoogleSearchInstallHelper::addRow($title, $result, $info);

        // Display result about PHP version.
        $title  = JText::_("COM_ITPGOOGLESEARCH_PHP_VERSION");
        $info   = "";
        if (version_compare(PHP_VERSION, '5.3.0') < 0) {
            $result = array("type" => "important", "text" => JText::_("COM_ITPGOOGLESEARC_WARNING"));
        } else {
            $result = array("type" => "success", "text" => JText::_("JYES"));
        }
        ITPGoogleSearchInstallHelper::addRow($title, $result, $info);

        // Installed extensions
        ITPGoogleSearchInstallHelper::addRowHeading(JText::_("COM_ITPGOOGLESEARCH_INSTALLED_EXTENSIONS"));
        
        // ITPGoogleSearch Module
        $result = array("type" => "success"  , "text" => JText::_("COM_ITPGOOGLESEARCH_INSTALLED"));
        ITPGoogleSearchInstallHelper::addRow(JText::_("COM_ITPGOOGLESEARCH_MODULE_GOOGLE_SEARCH"), $result, JText::_("COM_ITPGOOGLESEARCH_MODULE"));
        
        // End table with the information
        ITPGoogleSearchInstallHelper::endTable();
        
        echo JText::sprintf("COM_ITPGOOGLESEARCH_MESSAGE_REVIEW_SAVE_SETTINGS", JRoute::_("index.php?option=com_itpgooglesearch"));
        
    }
}

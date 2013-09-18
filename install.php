<?php
/**
 * @package      ITPGoogleSearch
 * @subpackage   Components
 * @author       Todor Iliev
 * @copyright    Copyright (C) 2013 Todor Iliev <todor@itprism.com>. All rights reserved.
 * @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */

// no direct access
defined('_JEXEC') or die;

/**
 * Install script for ITPGoogleSearch component
 */
class pkg_itpGoogleSearchInstallerScript {

    /**
     * method to install the component
     *
     * @return void
     */
    public function install($parent) {
    }

    /**
     * method to uninstall the component
     *
     * @return void
     */
    public function uninstall($parent) {
    }

    /**
     * method to update the component
     *
     * @return void
     */
    public function update($parent) {
    }

    /**
     * method to run before an install/update/uninstall method
     *
     * @return void
     */
    public function preflight($type, $parent) {
    }

    /**
     * method to run after an install/update/uninstall method
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

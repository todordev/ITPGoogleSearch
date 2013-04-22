<?php
/**
 * @package      ITPrism Components
 * @subpackage   ITPGoogleSearch
 * @author       Todor Iliev
 * @copyright    Copyright (C) 2010 Todor Iliev <todor@itprism.com>. All rights reserved.
 * @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * ITPGoogleSearch is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

defined('JPATH_BASE') or die;

/**
 * Version information
 *
 * @package     ITPrism Components
 * @subpackage  ITPGoogleSearch
  */
class ItpGoogleSearchVersion {
	
    /**
     * Extension name
     * 
     * @var string
     */
    public $product    = 'ITPGoogleSearch';
    
    /**
     * Main Release Level
     * 
     * @var integer
     */
    public $release    = '2';
    
    /**
     * Sub Release Level
     * 
     * @var integer
     */
    public $devLevel   = '3';
    
    /**
     * Development Status
     * 
     * @var string
     */
    public $devStatus = 'Stable';
    
    /**
     * Release Type
     * 
     * @var integer
     */
    public $releaseType  = 'Lite';
    
    /**
     * Date
     * 
     * @var string
     */
    public $releaseDate= '22-April-2013';
    
    /**
     * License
     * 
     * @var string
     */
    public $license  = '<a href="http://www.gnu.org/copyleft/gpl.html" target="_blank">GNU/GPL</a>';
    
    /**
     * Copyright Text
     * 
     * @var string
     */
    public $copyright  = '&copy; 2010 ITPrism. All rights reserved.';
    
    /**
     * URL
     * 
     * @var string
     */
    public $url        = '<a href="http://itprism.com/free-joomla-extensions/others/google-search-integration" target="_blank">ITPGoogleSearch</a>';
    
    /**
     * URL
     * 
     * @var string
     */
    public $backlink   = '<div style="width:100%; text-align: left; font-size: xx-small;margin: 10px 0;"><a href="http://itprism.com/free-joomla-extensions/others/google-search-integration" target="_blank">Joomla! Google Search</a></div>';
    
    /**
     * Developer
     * 
     * @var string
     */
    public $developer  = '<a href="http://itprism.com" target="_blank">ITPrism</a>';

    /**
     *  Build long format of the version text
     *
     * @return string Long format version
     */
    public function getLongVersion() {
        
    	return 
    	   $this->product .' '. $this->release .'.'. $this->devLevel .' ' . 
    	   $this->devStatus . ' '. $this->releaseDate;
    }
    
    /**
     *  Build medium format of the verion text
     *
     * @return string Medium format version
     */
    public function getMediumVersion() {
        
    	return 
    	   $this->release .'.'. $this->devLevel .' ' . 
    	   $this->releaseType . ' ( ' .$this->devStatus . ' )';
    }   

    /**
     *  Build short format of the version text
     *
     * @return string Short version format
     */
    public function getShortVersion() {
        return $this->release .'.'. $this->devLevel;
    }

}
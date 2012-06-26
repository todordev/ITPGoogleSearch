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

// no direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.view');

class ITPGoogleSearchViewSearch extends JView {

    protected $state = null;
    
    public function display($tpl = null) {
        
        // Initialise variables
        $state          = $this->get('State');
        $this->params   = $state->params;
        $this->phrase   = JRequest::getVar("q","","get");

        $theme          = "google_".$this->params->get("theme", "default").".css";
        
        // Add styles
        $document       = JFactory::getDocument();
        /** @var $document JDocumentHtml **/
        
        // Add component style
        $document->addStyleSheet("//www.google.com/cse/style/look/default.css");
        $document->addStyleSheet(JURI::root() . 'media/com_itpgooglesearch/css/'.$theme);
        
        $this->version = new ItpGoogleSearchVersion();
        parent::display($tpl);
    }
}

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

jimport('joomla.application.component.view');

class ITPGoogleSearchViewSearch extends JViewLegacy {

    protected $state = null;
    
    public function display($tpl = null) {
        
        $app = JFactory::getApplication();
        /** @var $app JSite **/
        
        $state          = $this->get('State');
        $this->params   = $state->params;
        $this->phrase   = $app->getUserStateFromRequest("com_itpgooglesearch.query", "gsquery");

        parent::display($tpl);
        
    }
}

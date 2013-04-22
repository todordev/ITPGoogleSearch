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
defined('_JEXEC') or die();

jimport('joomla.application.component.view');

class ItpGoogleSearchViewCpanel extends JView {
    
    public function display($tpl = null){
        
        JHtml::_('behavior.modal', 'a.modal');
        
        $this->version = new ItpGoogleSearchVersion();
        
        $this->addToolbar();
        parent::display($tpl);
    }
    
    /**
     * Add the page title and toolbar.
     *
     * @since   1.6
     */
    protected function addToolbar(){
        JToolBarHelper::title(JText::_("COM_ITPGOOGLESEARCH_CPANEL_TITLE"), 'itp-properties');
    }

}
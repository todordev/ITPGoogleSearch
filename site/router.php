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

defined('_JEXEC') or die();

/**
 * Method to build Route
 * @param array $query
 */
function ITPGoogleSearchBuildRoute(&$query){
    
    $segments = array();
    
    // get a menu item based on Itemid or currently active
    $app = JFactory::getApplication();
    $menu = $app->getMenu();
    /* @var $menu JMenu */
    
    // we need a menu item.  Either the one specified in the query, or the current active one if none specified
    if(empty($query['Itemid'])){
        $menuItem = $menu->getActive();
    }else{
        $menuItem = $menu->getItem($query['Itemid']);
    }

//var_dump($query);
    if(isset($query['view'])){
        if(empty($query['Itemid'])){
            $attritubes = array("component");
            $values = array("com_itpgooglesearch");
            $menuItems = $menu->getItems($attritubes, $values );
            
            if(!empty($menuItems)) {
                
                foreach ($menuItems as $menuItem) {
                    if(
                    (strcmp("com_itpgooglesearch",$menuItem->query['option']) == 0 ) 
                    AND 
                    (strcmp("search",$menuItem->query['view']) == 0)){
                        break;
                    } else {
                        $menuItem = null;
                    }
                }
                if(!is_null($menuItem)) {
                    $query['Itemid'] = $menuItem->id;
                }

            } else {
                $segments[] = $query['view'];
            }
        }
        
        unset($query['view']);
        
    }
    
    return $segments;
}

/**
 * Method to parse Route
 * @param array $segments
 */
function ITPGoogleSearchParseRoute($segments){
    
    $query = array();
    
    //Get the active menu item.
    $app        = JFactory::getApplication();
    $menu       = $app->getMenu();
    $menuItem   = $menu->getActive();
    
    if(!isset($menuItem)) {
        $query['view']   = $segments[0];
        return $query;
    } 
    
    return $query;
}
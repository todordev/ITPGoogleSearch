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

?>
<div id="itp-cpanel">
    <div class="itp-cpitem">
        <a rel="{handler: 'iframe', size: {x: 875, y: 550}, onClose: function() {}}" href="index.php?option=com_config&amp;view=component&amp;component=com_itpgooglesearch&amp;path=&amp;tmpl=component" class="modal">
            <img src="../media/com_itpgooglesearch/images/settings_48.png" alt="<?php echo JText::_("COM_ITPGOOGLESEARCH_SETTINGS");?>" />
            <span><?php echo JText::_("COM_ITPGOOGLESEARCH_SETTINGS")?></span> 
        </a>
    </div>
</div>
<div id="itp-itprism">
    <a href="http://itprism.com/free-joomla-extensions/others/google-search-integration"  target="_blank" ><img src="../media/com_itpgooglesearch/images/extension_logo.png" alt="<?php echo JText::_("COM_ITPGOOGLESEARCH");?>"/></a>
    <a href="http://itprism.com" title="A Product of ITPrism.com" target="_blank"><img src="../media/com_itpgooglesearch/images/product_of_itprism.png" alt="A Product of ITPrism.com" /></a>
    <p><?php echo JText::_("COM_ITPGOOGLESEARCH_YOUR_VOTE"); ?></p>
    <p><?php echo JText::_("COM_ITPGOOGLESEARCH_SPONSORSHIP"); ?></p>
    <p><?php echo JText::_("COM_ITPGOOGLESEARCH_SUBSCRIPTION"); ?></p>
    <div class="clr"></div>

    <table class="table table-striped">
    <tbody>
        <tr>
            <td><?php echo JText::_("COM_ITPGOOGLESEARCH_INSTALLED_VERSION");?></td>
            <td><?php echo $this->version->getShortVersion();?></td>
        </tr>
        <tr>
            <td><?php echo JText::_("COM_ITPGOOGLESEARCH_RELEASE_DATE");?></td>
            <td><?php echo $this->version->releaseDate?></td>
        </tr>
        <tr>
            <td><?php echo JText::_("COM_ITPGOOGLESEARCH_COPYRIGHT");?></td>
            <td><?php echo $this->version->copyright;?></td>
        </tr>
        <tr>
            <td><?php echo JText::_("COM_ITPGOOGLESEARCH_LICENSE");?></td>
            <td><?php echo $this->version->license;?></td>
        </tr>
    </tbody>
    </table>

</div>
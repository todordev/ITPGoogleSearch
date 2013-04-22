<?php defined('_JEXEC') or die; ?>
<div class="itp-gs<?php echo $moduleClassSfx;?>">
	<form action="<?php echo JRoute::_('index.php?option=com_itpgooglesearch&view=search'); ?>" method="get" accept-charset="utf-8">
        <input name="q" type="text" class="inputbox" placeholder="<?php echo JText::_("MOD_ITPGOOGLESEARCH_SEARCH_FOR"); ?>" value="<?php echo $phrase; ?>" />
        <?php if($params->get("searchButton")) {?>
        <input type="submit" class="button" value="<?php echo JText::_("MOD_ITPGOOGLESEARCH_SEARCH"); ?>" />
        <?php }?>
    </form>
</div>
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

defined('_JEXEC') or die();?>
<div id="cse" style="width: 100%;">Loading</div>
<script src="//www.google.com/jsapi" type="text/javascript"></script>
<script type="text/javascript"> 
  google.load('search', '1', {language : '<?php echo $this->params->get("language");?>'});
  google.setOnLoadCallback(function() {
    var customSearchOptions = {};  
    var customSearchControl = new google.search.CustomSearchControl('<?php echo $this->params->get("search_engine_id");?>', customSearchOptions);
    
    customSearchControl.setResultSetSize(google.search.Search.LARGE_RESULTSET);

    var options = new google.search.DrawOptions();
    <?php if($this->params->get("auto_complete")) {?>
    options.setAutoComplete(true);
    <?php }?>
    customSearchControl.draw('cse', options);
    
    <?php if ( !empty( $this->phrase ) ) { ?>
    customSearchControl.execute("<?php echo addslashes($this->phrase);?>");
    <?php } ?>
    
  }, true);
</script>
<?php echo $this->version->backlink;?>
<?php

/*
 * @license    GNU General Public License version 2 or later; see LICENSE
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

$frequency = $this->item->frequency;
$enabled   =   $this->item->enabled;

?>

  <link rel="stylesheet" href="components/com_operatorassistant/assets/css/style.css" type="text/css" />

  <div id="page-wrap">
            
        <form action="<?php echo JRoute::_('index.php?option=com_operatorassistant'); ?>" method="post">
            
            <input type="hidden" id="id" name="id" value="<?php echo $this->item->id ?>" />
            
            <div class="input-wrap checkbox">
                <label for="servizio"><?php echo JText::_('com_operatorassistant_SERVICE_ENABLED'); ?></label>
                <input type="checkbox" id="enabled" name="enabled" <?php if ($enabled == '1') echo 'checked' ?> value="1" />
            </div>
            <div class="option-wrap">
                <label for="intervallo"><?php echo JText::_('com_operatorassistant_FREQUENCY'); ?></label>
                <select name="frequency" id="frequency" >
                    <option value="5"  <?php if ($frequency==5)  echo 'selected' ?> >5</option>
                    <option value="10" <?php if ($frequency==10) echo 'selected' ?> >10</option>
                    <option value="15" <?php if ($frequency==15) echo 'selected' ?> >15</option>
                    <option value="20" <?php if ($frequency==20) echo 'selected' ?> >20</option>
                    <option value="25" <?php if ($frequency==25) echo 'selected' ?> >25</option>
                </select>
            </div>
            <div class="input-wrap text required">
                <label for="path"><?php echo JText::_('com_operatorassistant_DIRECTORY_CHAT'); ?></label>
                <input type="text" id="directory" name="directory" value="<?php echo $this->item->directory ?>" />
            </div>
            <div class="input-wrap text required">
                <label for="mail"><?php echo JText::_('com_operatorassistant_MAIL'); ?></label>
                <input type="text" id="mail" name="mail" value="<?php echo $this->item->mail ?>" />
            </div>
            <div class="input-wrap text required">
                <label for="title"><?php echo JText::_('com_operatorassistant_TITLE'); ?></label>
                <input type="text" id="title" name="title" value="<?php echo $this->item->title ?>" />
            </div>
            
            <input type="hidden" name="task" value="save" />
            
            <input type="submit" value="<?php echo JText::_('com_operatorassistant_SAVE'); ?>"/>
            
        </form>
    
  </div>
<?php 

/*
 * @license    GNU General Public License version 2 or later; see LICENSE
*/


defined( '_JEXEC' ) or die( 'Restricted access' );
 
$type   = $params->get('type'); 
$logo    = $params->get('logo'); 
if ($logo == null) {
  $logo = 'modules/mod_operatorassistant/assets/img/receptionist.png';
}


$popup   = 'index.php?option=com_operatorassistant&view=client&layout=client&tmpl=component';
$text    = JText::_('MOD_OPERATORASSISTANT_CLIENT_TEXT');
$button  = JText::_('MOD_OPERATORASSISTANT_CLIENT_BUTTON');
 
if ($type == 'operator' ) {
  $popup   = 'index.php?option=com_operatorassistant&view=operator&layout=operator&tmpl=component';
  $text    = JText::_('MOD_OPERATORASSISTANT_OPERATOR_TEXT');
  $button  = JText::_('MOD_OPERATORASSISTANT_OPERATOR_BUTTON');
}  

?>
<script type="text/javascript">
<!--
function myPopup() {
  var w = 500;
  var h = 500;
  var l = Math.floor((screen.width-w)/2);
  var t = Math.floor((screen.height-h)/2);
  window.open("<?php echo $popup ?>","","width=" + w + ",height=" + h + ",top=" + t + ",left=" + l);
}
</script>

<div class="moduletable" style="height:100px;">
  <div  style="float:left">
      <img src="<?php echo $logo; ?>" alt="receptionist" width="100" height="100" />
  </div>
  <div style="text-align:left;left:;top:;height:;z-index:1;position:relative;">
      <p><?php echo $text; ?></p>
  </div>
  <a href="javascript:myPopup();" ><?php echo $button; ?></a>
  <p><a href="http://www.valeriofinazzo.it/" >By Valerio Finazzo</a></p>
</div>
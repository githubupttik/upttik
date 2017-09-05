<?php

/*
 * @license    GNU General Public License version 2 or later; see LICENSE
*/

defined('_JEXEC') or die('Restricted access');

$frequency = $this->get('Item')->frequency*1000;
$title     = $this->get('Item')->title;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <title><?php echo $title; ?></title>
    
    <link rel="stylesheet" href="components/com_operatorassistant/assets/css/style.css" type="text/css" />
    
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="components/com_operatorassistant/assets/js/chat.js"></script>
    <script type="text/javascript" src="components/com_operatorassistant/assets/js/jquery.i18n.properties-min-1.0.9.js"></script>
    <script type="text/javascript">
    	
    	// kick off chat
      var chat =  new Chat();
      var name = '';
      var message = '';
      
    	$(function() {
    	
    	   $( "#table-area" ).delegate("button", "click", function(e) {
             if( $(this).attr("class") == 'Rispondi' )
                chat.aggiornaChat($(this).val());
             if( $(this).attr("class") == 'Cancella' )  {
                chat.cancellaChat($(this).val());
                $('#chat-area').val($("<p><span>Operator</span>Chat Closed</p>"));
             }   
         });
         
         $('#sendie').keyup(function(e) {	
    		 					 
    			  if (e.keyCode == 13) { 
    			  
                var text = $(this).val();
				        var maxLength = $(this).attr("maxlength");  
                var length = text.length; 
                     
                // send 
                if (length <= maxLength + 1) { 
                   chat.invia(text, 'Operator');	
    			         $(this).val("");
    			      } else {
    					     $(this).val(text.substring(0, maxLength));
    				    }	
    			  }
         });
         
         $( "#benvenuto" ).click(function() {
            chat.invia('Benvenuto. In cosa posso aiutarla ?', 'Operator');
            $('#chat-area').append($("<p><span>Operator</span>Benvenuto. In cosa posso aiutarla ?</p>"));
         });
         
         $( "#saluti" ).click(function() {
            chat.invia('Grazie per averci contattato.', 'Operator');
            $('#chat-area').append($("<p><span>Operator</span>Grazie per averci contattato.</p>"));
         });
            
    	});
    </script>

</head>

<body onload="chat.configura('operator');setInterval('chat.aggiornaLista()', <?php echo $frequency; ?>)">

    <audio id="audio">
      <source src="components/com_operatorassistant/assets/audio/squillo.mp3" type="audio/mpeg">
      <embed height="0" width="0" src="components/com_operatorassistant/assets/audio/squillo.mp3">
    </audio>

    <div id="page-wrap">
    
        <h2 id="titolo"><?php echo $title; ?></h2>
        
        <div id="table-area">
          <table class="flexme" id="table" border="1" width="100%">
              <thead>
                <tr>
                  <th width="100%" colspan="3" id="intestazioneListaChat">Chat Odierne</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
          </table>
        </div>
        
        <p id="name-area"></p>
        
        <div id="chat-wrap">
          <div id="chat-area"></div>
        </div>
            
        <form id="send-message-area">
            <h2 id="labelMessage">Your message</h2>
            <textarea id="sendie" maxlength="1000" rows="4" ></textarea>
        </form>
        
        <p></p>
        <div id="button-area">
            <button type="button" id="benvenuto" >Benvenuto</button>
            <button type="button" id="saluti" >Saluti</button>
        </div>
        
        <p><a href="http://www.valeriofinazzo.it/" >By Valerio Finazzo</a></p>
    
    </div>
    
</body>

</html>
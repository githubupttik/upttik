<?php

/*
 * @license    GNU General Public License version 2 or later; see LICENSE
*/

// No direct access to this file
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
    	
    	   // watch textarea for key presses
         $("#sendie").keydown(function(event) {  
             
             var key = event.which;  
             
             //all keys including return.  
             if (key >= 33) {
               
                 var maxLength = $(this).attr("maxlength");  
                 var length = this.value.length;  
                 
                 // don't allow new content if length is maxed out
                 if (length >= maxLength) {  
                     event.preventDefault();  
                 }  
              }  
    		 });
    		 
    		 // watch textarea for release of key press
    		 $('#sendie').keyup(function(e) {	
    		 					 
    			  if (e.keyCode == 13) { 
    			  
                var text = $(this).val();
				        var maxLength = $(this).attr("maxlength");  
                var length = text.length; 
                // send 
                if (length <= maxLength + 1) { 
                   chat.invia(text, name);	
    			         $(this).val("");
    			      } else {
    					     $(this).val(text.substring(0, maxLength));
    				    }	
    			  }
         });
         
         $( "#creaChat" ).click(function() {
            name =  $('#nome').val();
            $('#autentication-area').remove();
            $('#name-area').html($.i18n.prop('operatorassistant.welcome', name));
			      $('#chat-area').append($.i18n.prop('operatorassistant.contactOperator'));
            message = $.i18n.prop('operatorassistant.contactOperator');
            chat.creaChat(name, message);
         });
         
         $( "#print" ).click(function() {
             var mywindow = window.open('', 'my div', 'height=400,width=600');
             mywindow.document.write('<html><head></head><body >');
             mywindow.document.write($('#chat-area').html());
             mywindow.document.write('</body></html>');
             mywindow.print();
             mywindow.close();
             return true;
         });
            
    	});
    </script>
             
</head>

<body onload="chat.configura('live');setInterval('chat.aggiornaChat()', <?php echo $frequency; ?>)">

    <div id="page-wrap">
    
        <h2 id="titolo"><?php echo $title; ?></h2>
        
        <div id="autentication-area">
          <label id="labelName">Name: </label>
          <input type="text" id="nome">
          <input type="submit" id="creaChat">
        </div>
        
        <p id="name-area"></p>
        
        <div id="chat-wrap">
          <div id="chat-area"></div>
        </div>
        <input type="button" id="print" value="Print"/>
        
        <div id="send-message-area">
          <h3 id="labelMessage">Your message</h2>
          <textarea id="sendie" maxlength="1000" rows="4" ></textarea>
        </div>
    
        <p><a href="http://www.valeriofinazzo.it/" >By Valerio Finazzo</a></p>
        
    </div>
    
</body>

</html>
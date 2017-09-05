var instanse = false;
var state;
var mes;
var file;
var nomeFile;
var listaFile;

function Chat () {
    this.aggiornaLista = aggiornaLista;
    this.aggiornaChat = aggiornaChat;
	  this.cancellaChat = cancellaChat;
    this.invia = invia;
	  this.creaChat = creaChat;
	  this.configura = configura;
}

function aggiornaChat(tmpNomeFile){

     if (typeof tmpNomeFile === "string")
        nomeFile = tmpNomeFile;
     
     if (!nomeFile)
      return;
      
     $.ajax({
		   type: "POST",
		   url: "?option=com_operatorassistant&task=aggiorna",
		   data: { 'function': 'aggiorna', 'nomeFile': nomeFile },
		   dataType: "json",
		   success: function(data){
         if(data.text){
				    $('#chat-area').html("");
            for (var i = 0; i < data.text.length; i++) {
                var tmpMsg = decodeURIComponent(data.text[i]);
                $('#chat-area').append($("<p>"+ tmpMsg +"</p>"));
            }								  
			   }
			   
         $('#send-message-area').show();
			   if(data.stato){
				    $('#send-message-area').hide();								  
			   } 
			   
			   document.getElementById('chat-area').scrollTop = document.getElementById('chat-area').scrollHeight;
		   },
		   error: function(jqXHR, errorThrown) { 
         alert("aggiornaChat: " + jqXHR.responseText); 
       } 
		});
}

function invia(message, nickname)
{  
   var tmpMsg = encodeURIComponent(message);
   $.ajax({
	   type: "POST",
	   url: "?option=com_operatorassistant&task=invia",
	   data: {'function': 'invia', 'message': tmpMsg, 'nickname': nickname, 'nomeFile': nomeFile },
	   dataType: "json", 
	   success: function(data){
		   aggiornaChat();
	   },
	   error: function(jqXHR, errorThrown) { 
       alert("invia: " + jqXHR.responseText); 
     }
	});
}

function creaChat(nickname, message)
{       
    $.ajax({
		   type: "POST",
		   url: "?option=com_operatorassistant&task=crea",
		   data: { 'function': 'crea', 'nickname': nickname, 'message': message },
		   dataType: "json",
		   success: function(data){
			   nomeFile = data.nomeFile;
			   aggiornaChat();
		   },
		   error: function(jqXHR, errorThrown) { 
         alert("Response: " + jqXHR.responseText); 
       }
		});
}

function aggiornaLista(){
      
     $.ajax({
		   type: "POST",
		   url: "?option=com_operatorassistant&task=aggiornaLista",
		   data: { 'function': 'aggiornaLista'},
		   dataType: "json",
		   success: function(data){
          if (!listaFile)
		        listaFile = new Object;
          
          var sound = $('#audio');
          
          var table = $("#table tbody");
          table.empty();
          $.each(data.text, function(idx, elem){
              if (elem != "") { 
                table.append('<tr><td>'+elem+'</td><td><button value="'+elem+'" class="Rispondi">'+$.i18n.prop('operatorassistant.rispondi')+'</button></td><td><button value="'+elem+'" class="Cancella">'+$.i18n.prop('operatorassistant.cancella')+'</button></td></tr>');
                if (!listaFile[elem]) {
                  listaFile[elem] = elem; 
                  sound.trigger('play'); 
                }   
              }
          });
          
          aggiornaChat();
		   },
		   error: function(jqXHR, errorThrown) { 
         alert("Response: " + jqXHR.responseText); 
       } 
		});

}
		
function cancellaChat(tmpNomeFile){
      
     $.ajax({
		   type: "POST",
		   url: "?option=com_operatorassistant&task=cancella",
		   data: { 'function': 'cancella', 'nomeFile': tmpNomeFile},
		   dataType: "json",
		   success: function(data){
		      aggiornaLista();
		   },
		   error: function(jqXHR, errorThrown) { 
         alert("Response: " + jqXHR.responseText); 
       } 
		});
    		
}

function configura(nome){
     
     jQuery.i18n.properties({
         name:'messages',
         path:'?option=com_operatorassistant&task=messages&file=',
         mode:'map',
         callback: function() {
            if (nome == 'live') {
              document.title = $.i18n.prop('operatorassistant.title');
              $("#labelName").text($.i18n.prop('operatorassistant.autentication-area.labelName'));
              $("#creaChat").val($.i18n.prop('operatorassistant.autentication-area.submit'));
              $("#titolo").text($.i18n.prop('operatorassistant.title'));
            }
            if (nome == 'operator') {
              document.title = $.i18n.prop('operatorassistant.title');
              $("#titolo").text($.i18n.prop('operatorassistant.title'));
              $("#intestazioneListaChat").text($.i18n.prop('operatorassistant.listChat'));
            }
            $("#labelMessage").text($.i18n.prop('operatorassistant.autentication-area.labelMessage'));
         }
     });

}

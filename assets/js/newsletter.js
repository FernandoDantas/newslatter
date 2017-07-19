$(document).ready(function(){

    var btn_enviar_newsletter = $("#btn-enviar-newsletter");
    var enviado_para = $("#enviado-para");
    var carregando_emails = $("#carregando-emails");
    var emails_enviados = $("#emails-enviados");
    var form_newsletter = $("#form-newsletter");

    btn_enviar_newsletter.on("click",function(event){
        event.preventDefault();

        var message = '<div class="ui blue message">';
        message += "<p>Aguarde enquanto a lista de emails é carregada <i class='spinner icon'></i></p>";
        message += '</div>';
        carregando_emails.html(message);

        var i=0;
        var totalEmails = $(this).attr('data-emails');
        var interval=setInterval(function(){
            var increment = i++;
            $.ajax({
                url: "ajax/newsletter.php",
                type: "POST",
                dataType: 'json',
                data: 'i='+increment+'&'+form_newsletter.serialize(),                
                beforeSend: function(){
                    carregando_emails.html('');
                    
                    var message = '<div class="ui blue message">';
                    message += '<p><i class="spinner icon"></i> Carregando email número '+(increment+1)+'</p>';
                    message += '</div>';
                    enviado_para.html(message);
                },
                success: function(retorno){
                	console.log(retorno);
               if(retorno.status == 'fim'){
                        clearInterval(interval);
                        increment--;
                        
                        var message = '<div class="ui green message">';
                        message += '<p><i class="check circle outline icon"></i> Final do envio de e-mails.</p>';
                        message += '</div>';
                        enviado_para.html(message);
                        setTimeout(function(){
                            enviado_para.fadeOut('slow');
                        },3000);
                    }else{
                        var date = new Date();
                        var dia = date.getDate();
                        var mes = date.getMonth()+1;
                        var ano = date.getFullYear();

                        var message = "<div class='item'>";
                        message += '<div class="ui green message">';
                        message +="<i class='check circle outline icon'></i> Email enviado dia: "+dia+"/"+mes+"/"+ano+"<br />";
                        message += retorno;
                        message +="</div>";
                        message +="</div>";
                        message +="<div class='ui divider'></div>";
                        enviado_para.html(message);
                    }
                },
                complete: function(){
                        var message = '<div class="ui green message">';
                        message += '<i class="check circle outline icon"></i> Enviamos '+(increment+1)+' de '+totalEmails+' emails';
                        message +="</div>";
                        carregando_emails.html(message);
                }
            });
         },5000);
    });
});
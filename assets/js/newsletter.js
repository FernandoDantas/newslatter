$(document).ready(function(){

       var btn_enviar_newsletter = $("#btn-enviar-newsletter");
       var enviado_para = $("#enviado-para");
       var carregando_emails = $("#carregando-emails");
       var emails_enviados = $("#emails_enviados");
       var form_newsletter = $('#form-newsletter'); 

       btn_enviar_newsletter.on('click', function(event){
             event.preventDefault();

             var message = '<div class="ui blue message">';
             message += "<p>Aguarde enquanto a lista de emails é carregada <i class'spinner icon'></i></p>";
             message += '</div>';
             carregando_emails.html(message);

            var i = 0;
            var totalEmails = $(this).attr('data-emails');
            var interval = setInterval(function(){
                var increment = i++;    
                $.ajax({
                    url: 'ajax/newsletter.php',
                    type: 'POST',
                    dataType: 'json',
                    data: 'i='+increment+'&'+form_newsletter.serialize(),
                    beforeSend: function(){
                        carregando_emails.html('');

                         var message = '<div class="ui blue message">';
                         message += "<p><i class'spinner icon'></i> Carregando email numero "+(increment+1)+"</p>";
                         message += '</div>';
                         enviado_para.html(message);
                    },
                    success: function(retorno){
                        if(retorno.status == 'fim'){

                        }

                    },
                    complete: function(){

                    }
                });
            }, 5000)
       });    
});
$( document ).ready(function() {
	
	var btn_cadastrar_user = $("#btn-cadastrar-user");
	var form_cadastrar_user = $("#form-cadastrar-user");	
	var mensagem = $("#mensagem");
	
	btn_cadastrar_user.on('click', function(event){
		event.preventDefault();
		
		$.ajax({
			url: 'ajax/cadastrar_user.php',
			type: 'POST',
			data: form_cadastrar_user.serialize(),
			beforeSend: function(){
				var message = "<div class='ui orange message'>";
				message += '<p>Cadastrando seus dados, aguarde...</p>';
				message += '</div>';
					
				mensagem.html(message);	
			},
		
			success: function(retorno){
				
				if(retorno == 'usercadastrado'){
					var message = '<div class="ui green message">';
					message += '<p>Cadastrado com sucesso !!!</p>'
					message += '</div>';
					
					mensagem.html(message);
					
					setTimeout(function(){
						mensagem.fadeOut('slow');
						form_cadastrar_user[0].reset();
					},3000)
					
				}
			}
			
		});
		
		
	});
	
});
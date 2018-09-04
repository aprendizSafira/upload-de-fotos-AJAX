$(function(){
	//Class do js form-data, vamos pegar o formulario e transformar em uma seleção dum mesmo
	var form = $('#form')[0];//Peguei o formulario
	var data = new FormData(form);//Passa o nosso formulario


	//Requisição ajax
	$.ajax({
		type:'POST',
		url:'recebedor.php',
		data:data,
		contentType:false,
		processData:false,
		success:function(msg){
			alert(msg);
		}
	});
});
//////////////////---Segunda forma de fazer upload de fotos com AJAX--////////////////////////////////
//Nessa situação temos de criar a class formData() do js
$(function(){
	
	$('button').on('click', function(){
		var data = new FormData();

		//Verificando se tem arquivo(foto) selecionado
		var arquivos = $('#foto')[0].files;//[0] transforma em dum

		if(arquivos.length > 0) {
			data.append('nome', $('#nome').val());//Adiciona o nome
			data.append('foto', arquivos[0]);

			//Se tem arquivos selecionado colocamos o ajax dentro
			//Requisição ajax
			$.ajax({
				type:'POST',
				url:'recebedor.php',
				data:data,
				contentType:false,
				processData:false,
				success:function(msg){
					alert(msg);
				}
			});

		}

	});

});





	
	

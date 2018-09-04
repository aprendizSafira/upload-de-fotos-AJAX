<!DOCTYPE html>
<html>
<head>
	<title>Upload de fotos com AJAX</title>
</head>
<body>
	<h1>Primeira forma de fazer upload de fotos com AJAX</h1>
	<form id="form" method="POST" enctype="multipart/form-data" action="recebedor.php" onsubmit="function(); return false;"><!--onsubmit bloqueia o envido do formulario-->
	
		Nome:<br/>
		<input type="text" name="nome"><br/><br/>
		Foto:<br/>
		<input type="file" name="foto"><br/><br/>

		<input type="submit" value="Enviar">
	</form>


	<hr/>

	<h1>Segunda forma de fazer upload de fotos com AJAX</h1>
	<!--Segunada forma de enviar arquivos via AJAX-->

		Nome:<br/>
		<input type="text" id="nome" name="nome"><br/><br/>
		Foto:<br/>
		<input type="file" id="foto" name="foto"><br/><br/>

		<button>Enviar</button>
		


<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>
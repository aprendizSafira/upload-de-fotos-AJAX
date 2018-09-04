<?php
if(isset($_FILES['foto'])) {
	$arquivos = $_FILES['foto'];

	move_uploaded_file($arquivos['tmp_name'], 'fotos/'.$arquivos['name']);

	echo "Arquivo de ".$_POST['nome']." enviado com sucesso!!";
}


?>
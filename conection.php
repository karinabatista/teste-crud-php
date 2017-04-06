<?php
	try {
		
		$base=new PDO('mysql:host=localhost; dbname=crud', 'root', '');
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//$base->exec("SET CARACTER SET UTF8");
	} catch (Exception $e) {
		die('Erro' . $e->getMessage());
		echo "Linha de erro" . $e->getLine();
	}
?>
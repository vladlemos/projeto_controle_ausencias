<?php
// VERIFICA SE EXISTEM ERROS DE EXECUÇÃO NO CÓDIGO
ini_set('display_errors',1); 

// FUNÇÃO QUE VERIFICA SE DETERMINADA CLASSE EXISTE E, EM CASO AFIRMATIVO, FAZ O REQUIRE DO ARQUIVO
spl_autoload_register(function($className){

	// CAMINHO PARA ACESSAR DO SERVIDOR DA CEOPC (TESTES)
	// $fileName = "class". DIRECTORY_SEPARATOR . $className . ".php";
	// CAMINHO FIXO
	$caminho = $_SERVER["DOCUMENT_ROOT"];

	//CAMINHO PARA O CONTROLE_AUSENCIA NA PASTA CHUMAN
	$fileName = $caminho  . DIRECTORY_SEPARATOR . "chuman" . DIRECTORY_SEPARATOR . "projetoFerias" . DIRECTORY_SEPARATOR . "class" . DIRECTORY_SEPARATOR . $className . ".php";
	
	// $fileName = $caminho . DIRECTORY_SEPARATOR . "class". DIRECTORY_SEPARATOR . $className . ".php";

	if(file_exists($fileName)) {

		require_once($fileName);

	}

});
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
</head>
<body>
	<?php	
	// VERIFICA SE EXISTEM ERROS DE EXECUÇÃO NO CÓDIGO
	ini_set('display_errors',1);
	// CHAMA OS ARQUIVOS DE VERIFICAÇÃO DE EXISTÊNCIA DAS CLASSES
	require('config_classes_globais.php');
	require('controle_ausencia' . DIRECTORY_SEPARATOR . 'config_controle_ausencia.php');

	$usuario = new EmpregadoCeopc();

	echo $usuario;

	echo "<hr/>";

	echo $usuario->getMatricula();

	echo "<hr/>";

	$ferias = new Ferias($usuario);

	var_dump($ferias);



	?>
</body>
</html>
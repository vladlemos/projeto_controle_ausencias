<?php
	// VERIFICA SE EXISTEM ERROS DE EXECUÇÃO NO CÓDIGO
	ini_set('display_errors',1);
	// CHAMA OS ARQUIVOS DE VERIFICAÇÃO DE EXISTÊNCIA DAS CLASSES
	require('config_classes_globais.php');
	require('controle_ausencia' . DIRECTORY_SEPARATOR . 'config_controle_ausencia.php');
	$usuario = new EmpregadoCeopc();
	$ferias = new Ferias($usuario);
		
	$dtInicio = DateTime::createFromFormat('Y-m-d', $_POST['dataInicio']);
	$dtFim = DateTime::createFromFormat('Y-m-d', $_POST['dataRetorno']);
	
	$saldoFerias = $dtInicio->diff($dtFim);
	$saldoFerias = intval($saldoFerias->d) + 1; // mexi aqui para converter para inteiro ver necessidade de mantermos como

	$abono = $_POST['abonoPecuniario'];
	$diasAbono = $_POST['quantidadeDiasAbono'];
	$parcelas = $_POST['quantidadeParcelas'];
	$observacao = $_POST['observacao'];

	// var_dump($dtInicio);
	// echo "<br>";
	// var_dump($dtFim);
	// echo "<br>";
	// var_dump($saldoFerias);
	// echo "<br>";
	echo "Você solicitou férias de " . $dtInicio->format("d/m/Y") . " até " . $dtFim->format("d/m/Y") . " ($saldoFerias dias):<br>";
	
	if($abono == "0")
	{
		$usoAbono = "Abono: Não usará abono.<br>";
		$diasAbono = 0;
		echo $usoAbono;
	}
	else
	{
		$usoAbono = "Abono: Usará abono ($diasAbono dias).<br>";
		echo $usoAbono;
	}

	if($parcelas == "0")
	{
		$usoParcelas = "Não irá parcelar as férias.<br>";
		echo $usoParcelas;
	}
	else
	{
		$usoParcelas = "As férias serão parceladas em $parcelas vezes.<br>";
		echo $usoParcelas;
	}

	if($observacao <> null)
	{
		$usoObservacao = "Observação: $observacao.<br>";
		echo $usoObservacao;
	}

	echo "<br>INSERT:";
	echo "('". $usuario->getMatricula() ."', 2, 'CADASTRADO', '" . $dtInicio->format("Y-m-d") . "', '" . $dtFim->format("Y-m-d") . "', " . $saldoFerias . ", " . $abono . ", " . $diasAbono . ", " . $parcelas . ", " . $ferias->getIdPeriodoFerias() . "),"; // 2 = ferias na tabela de férias 1 = APIP;


	
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link rel="stylesheet" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
		$( function() {
			$( "#datePickerDataInicio" ).datepicker({ 
				dateFormat: 'dd/mm/yy',
				altField: "#alternate",
				altFormat: "yy-mm-dd",
				minDate: 0,
				maxDate: "+6M"
			});
			$( "#datePickerDataRetorno" ).datepicker({ 
				dateFormat: 'dd/mm/yy',
				altField: "#alternate2",
				altFormat: "yy-mm-dd",
				minDate: 0,
				maxDate: "+7M"
			});
		} );
	</script>
</head>
<body>
	<?php	
		// VERIFICA SE EXISTEM ERROS DE EXECUÇÃO NO CÓDIGO
		ini_set('display_errors',1);
		// CHAMA OS ARQUIVOS DE VERIFICAÇÃO DE EXISTÊNCIA DAS CLASSES
		require('config_classes_globais.php');
		require('controle_ausencia' . DIRECTORY_SEPARATOR . 'config_controle_ausencia.php');

		$usuario = new EmpregadoCeopc();

		// echo "Dados do Empregado CEOPC (Classe Empregado + dados de célula, nível acesso e agente de RH: <br><br>";
		// echo $usuario;

		// echo "<hr/>";

		$ferias = new Ferias($usuario);

		// echo "Construct da classe Férias: <br><br>";
		// var_dump($ferias);

		// echo "<hr/>";
	?>
	<form action="registraSolicitacaoFerias.php" method="post">
		<fieldset><legend>DADOS EMPREGADO</legend>
			<label>MATRICULA: <input type="text" name="matricula" value="<?= $usuario->getMatricula(); ?>" size="5" readonly>
			- <input type="text" name="dv" value="<?= $usuario->getDv(); ?>" size="1" readonly></label>
			<label>NOME: <input type="text" name="nome" value="<?= $usuario->getNome(); ?>" size="40" readonly></label>
			<label>CELULA: <input type="text" name="celula" value="<?= $usuario->getCelula(); ?>" size="37" readonly><br></label>
		</fieldset>
		<fieldset><legend>SOLICITAR AUSÊNCIA</legend>
			<label>PERIODO AQUISITIVO: <input type="text" name="periodoAquisitivo" value="<?= date("d/m/Y", strtotime($ferias->getPeriodoAquisitivo())); ?>" size="10" readonly></label>
			<label>DIAS DISPONÍVEIS: <input type="text" name="saldoDisponivel" value="<?= $ferias->getSaldo(); ?>" size="2" readonly><br></label>
			<label>DATA INICIO: <input type="text" id="datePickerDataInicio" required><input type="hidden" id="alternate" name="dataInicio"></label>
			<label>DATA RETORNO: <input type="text" id="datePickerDataRetorno" required><input type="hidden" id="alternate2" name="dataRetorno"><br></label>
			<label>ABONO PECUNIÁRIO: 
				<select name="abonoPecuniario" required>
					<option value="0">NÃO</option>
					<option value="1">SIM</option>
				</select>
			</label>
			<label>QUANTIDADE DIAS ABONO: <input type="number" name="quantidadeDiasAbono" min="0" required><br></label>
			<label>QUANTIDADE DE PARCELAS: <input type="number" name="quantidadeParcelas" min="0" max="10" required><br></label>
			<label>OBSERVAÇÃO:<br>
				<textarea placeholder="Coloque sua observação aqui..." name="observacao" rowa="4" cols="105"></textarea><br>
			</label>
			<input type="submit" value="Enviar">
		</fieldset>
	</form>
</body>
</html>
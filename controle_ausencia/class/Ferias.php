<?php	
// VERIFICA SE EXISTEM ERROS DE EXECUÇÃO NO CÓDIGO
ini_set('display_errors',1);

// CHAMA O ARQUIVO PAI (AUSENCIA)
require_once("Ausencia.php");

// CRIAÇÃO DA CLASSE
class Ferias extends Ausencia
{
    // DEFINIÇÃO DOS ATRIBUTOS
    private $abonoPecuniario;
    private $quantidadeDiasAbono;
    private $quantidadeParcelas;
    private $periodoAquisitivo;
    private $idPeriodoFerias;

    // MÉTODOS

	// GETTERS E SETTERS DOS ATRIBUTOS
  
    // $abonoPecuniario
    public function getAbonoPecuniario()
    {
        return $this->abonoPecuniario;
    }
    public function setAbonoPecuniario($abonoPecuniario)
    {
        $this->abonoPecuniario = $abonoPecuniario;
    }

    // $quantidadeDiasAbono
    public function getQuantidadeDiasAbono()
    {
        return $this->quantidadeDiasAbono;
    }
    public function setQuantidadeDiasAbono($quantidadeDiasAbono)
    {
        $this->quantidadeDiasAbono = $quantidadeDiasAbono;
    }

    // $quantidadeParcelas
    public function getQuantidadeParcelas()
    {
        return $this->quantidadeParcelas;
    }
    public function setQuantidadeParcelas($quantidadeParcelas)
    {
        $this->quantidadeParcelas = $quantidadeParcelas;
    }

    // $periodoAquisitivo
    public function getPeriodoAquisitivo()
    {
        return $this->periodoAquisitivo;
    }
    public function setPeriodoAquisitivo($periodoAquisitivo)
    {
        $this->periodoAquisitivo = $periodoAquisitivo;
    }

    // $idPeriodoFerias
    public function getAbonoPecuniario()
    {
        return $this->idPeriodoFerias;
    }
    public function setAbonoPecuniario($idPeriodoFerias)
    {
        $this->idPeriodoFerias = $idPeriodoFerias;
    }

    // construct
    public function _construct($objEmpregadoCeopc)
    {
        $sql = new Sql();

        $feriasDisponiveis = $sql->query("")

        
    }
    
}

?>
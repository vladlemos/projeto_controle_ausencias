<?php	
// VERIFICA SE EXISTEM ERROS DE EXECUÇÃO NO CÓDIGO
ini_set('display_errors',1);

// CRIAÇÃO DA CLASSE
class Historico
{
    // DEFINIÇÃO DOS ATRIBUTOS
    private $dtHistorico;
    private $tipoHistorico;
    private $observacaoHistorico;
    
	// MÉTODOS

	// GETTERS E SETTERS DOS ATRIBUTOS

    // $dtHistorico
    public function getDtHistorico()
    {
        return $this->dtHistorico;
    }
    public function setDtHistorico()
    {
        $this->dtHistorico = date("Y-m-d H:i:s", time());
    }

    // $tipoHistorico
    public function getTipoHistorico()
    {
        return $this->tipoHistorico;
    }
    public function setTipoHistorico($tipoHistorico)
    {
        $this->tipoHistorico = $tipoHistorico;
    }

    // $observacaoHistorico
    public function getObservacaoHistorico()
    {
        return $this->observacaoHistorico;
    }
    public function setObservacaoHistorico($observacaoHistorico)
    {
        $this->observacaoHistorico = $observacaoHistorico;
    }

    // CONSTRUCT PARA SETTAR TODOS OS VALORES NO OBJETO, COM EXCEÇÃO DA OBSERVAÇÃO
    public function __construct($objEmpregadoCeopc, $objAusencia)
    {	
        $this->setDtHistorico();
        $this->setTipoHistorico($objAusencia->getStatus());
    }
}
?>
<?php	
// VERIFICA SE EXISTEM ERROS DE EXECUÇÃO NO CÓDIGO
ini_set('display_errors',1);

// CRIAÇÃO DA CLASSE
class PeriodoAquisitivo
{
    // DEFINIÇÃO DOS ATRIBUTOS
    private $dataInicioPeriodoAquisitivo;
    private $saldoDias;
    private $diasUtilizados;
    private $diasVendidos;

    // MÉTODOS

    // GETTERS E SETTERS DOS ATRIBUTOS
    

    // $dataInicioPeriodoAquisitivo
    public function getDataInicioPeriodoAquisitivo()
    {
        return $this->dataInicioPeriodoAquisitivo;
    }
    public function setDataInicioPeriodoAquisitivo($dataInicioPeriodoAquisitivo)
    {
        $this->dataInicioPeriodoAquisitivo = $dataInicioPeriodoAquisitivo;
    }

    // $saldoDias
    public function getSaldoDias()
    {
        return $this->saldoDias;
    }
    public function setSaldoDias($saldoDias)
    {
        $this->saldoDias = $saldoDias;
    }

    // $diasUtilizados
    public function getDiasUtilizados()
    {
        return $this->diasUtilizados;
    }
    public function setDiasUtilizados($diasUtilizados)
    {
        $this->diasUtilizados = $diasUtilizados;
    }

    // $diasVendidos
    public function getDiasVendidos()
    {
        return $this->diasVendidos;
    }
    public function setDiasVendidos($diasVendidos)
    {
        $this->diasVendidos = $diasVendidos;
    }
}

?>
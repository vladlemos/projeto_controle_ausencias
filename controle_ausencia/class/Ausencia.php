<?php	
// VERIFICA SE EXISTEM ERROS DE EXECUÇÃO NO CÓDIGO
ini_set('display_errors',1);

// CRIAÇÃO DA CLASSE
class Ausencia
{
    // DEFINIÇÃO DOS ATRIBUTOS
    private $idAusencia;
    private $status;
    private $dataInicio;
    private $dataRetorno;
    private $quantidadeDiasAusencia;
    private $observacao;

    // MÉTODOS

	// GETTERS E SETTERS DOS ATRIBUTOS

    // $idAusencia
    public function getIdAusencia()
    {
        return $this->idAusencia;
    }
    public function setIdAusencia($idAusencia)
    {
        $this->idAusencia = $idAusencia;
    }

    // $status
    public function getStatus()
    {
        return $this->status;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }

    // $dataInicio
    public function getDataInicio()
    {
        return $this->dataInicio;
    }
    public function setDataInicio($dataInicio)
    {
        $this->dataInicio = $dataInicio;
    }

    // $dataRetorno
    public function getDataRetorno()
    {
        return $this->dataRetorno;
    }
    public function setDataRetorno($dataRetorno)
    {
        $this->dataRetorno = $dataRetorno;
    }

    // $quantidadeDiasAusencia
    public function getQuantidadeDiasAusencia()
    {
        return $this->quantidadeDiasAusencia;
    }
    public function setQuantidadeDiasAusencia($quantidadeDiasAusencia)
    {
        $this->quantidadeDiasAusencia = $quantidadeDiasAusencia;
    }

    // $observacao
    public function getObservacao()
    {
        return $this->observacao;
    }
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;
    }
}


?>
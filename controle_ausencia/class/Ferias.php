<?php	
// VERIFICA SE EXISTEM ERROS DE EXECUÇÃO NO CÓDIGO
ini_set('display_errors',1);

// CHAMA O ARQUIVO PAI (AUSENCIA)
require_once("Ausencia.php");

// CRIAÇÃO DA CLASSE
class Ferias extends Ausencia
{
    // DEFINIÇÃO DOS ATRIBUTOS
    private $saldo;
    private $abonoPecuniario;
    private $quantidadeDiasAbono;
    private $quantidadeParcelas;
    private $periodoAquisitivo;
    private $idPeriodoFerias;

    // MÉTODOS

	// GETTERS E SETTERS DOS ATRIBUTOS
  
    // $saldo
    public function getSaldo()
    {
        return $this->saldo;
    }
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

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
    public function getIdPeriodoFerias()
    {
        return $this->idPeriodoFerias;
    }
    public function setIdPeriodoFerias($idPeriodoFerias)
    {
        $this->idPeriodoFerias = $idPeriodoFerias;
    }

    // construct
    public function __construct($objEmpregadoCeopc)
    {
        $sql = new Sql();

        $feriasDisponiveis = $sql->select("SELECT TOP 1
                                            'SALDO_DIAS' = [SALDO_DIAS] - [DIAS_UTILIZADOS] - [DIAS_VENDIDOS]
                                            ,[DATA_INICIO_PERIODO_AQUISITIVO]
                                            ,[ID_PERIODO]
                                        FROM 
                                            [tbl_CEOPC_AUS_PERIODOS_AQUISITIVOS]
                                        WHERE 
                                            [PERIODO_ZERADO] = 0 AND
                                             [MATRICULA] = :MATRICULA
                                        ORDER BY
                                            [DATA_INICIO_PERIODO_AQUISITIVO] ASC", array(
                                                ':MATRICULA'=>$objEmpregadoCeopc->getMatricula(),
                                            ));
        if(!empty($feriasDisponiveis))
        {
            $row = $feriasDisponiveis[0];

            // ATRIBUIÇÃO DAS VARIÁVEIS DE SALDO DE DIAS E PERIODO AQUISITIVO VIGENTE
            $this->setSaldo($row['SALDO_DIAS']);
            $this->setPeriodoAquisitivo($row['DATA_INICIO_PERIODO_AQUISITIVO']);
            $this->setIdPeriodoFerias($row['ID_PERIODO']);
        }        
    }
}

?>
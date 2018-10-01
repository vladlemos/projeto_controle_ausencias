<?php	
// VERIFICA SE EXISTEM ERROS DE EXECUÇÃO NO CÓDIGO
ini_set('display_errors',1);

// CAMINHO ROTA FIXA
$caminho = $_SERVER["DOCUMENT_ROOT"];
require_once($caminho . DIRECTORY_SEPARATOR . "class" .  DIRECTORY_SEPARATOR . "Empregado.php");

// CRIAÇÃO DA CLASSE
class EmpregadoCeopc extends Empregado
{
    // DEFINIÇÃO DOS ATRIBUTOS
    private $dv;
    private $celula;
    private $nivelAcesso;
    private $agenteRH;

    // $dv
    public function getDv()
    {
        return $this->dv;
    }
    public function setDv($dv)
    {
        $this->dv = $dv;
    }

    // $celula
    public function getCelula()
    {
        return $this->celula;
    }
    public function setCelula($celula)
    {
        $this->celula = $celula;
    }

    // $nivelAcesso
    public function getNivelAcesso()
    {
        return $this->nivelAcesso;
    }
    public function setNivelAcesso($nivelAcesso)
    {
        $this->nivelAcesso = $nivelAcesso;
    }

    // $agenteRH
    public function getAgenteRH()
    {
        return $this->agenteRH;
    }
    public function setAgenteRH($agenteRH)
    {
        $this->agenteRH = $agenteRH;
    }

    public function __construct()
    {
        // RODA O CONSTRUCT DO PAI PARA PEGAR OS DADOS INICIAIS PARA SEREM TRABALHADOS NESSE CONSTRUCT
        parent::__construct();
        
        $sql = new Sql();

        $dadosEmpregado = $sql->select("SELECT 
                                            [MATRICULA]
                                            ,[DV]
                                            ,[NOME_CELULA]
                                            ,[NIVEL_ACESSO]
                                            ,[PERIODO_AQUISITIVO_VIGENTE]
                                            ,[SALDO_FERIAS]
                                            ,[AGENTE_RH]
                                        FROM 
                                            [tbl_CEOPC_AUS_EMPREGADO]
                                        WHERE
                                            [MATRICULA] = :MATRICULA", array(
                                                ':MATRICULA'=>$this->getMatricula()
                                            ));
        if(!empty($dadosEmpregado))
        {
            $row = $dadosEmpregado[0];

            // ATRIBUIÇÃO DAS VARIÁVEIS DE SALDO DE DIAS E PERIODO AQUISITIVO VIGENTE
            $this->setDv($row['DV']);
            $this->setCelula($row['NOME_CELULA']);
            $this->setNivelAcesso($row['NIVEL_ACESSO']);
            $this->setAgenteRH($row['AGENTE_RH']);
        } else
        {
            echo "erro...";
        } 
    }

    // MÉTODO PARA TRAZER OS DADOS DO OBJETO COMO JSON
	public function __toString()
	{
		return json_encode(array(
            "MATRICULA"=>$this->getMatricula(),
            "DV"=>$this->getDv(),
            "NOME"=>$this->getNome(),
            "CELULA"=>$this->getCelula(),
			"NIVEL_ACESSO"=>$this->getNivelAcesso(),
			"FUNCAO"=>$this->getFuncao(),
            "DATA_ADMISSAO"=>$this->getDataAdmissao(),
            "AGENTE_RH"=>$this->getAgenteRH(),
		), JSON_UNESCAPED_SLASHES);
	}	

}

?>
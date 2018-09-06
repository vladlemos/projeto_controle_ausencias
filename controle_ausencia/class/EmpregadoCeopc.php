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
    private $celula;
    private $nivelAcesso;
    private $agenteRH;

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
}

?>
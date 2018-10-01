<?php	
// VERIFICA SE EXISTEM ERROS DE EXECUÇÃO NO CÓDIGO
ini_set('display_errors',1);

// CRIAÇÃO DA CLASSE
class GrupoCelula
{
    // DEFINIÇÃO DOS ATRIBUTOS
    private $nomeCelula;
    private $matriculaGestor;
    private $nomeGestor;

    // $nomeCelula
    public function getNomeCelula()
    {
        return $this->nomeCelula;
    }
    public function setNomeCelula($nomeCelula)
    {
        $this->nomeCelula = $nomeCelula;
    }

    // $matriculaGestor
    public function getMatriculaGestor()
    {
        return $this->matriculaGestor;
    }
    public function setMatriculaGestor($matriculaGestor)
    {
        $this->matriculaGestor = $matriculaGestor;
    }

    // $nomeGestor
    public function getNomeGestor()
    {
        return $this->nomeGestor;
    }
    public function setNomeGestor($nomeGestor)
    {
        $this->nomeGestor = $nomeGestor;
    }
}
<?php

include 'model/Amizade.php';
include 'model/Pessoa.php';
class AmizadeDAO {
    private $conexao;
    
    function __construct() {
        $this->conexao = Connection::getConnection();
    }

    public function inserir($Idpessoa,$Idpessoa2){
        $sql = "INSERT INTO amizade (IdPessoa,IdPessoa2)VALUES (?,?)";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1,$Idpessoa,PDO::PARAM_INT);
        $stmt->bindValue(2,$Idpessoa2,PDO::PARAM_INT);
        
        $stmt->execute();
    }
    
    
    
    public function deletar($codigo){
        $sql = "DELETE FROM amizade WHERE IdPessoa=? or IdPessoa2=?";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1,$codigo,PDO::PARAM_INT);
        $stmt->bindValue(2,$codigo,PDO::PARAM_INT);
        $stmt->execute();
    }
    
    public function buscarPorTodas($pessoa){
        $sql = "SELECT * FROM amizade WHERE IdPessoa = ? or IdPessoa2=?";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1,$pessoa->getIdPessoa(),PDO::PARAM_INT);
        $stmt->bindValue(2,$pessoa->getIdPessoa(),PDO::PARAM_INT);
        $stmt->execute();
        //Coleta os dados retornados da consulta SQL
        $num=0;
        $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $vetor=array();
        foreach($dados as $v1){
        $amizade = new Amizade();
        $amizade->setIdAmizade($v1["IdCurti"]);
        $amizade->setIdPessoa($v1["IdPessoa"]);
        $amizade->setIdPessoa2($v1["IdPessoa2"]);
        $vetor[$num]=$amizade;
        $num++;
        }
        
        return $vetor;
    }
    
}
?>
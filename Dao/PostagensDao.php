<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PostagensDao
 *
 * @author Luiz
 */ include "./model/Postagens.php";
class PostagensDao {
    private $conexao;
    
    function __construct() {
        $this->conexao = Connection::getConnection();
    }
    public function inserir($IdPessoa,$Conteudo){
        $sql = "INSERT INTO postagens (IdPessoa,Conteudo)VALUES (?,?)";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1,$IdPessoa,PDO::PARAM_INT);
        $stmt->bindValue(2,$Conteudo,PDO::PARAM_STR);
        $stmt->execute();
    }
    
    
    
    public function deletar($IdPostagens){
        $sql = "DELETE FROM postagens WHERE IdPostagens=?";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1,$IdPostagens,PDO::PARAM_INT);
        $stmt->execute();
    }
    public function deletarPorPessoa($IdPessoa){
        $sql = "DELETE FROM postagens WHERE IdPessoa=?";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1,$IdPessoa,PDO::PARAM_INT);
        $stmt->execute();
    }
    
    
    public function buscarPorPessoa($IdPessoa){
        $sql = "SELECT * FROM postagens WHERE IdPessoa=?";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1,$IdPessoa,PDO::PARAM_INT);
        
        $stmt->execute();
        //Coleta os dados retornados da consulta SQL
        
        $num=0;
        $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $vetor=array();
        foreach($dados as $v1){
            
        $postagens=new Postagens();
        $postagens->setIdPostagens($v1["IdPostagens"]);
        $postagens->setIdPessoa($v1["IdPessoa"]);
        $postagens->setConteudo($v1["Conteudo"]);
        $vetor[$num]=$postagens;
        $num++;
        
        }
        return $vetor;
    }
    
}

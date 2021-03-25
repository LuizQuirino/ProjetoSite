<?php
include 'connection/Connection.php';
class PessoaDAO {
    private $conexao;
    
    function __construct() {
        $this->conexao = Connection::getConnection();
    }
public function inserir($pessoa){
        $sql = "INSERT INTO pessoa (Nome,Senha,Email,Profissao,Cidade,Telefone)VALUES (?,?,?,?,?,?)";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1,$pessoa->getNome(),PDO::PARAM_STR);
        $stmt->bindValue(2,$pessoa->getSenha(),PDO::PARAM_STR);
        $stmt->bindValue(3,$pessoa->getEmail(),PDO::PARAM_STR);
        $stmt->bindValue(4,$pessoa->getProfissao(),PDO::PARAM_STR);
        $stmt->bindValue(5,$pessoa->getCidade(),PDO::PARAM_STR);
        $stmt->bindValue(6,$pessoa->getTel(),PDO::PARAM_STR);
        $stmt->execute();
    }
    
    public function alterar($pessoa){
        $sql = "UPDATE `pessoa` SET `Nome`=?,`Senha`=?,`Email`=?,`Profissao`=?,`Cidade`=?,`Telefone`=? WHERE IdPessoa=?";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1,$pessoa->getNome(),PDO::PARAM_STR);
        $stmt->bindValue(2,$pessoa->getSenha(),PDO::PARAM_STR);
        $stmt->bindValue(3,$pessoa->getEmail(),PDO::PARAM_STR);
        $stmt->bindValue(4,$pessoa->getProfissao(),PDO::PARAM_STR);
        $stmt->bindValue(5,$pessoa->getCidade(),PDO::PARAM_STR);
        $stmt->bindValue(6,$pessoa->getTel(),PDO::PARAM_STR);
        $stmt->bindValue(7,$pessoa->getIdPessoa(),PDO::PARAM_INT);
        $stmt->execute();
    }
    
    public function deletar($codigo){
        $sql = "DELETE FROM pessoa WHERE IdPessoa=?";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1,$codigo,PDO::PARAM_INT);
        $stmt->execute();
    }
    
    public function buscarPeloCodigo($codigo){
        $sql = "SELECT * FROM pessoa WHERE IdPessoa = ?";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1,$codigo,PDO::PARAM_INT);
        $stmt->execute();
        //Coleta os dados retornados da consulta SQL
        
        
        $dados = $stmt->fetch(PDO::FETCH_ASSOC);
        $pessoa = new Pessoa();
        $pessoa->setIdPessoa($dados["IdPessoa"]);
        $pessoa->setNome($dados["Nome"]);
        $pessoa->setSenha($dados["Senha"]);
        $pessoa->setEmail($dados["Email"]);
        $pessoa->setProfissao($dados["Profissao"]);
        $pessoa->setCidade($dados["Cidade"]);
        $pessoa->setTel($dados["Telefone"]);
        
        
        return $pessoa;
    }
    
    public function buscarPeloNome($nome){
        $sql = "SELECT * FROM pessoa WHERE Nome LIKE ?";
        $nome="%".$nome."%";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1,$nome,PDO::PARAM_STR);
        
        $stmt->execute();
        //Coleta os dados retornados da consulta SQL
        
        $num=0;
        $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $vetor=array();
        foreach($dados as $v1){
            
        $pessoa = new Pessoa();
        $pessoa->setIdPessoa($v1["IdPessoa"]);
        $pessoa->setNome($v1["Nome"]);
        $pessoa->setSenha($v1["Senha"]);
        $pessoa->setEmail($v1["Email"]);
        $pessoa->setProfissao($v1["Profissao"]);
        $pessoa->setCidade($v1["Cidade"]);
        $pessoa->setTel($v1["Telefone"]);
        $vetor[$num]=$pessoa;
        $num++;
        
        }
        return $vetor;
    }
    public function buscarPeloNome2($nome){
        $sql = "SELECT * FROM `pessoa` WHERE Nome=?";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1,$nome,PDO::PARAM_STR);
        $stmt->execute();
        //Coleta os dados retornados da consulta SQL
        
        
        $dados = $stmt->fetch(PDO::FETCH_ASSOC);
        $pessoa = new Pessoa();
        $pessoa->setIdPessoa($dados["IdPessoa"]);
        $pessoa->setNome($dados["Nome"]);
        $pessoa->setSenha($dados["Senha"]);
        $pessoa->setEmail($dados["Email"]);
        $pessoa->setProfissao($dados["Profissao"]);
        $pessoa->setCidade($dados["Cidade"]);
        $pessoa->setTel($dados["Telefone"]);
        
        
        return $pessoa;
    }
}
?>
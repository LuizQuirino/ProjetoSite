<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pessoa
 *
 * @author Luiz
 */
class Pessoa {
    private $idPessoa;
    private $nome;
    private $senha;
    private $email;
    private $profissao;
    private $cidade;
    private $tel;
    
    function getIdPessoa() {
        return $this->idPessoa;
    }

    function setIdPessoa($idPessoa) {
        $this->idPessoa = $idPessoa;
    }

    function getNome() {
        return $this->nome;
    }

    function getSenha() {
        return $this->senha;
    }

    function getEmail() {
        return $this->email;
    }

    function getProfissao() {
        return $this->profissao;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getTel() {
        return $this->tel;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setProfissao($profissao) {
        $this->profissao = $profissao;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setTel($tel) {
        $this->tel = $tel;
    }


   

}

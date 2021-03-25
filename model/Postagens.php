<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Postagens
 *
 * @author Luiz
 */
class Postagens {
    private $idPostagens;
    private $idPessoa;
    private $conteudo;
    
    function getIdPostagens() {
        return $this->idPostagens;
    }

    function getIdPessoa() {
        return $this->idPessoa;
    }

    function getConteudo() {
        return $this->conteudo;
    }

    function setIdPostagens($idPostagens) {
        $this->idPostagens = $idPostagens;
    }

    function setIdPessoa($idPessoa) {
        $this->idPessoa = $idPessoa;
    }

    function setConteudo($conteudo) {
        $this->conteudo = $conteudo;
    }


}

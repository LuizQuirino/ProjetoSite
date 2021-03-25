<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Curtir
 *
 * @author Luiz
 */
class Amizade {
    private $IdPessoa;
    private $IdPessoa2;
    private $IdAmizade;
    
    function getIdPessoa() {
        return $this->IdPessoa;
    }

    function getIdPessoa2() {
        return $this->IdPessoa2;
    }

    function getIdAmizade() {
        return $this->IdAmizade;
    }

    function setIdPessoa($IdPessoa) {
        $this->IdPessoa = $IdPessoa;
    }

    function setIdPessoa2($IdPessoa2) {
        $this->IdPessoa2 = $IdPessoa2;
    }

    function setIdAmizade($IdAmizade) {
        $this->IdAmizade = $IdAmizade;
    }






}

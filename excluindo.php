<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
        
        include './Dao/PessoaDao.php';
        include './Dao/AmizadeDao.php';
        include './Dao/PostagensDao.php';
        $pD =new PessoaDao();
        session_start();
        $p=$_SESSION['pessoa'];
        $codigo=$p->getIdPessoa();
        
        $ad=new AmizadeDAO();
        $ad->deletar($codigo);
        
        $poD= new PostagensDao();
        $poD->deletarPorPessoa($codigo);
        
        $pD->deletar($codigo);
        session_destroy();
        echo $codigo;
        header("Location:index.php");
?>

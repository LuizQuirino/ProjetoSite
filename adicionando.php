<?php
        include './Dao/AmizadeDao.php';
        include './Dao/PessoaDao.php';
        
        $aD =new AmizadeDao();
        session_start();
        $p=$_SESSION['pessoa'];
        $IdPessoa2=$_GET["Id"];
        $aD->inserir($p->getIdPessoa(), $IdPessoa2);
        header("Location:painelDeControle.php");
         
         ?>
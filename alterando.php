<?php
        include './model/Pessoa.php';
        include './Dao/PessoaDao.php';
        
        $pD =new PessoaDao();
        session_start();
        $p=$_SESSION['pessoa'];
        
        $p->setNome($_POST["nome"]);
        $p->setSenha($_POST["senha"]);
        $p->setEmail($_POST["E-mail"]);
        $p->setProfissao($_POST["profissao"]);
        $p->setCidade($_POST["Cidade"]);
        $p->setTel($_POST["Telefone"]);
        
        $pD->alterar($p);
        
        $_SESSION['pessoa']=$p;
         header("Location:painelDeControle.php");
        
  ?>
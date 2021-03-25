<?php
        include './model/Pessoa.php';
        include './Dao/PessoaDao.php';
        $p=new Pessoa();
        $pD =new PessoaDao();
        
        if($pD->buscarPeloNome2($_POST["nome"])->getNome()==NULL){   
            
            $p->setNome($_POST["nome"]);
            $p->setSenha($_POST["senha"]);
            $p->setEmail($_POST["E-mail"]);
            $p->setProfissao($_POST["profissao"]);
            $p->setCidade($_POST["Cidade"]);
            $p->setTel($_POST["Telefone"]);
            $pD->inserir($p);
            $p->setIdPessoa($pD->buscarPeloNome2($p->getNome())->getIdPessoa());
            session_start();
            $_SESSION['pessoa']=$p;
            header("Location:painelDeControle.php");
        }
        else{
            echo "<h1>Nome já em uso!</h1>";
        }
        
  ?>
<html>
    <head>
        <title>NOrkut</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Config.css" type="text/css">
        
    </head>
    <body>
    </body>
</html>


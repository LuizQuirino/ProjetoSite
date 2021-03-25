<?php
        
        include './model/Pessoa.php';
        include './Dao/PessoaDao.php';
        $p=new Pessoa();
        $pD =new PessoaDao();
        
        
        if ($_POST["login"]!=null){
            $nome=$_POST["login"];
            $senha=$_POST["senha"];
            $p=$pD ->buscarPeloNome2($nome);
            
            if($p->getNome() ==null){
                echo "<h1>Nome inválido!</h1>";
                }
            else if($senha!=$p->getSenha()){
                echo "<h1>Senha invalida!</h1>";
            }
            else{
                session_start();
                $_SESSION['pessoa']=$p;
                header("Location:painelDeControle.php");
                
                
            }
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
    

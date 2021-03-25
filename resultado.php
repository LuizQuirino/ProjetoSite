<?php
        include './model/Pessoa.php';
        include './Dao/PessoaDao.php';
        $nome=$_POST["nome"];
        $pD =new PessoaDao();
        $vetor=$pD->buscarPeloNome($nome);
        
        
        
?>

<html>
    <head>
        <title>NOrkut</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Config.css" type="text/css">
        
    </head>
    <body>
        <?php
        session_start();
        $p=$_SESSION['pessoa'];
        echo "<table border='1'>";
        echo "<tr><td><h3>Nome</h3></td>";
        echo "<td><h3>E-mail</h3></td>";
        echo "<td><h3>Cidade</h3></td>";
        echo "<td><h3>Profissão</h3></td>";
        echo "<td><h3>Telefone</h3></td>";
        echo "<td><h3>Ação</h3></td></tr>";
            foreach($vetor as $v1){
                if($v1->getIdPessoa()!=$p->getIdPessoa()){
                echo "<tr><td><h3>".$v1->getNome()."</h3></td>";
                echo "<td><h3>".$v1->getEmail()."</h3></td>";
                echo "<td><h3>".$v1->getCidade()."</h3></td>";
                echo "<td><h3>".$v1->getProfissao()."</h3></td>";
                echo "<td><h3>".$v1->getTel()."</h3></td>";
                    
                    echo "<td><h3><a href='adicionando.php?Id=".$v1->getIdPessoa()."'>ADD</h3></td>";
            }
            }
        ?>
    </body>
</html>


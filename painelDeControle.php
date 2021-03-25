
<html>
    <head>
        <title>NOrkut</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Config.css" type="text/css">
     </head>

    <body>
        
        <table border="3" class="menu">
            <td style="width: 400px">
                <form method="post" action="resultado.php">
                    <input type="text" name="nome" required="required" placeholder="Pesquisar Amigos" size="30">
                    <input  type="image" src="Imagens/toolbar_find.png" alt="submit" width="17" height="17">
                </form>
                
            </td>
            <td style="width: 400px"><a href="alterar.php"> Alterar Dados</a>
            </td>
            <td style="width: 400px"><a href="excluindo.php"> Deletar Conta</a>
            </td>
            <td style="width: 400px"><a href="saindo.php"> Sair</a>
            </td>
        </table>
        <br>
        
        
        <?php
                include './Dao/PessoaDao.php';
                include './Dao/AmizadeDao.php';
                include './Dao/PostagensDao.php';
                session_start();
                $t=date("H");
                $p=$_SESSION['pessoa'];
                $nome=$p->getNome();
                if ($t<"12") {
                    echo "<h2>Bom Dia $nome!</h2>";
                } elseif ($t<"20") {
                    echo "<h2>Boa tarde $nome!</h2>";
                } else {
                    echo "<h2>Boa noite $nome!</h2>";
                }
        ?>
        
        <table border="1">
                <td style="width: 300px"  valign="top"> 
                    <h2>Dados:</h2>
                   <t> <?php
                    echo "<h4>Nome:".$p->getNome()."<br></h4>";
                    echo "<h4>E-mail:".$p->getEmail()."<br></h4>";
                    echo "<h4>Profissão:".$p->getProfissao()."<br></h4>";
                    echo "<h4>Cidade:".$p->getCidade()."<br></h4>";
                    echo "<h4>Telefone:".$p->getTel()."<br></h4>";
                    ?>
                </td>
                <td style="width:70%">
                    <form method="post" action="postando.php">
                        <input type="text" name="conteudo" placeholder="O que você está pensando?"><br>
                        <input type="submit" class="Button" value="Postar">
                    </form>
                    <hr>
                    <?php
                    $pD=new PessoaDao();
                    $aD =new AmizadeDAO();
                    $poD=new PostagensDao();
                    $vetor=$aD->buscarPorTodas($p);
                    foreach($vetor as $v1){
                        if($v1->getIdPessoa()== $p->getIdPessoa()){
                            $vetor2 =$poD->buscarPorPessoa($v1->getIdPessoa2());
                            foreach ($vetor2 as $v2){
                                echo "<h4>->".$pD->buscarPeloCodigo($v1->getIdPessoa2())->getNome()." diz:</h4>";
                                echo "<h4>".$v2->getConteudo()."</h4>"; 
                                
                            }
                        }
                        else{
                            $vetor3 =$poD->buscarPorPessoa($v1->getIdPessoa());
                            foreach ($vetor3 as $v3){
                                echo "<h4>->".$pD->buscarPeloCodigo($v1->getIdPessoa())->getNome()." diz:</h4>";
                                echo "<h4>".$v3->getConteudo()."</h4>";
                                
                            }
                        }
                        
                        
                    }
                    
                    ?>
                </td> 
                <td style="width:300px" valign="top">
                    <h2>Amigos:</h2>
                    <?php
                    $vetor=$aD->buscarPorTodas($p);
                    foreach($vetor as $v1){
                        if($v1->getIdPessoa()!= $p->getIdPessoa()){
                            echo "<h3>".$pD->buscarPeloCodigo($v1->getIdPessoa())->getNome()."</h3>";
                        }
                        else{
                            echo "<h3>".$pD->buscarPeloCodigo($v1->getIdPessoa2())->getNome()."</h3>";
                        }
                    }
                    
                    ?>
                </td>
            </table>
    </body>
</html>
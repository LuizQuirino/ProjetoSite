<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>NOrkut</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Config.css" type="text/css">
        
    </head>
    <body>
        <script>
            function validarNome(){
                
                if(document.getElementById("nome").value.length < 3){
                    alert("Nome muito curto!");
                    document.getElementById("nome").focus();
                }else{
                    document.getElementById("nome").style.backgroundColor="greenyellow";
                }
            } 
            function validarNome2(){
                
                if(document.getElementById("nome2").value.length < 3){
                    alert("Nome muito curto!");
                    document.getElementById("nome2").focus();
                }else{
                    document.getElementById("nome2").style.backgroundColor="greenyellow";
                }
            }    
            function validarSenha(){
                
                if(document.getElementById("senha").value.length < 3){
                    alert("Senha muito curta!");
                    document.getElementById("senha").focus();
                }else{
                    document.getElementById("senha").style.backgroundColor="greenyellow";
                }
            }
            function validarSenha2(){
                
                if(document.getElementById("senha2").value.length < 3){
                    alert("Senha muito curta!");
                    document.getElementById("senha2").focus();
                }else{
                    document.getElementById("senha2").style.backgroundColor="greenyellow";
                }
            }function validarSenha3(){
                
                if(document.getElementById("senha3").value != document.getElementById("senha2").value){
                    alert("Digite a mesma senha!");
                    elemento.style.backgroundColor="white";
                }else{
                    document.getElementById("senha3").style.backgroundColor="greenyellow";
                }
                
            }
            function validarEmail(elemento, conteudo){
                var cont=0;
                var cont2=0
                for(var i=0;i<conteudo.length;i++){
                    if(conteudo[i]=='@'){
                        cont++;
                    }
                    if(conteudo[i]=='.'){
                        cont2++;
                    }
                }
                if(cont>=1 && cont2 >=1){
                    elemento.style.backgroundColor="greenyellow";
                }else{
                    alert("Email inválido!");
                    elemento.style.backgroundColor="white";
                    elemento.focus();
                }
            }
            function validarEmail2(){
               if(document.getElementById("email2").value != document.getElementById("email").value){
                    alert("Digite o mesmo email!");
                    elemento.style.backgroundColor="white";
                    
                }else{
                    document.getElementById("email2").style.backgroundColor="greenyellow";
                }
                
            }
            function validarData(elemento,conteudo){
                
                if(conteudo.length==2 || conteudo.length==5){
                    document.getElementById("data").value +="/";
                }
               
            }
               
            
   
 
            </script>
            <form method="post" action="validar.php">
            <table>
                <td style="width: 800px"><h1>NOrkut</h1></td>
                    <td> 
                            
                            <table>
                            <td>Login:<br>
                                <input type="text" name="login" id="nome" onblur="validarNome();" onclick="alert('Tente Login=Matheus  Senha=123');"  required="required">
                            </td>
                            <td>Senha:<br>
                                <input type="password" name="senha" id="senha" onblur="validarSenha();" required="required">
                            </td>
                            <td>
                                <input class="Button" type="submit" value="Entrar">
                            </td>
                            
                            
                        </table>
                    </td>
            </table>
            </form>
            
            <form method="post" action="cadastro.php">
            <table>
                <td style="width: 800px"> 
                    
                    <h3>O Novo orkut feito para todos!</h3>
                    <img src="Imagens/pessoas.jpg">
                </td>
                <td class="table">
                <table >
                    <h2>Cadastre-se<h2>                     
                        <input type="text" name="nome" required="required" id='nome2' onblur="validarNome2();" placeholder="Nome"><br>
                        <input type="text" name="E-mail" required="required" id="email" onblur="validarEmail(this,this.value);" placeholder="E-mail"><br>
                        <input type="text" name="E-mail2" required="required" id="email2" onblur="validarEmail2();" placeholder="Insira o E-mail novamente"><br>
                        <input type="password" name="senha" required="required" id="senha2"  onblur="validarSenha2();" placeholder="Senha"><br>
                        <input type="password" name="senha2" required="required" id="senha3" onblur="validarSenha3();" placeholder="Insira a senha novamente"><br>
                        <input type="text" name="profissao"  id='profissao'  placeholder="Profissão"><br>
                        <input type="text" name="Cidade"  id="cidade"  placeholder="Cidade"><br>
                        <input type="text" name="Telefone"  id="telefone"  placeholder="Telefone"><br>
                        <br>
                        
                        <br>
                        <input class="Button" type="submit" value="Cadastrar">
                    
                </table>
                </td>    
            </table>
            </form>
        
        
        
    </body>
</html>

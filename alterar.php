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
                    document.getElementById("nome").style.backgroundColor="red";
                }else{
                    document.getElementById("nome").style.backgroundColor="greenyellow";
                }
            } 
                
            function validarSenha(){
                
                if(document.getElementById("senha").value.length < 3){
                    alert("Senha muito curta!");
                    document.getElementById("senha").focus();
                    document.getElementById("senha").style.backgroundColor="white";
                }else{
                    document.getElementById("senha").style.backgroundColor="greenyellow";
                }
            }
            function validarSenha2(){
                
                if(document.getElementById("senha").value != document.getElementById("senha2").value){
                    alert("Digite a mesma senha!");
                    
                    document.getElementById("senha2").style.backgroundColor="white";
                }else{
                    document.getElementById("senha2").style.backgroundColor="greenyellow";
                }
                
            }
            function validarEmail(elemento, conteudo){
                var cont=0;
                for(var i=0;i<conteudo.length;i++){
                    if(conteudo[i]=='@'){
                        cont++;
                    }
                    if(conteudo[i]=='.'){
                        cont++;
                    }
                }
                if(cont==2){
                    elemento.style.backgroundColor="greenyellow";
                }else{
                    alert("Email inválido!");
                    elemento.focus();
                    elemento.style.backgroundColor="white";
                }
            }
            function validarEmail2(){
               if(document.getElementById("email2").value != document.getElementById("email").value){
                    alert("Digite o mesmo email!");
                    
                    document.getElementById("email2").style.backgroundColor="white";
                }else{
                    document.getElementById("email2").style.backgroundColor="greenyellow";
                }
                
            }
            function validarDia(){
               if(parseInt(document.getElementById("dia").value)>31){
                    alert("Dia inválido!");
                    document.getElementById("dia").style.backgroundColor="white";
                }else{
                    document.getElementById("dia").style.backgroundColor="greenyellow";
                }
                
            }
            function validarMes(){
               if(parseInt(document.getElementById("mes").value)>12){
                    alert("Mês inválido!");
                    document.getElementById("mes").style.backgroundColor="white";
                }else{
                    document.getElementById("mes").style.backgroundColor="greenyellow";
                }
                
            }
            function validarAno(){
                
                if(document.getElementById("ano").value.length !=4){
                    alert("Ano inválido!");
                    document.getElementById("ano").focus();
                    document.getElementById("ano").style.backgroundColor="white";
                }else{
                    document.getElementById("ano").style.backgroundColor="greenyellow";
                }
            } 
            </script>
            <form method="post" action="alterando.php">
                <table class="tablealt" border="2" >
                    <td valign="middle">
                        <h2>Alterar Dados<h2>                     
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
                        <input class="Button" type="submit" value="Alterar">
                  </td>  
                </table>
            </form>
    </body>
</html>

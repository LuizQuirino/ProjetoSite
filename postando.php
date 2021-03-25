<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include './Dao/PessoaDao.php';
include './Dao/PostagensDao.php';
include './model/Pessoa.php';

session_start();
$p=$_SESSION['pessoa'];
$poD=new PostagensDao();
$poD->inserir($p->getIdPessoa(), $_POST['conteudo']);
header("Location:painelDeControle.php");
?>


<?php
require_once("../model/conexao.php");
require_once("../model/bancoContato.php");
include_once("../view/header.php");
 
extract($_REQUEST,EXTR_OVERWRITE);
 
 
if(alterarContato($conexao,$idContato,$nomeContato,$foneContato)){
echo("As informações do Contato foram Alteradas");
 
}else{
echo("Alerta!!! As informações do Contato Não foram Alteradas");
}
 
?>
<?php
include_once("../model/conexao.php");
include_once("../model/bancoContato.php");
 
extract($_REQUEST,EXTR_OVERWRITE);
 
buscarContatoNome($conexao,$nomeContato);
 
header("Location: ../view/buscar.php");
?>
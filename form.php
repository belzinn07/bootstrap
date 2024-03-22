<?php
include "conexao.php";
$nome=$_POST['nome'];
$endereco=$_POST['endereco'];
$telefone=$_POST['telefone'];
$data=$_POST['data'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$sql="INSERT INTO pessoa(nome,endereço,telefone,data,email,senha)"
?>
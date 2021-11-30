<?php
//include / include_once - traz comandos de outro arquivo, mas continua lendo em caso de erro
//require / require_once - traz comandos de outro arquivo e dá Fatal Error caso haja erro

include('conexao.php');

$aluno = "Antônio Lima";
$turma = "2002";
$mensal = 700.50;

$sql = "insert into tblaluno (aluno,turma,mensal) values ('$aluno','$turma','$mensal')";

//conexão->query(comando sql)
$con->query($sql);

var_dump($con);
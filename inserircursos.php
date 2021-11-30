<?php

include('conexao.php');

$curso = "Word";
$valor = "200";
$ch = 100;
$docente = "Juan";

$sql = "insert into tblcursos (curso,valor,ch,docente) values ('$curso','$valor','$ch','$docente')";

$con->query($sql);

var_dump($con);
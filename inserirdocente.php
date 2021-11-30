<?php

include('conexao.php');

$docente = "Ricardo Amorim";
$especialidade = "Excel";
$salhora = 100;
$disponibilidade = "tarde";

$sql = "insert into tbldocente (docente,especialidade,salhora,disponibilidade) values ('$docente','$especialidade','$salhora','$disponibilidade')";

$con->query($sql);

var_dump($con);
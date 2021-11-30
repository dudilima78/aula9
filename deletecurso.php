<?php

include('conexao.php');

$idcursos = 3;
$sql = "delete from tblcursos where idcursos=3";

$con->query($sql);

var_dump($con);
<?php

include('conexao.php');

$iddocente = 3;
$sql = "delete from tbldocente where iddocente=";

$con->query($sql);

var_dump($con);
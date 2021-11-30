<?php

include('conexao.php');

$idaluno = 8;
$sql = "delete from tblaluno where idaluno=8";

$con->query($sql);

var_dump($con);
<?php

include('conexao.php');

$sql = "select * from tblaluno";

$resultado = $con->query($sql);

    //listar os resultados achados

    while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){

       // var_dump($linha);

        echo "Nº de Registro: ". $linha['idaluno']."<br>";
        echo "Nome do Aluno: ". $linha['aluno']."<br>";
        echo "Turma: ". $linha['turma']."<br>";
        echo "Mensalidade: R$ {$linha['mensal']}<br>";

        echo "<button>Editar</button> | <button>Apagar</button>";
        echo "<hr>";
    }
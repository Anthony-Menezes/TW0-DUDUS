<?php

    $dbHost = 'LocalHost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'aluno_inscricao';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    //if($conexao->connect_errno)
    //{
    //    echo "ERRO";
    //}
    //else
    //{
    //   echo "POOURA";
    //}

?>
<?php
    require_once "config.php";
?>

<?php

    session_start();

    foreach($_POST as &$campo){

        $campo = str_replace('#','-',$campo);
    }


    $texto = implode('#',$_POST);


    $arquivo = fopen(PASTA_PRIVADA . "/arquivo.txt","a");

    fwrite($arquivo,$_SESSION['id'] . '#' . $texto . PHP_EOL);

    fclose($arquivo);

    header("Location: abrir_chamado.php");
    exit;

?>
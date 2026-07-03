<?php
    require_once "config.php";

?>

<?php

    session_start();

    
    foreach($_POST as &$campo){

        $campo = trim($campo);

        if($campo == ''){

            $_SESSION['campos_preenchidos'] = 'NAO';
            header("Location: abrir_chamado.php");
            exit;
        }

    }

    


    $texto = implode('#',$_POST);

    $arquivo = fopen(PASTA_PRIVADA . "/arquivo.txt","a");

    fwrite($arquivo,$_SESSION['id'] . '#' . $texto . PHP_EOL);

    fclose($arquivo);

    header("Location: chamado_registrado.php");
    exit;


    exit;

?>
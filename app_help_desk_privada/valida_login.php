<?php 

    session_start();

    $usuario_autenticado =  false;
    $usuario_id = null;
    $perfil_usuario = null;

    //    perfil 1 = adiministrador  ----- perfil 2 = usuario

    $usuarios_cadastrados = [

        ['id'=> 1, 'email' => 'adm@teste.com','senha' => '123','perfil'=> 1],
        ['id'=> 2, 'email' => 'maria@teste.com','senha' => '123','perfil'=> 2],
        ['id'=> 3, 'email' => 'jose@teste.com','senha' => '123','perfil'=> 2],
        ['id'=> 4, 'email' => 'ana@teste.com','senha' => '123','perfil'=> 2]
    ];

    foreach($usuarios_cadastrados as $user){

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){

            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $perfil_usuario = $user['perfil'];
        }
    }

    if($usuario_autenticado){

        echo 'usuario autenticado';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil'] = $perfil_usuario;
        header("Location: home.php");
    }else{
        $_SESSION['autenticado'] = 'NAO';
       header("Location: index.php?login=erro");
    }

    /*
    print_r($_POST);

    echo "<br />";

    echo $_POST["email"];
    echo "<br />";
    echo $_POST['senha'];
    */
?>
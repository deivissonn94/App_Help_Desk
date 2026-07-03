<?php

    require_once "validador_acesso.php";

    
?>

<html>
<head>
  <meta charset="utf-8" />
  <title>App Help Desk</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
    .card-login {
      padding: 30px 0 0 0;
      width: 350px;
      margin: 0 auto;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
      App Help Desk
    </a>
  </nav>

  <div class="container">
    <div class="row">

      <div class="card-login">
        <div class="card">
          <div class="card-header bg-success text-white">
            Chamado registrado
          </div>
          <div class="card-body">
            <div class="alert alert-success">
                <strong>Sucesso!</strong><br>
                 Seu chamado foi registrado com sucesso.
            </div>

            <a href="abrir_chamado.php" class="btn btn-primary btn-block">
                Abrir novo chamado
            </a>

            <a href="home.php" class="btn btn-secondary btn-block">
                Voltar ao início
            </a>
          </div>
        </div>
      </div>
    </div>
</body>

</html>
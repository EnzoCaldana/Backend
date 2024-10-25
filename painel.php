<?php

require_once ("login.php");

?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">
        <img src="mafia.webp" width="30" height="30" class="d-inline-block align-top" alt="">
        La Rosa Nera
      </a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <button onclick="location.href='entrar.php'" class="botao-sair" type="button"> SAIR </button>
      </li>
    </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Menu
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-6 d-flex justify-content-center">
                <a href="./abrir_chamado.php">
                  <img src="images.png" width="70" height="70">
                </a>
                </div>
                <div class="col-6 d-flex justify-content-center">
                <a href="./consultar_chamado.php">
                <img src="2046806.png" width="70" height="70">
                </a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>
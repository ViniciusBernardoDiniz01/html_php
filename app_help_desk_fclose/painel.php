<?php 
require_once("login.php");
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="bootstrap.css">
    </style>
  </head>

  <body>

    <nav class="navbar">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <b>App Help Desk</b>
      </a>
      <div class="botaosair"><a href="logoff.php"><button type = "button">sair</button></a></div>
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
                  <a href="abrir_chamado.php"><img src="formulario_abrir_chamado.png" width="70" height="70"></a>
                </div>
                <div class="col-6 d-flex justify-content-center">
                  <a href="consultar_chamado.php"><img src="formulario_consultar_chamado.png" width="70" height="70"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>
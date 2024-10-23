<?php require_once("login.php");?>

<?php 
// chama o arquivo e o le
$arquivo = fopen('registro.txt','r');
$chamados = [];

// usa um loop e usa o fgets para ler linha por linha ate a ultima
while(!feof($arquivo)){
  $registro = fgets($arquivo);
  // as informaçoes do  registro vão para a array
  $chamados [] = $registro;
}
// fecha o arquivo
fclose ($arquivo);
// mostra a array
// echo '<pre>';
// print_r ($chamados);
// echo '</pre>';
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
  
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
      <div class="botao-sair"><a href="logoff.php"><button>sair</button></a></div>
    </nav>
    

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">
              <?php 
              // quebra a linha das array apos a #
              foreach($chamados as $chamado){
                $chamados_dados = explode('#',$chamado);
                // deixa com que a linha que esta vazia não apareça nos cardes
                if(count($chamados_dados) < 3){
                  continue;
                }
              ?>
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <!-- coloca dentro das caixinhas titulo categoria e comentario os valores 
                  da array antes preenchida -->
                  <h5 class="card-title"><?php echo $chamados_dados[0];?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $chamados_dados[1];?></h6>
                  <p class="card-text"><?php echo $chamados_dados[2];?></p>
                </div>
              </div>
              <?php  }?>
              <div class="row mt-5">
                <div class="col-6">
                  <a href="painel.php" class="btn btn-lg btn-warning btn-block" type="submit">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
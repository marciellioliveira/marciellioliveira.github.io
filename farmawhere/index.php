<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FarmaWhere APP</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <?php header("Content-type: text/html; charset=utf-8"); ?>


  </head>
  <body onload="JavaScript:AjustarIFrame();" style="background-color: #DCDCDC	">

<div class="container-fluid" >
  <h1 style="text-align: center; background-color:blue; padding: 30px; color: white">FarmaWhere</h1>
  <hr>

  <br><br>
  <div class="row">
    <div class="col-md-6">

	<form class="form-horizontal" action="clientRest.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="nome">Nome:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Qual seu nome?">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="endereco">Endereço:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Qual seu endereço?">
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="telefone">Telefone:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Qual seu telefone?">
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="email" name="email" placeholder="Qual seu email?">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" value="submit" name="submit" class="btn btn-default">Cadastrar</button>
    </div>
  </div>
</form>

     
    </div>
  
     <div class="col-md-6" >
   
    <img src="imgs/logo.png" class="img-rounded" alt="Cinque Terre" width="200" height="200">
       
         <script language="JavaScript" type="text/javascript">
          window.onresize = AjustarIFrame;

          function AjustarIFrame()
          {
            //Identifica navegador
            var TamanhoTopo;
            TamanhoTopo = 113;

            if (navigator.appName.indexOf("Microsoft") != -1)
            {
              document.getElementById('meuiframe').height = document.documentElement.clientHeight - TamanhoTopo;
            }
            else
            {
              document.getElementById('meuiframe').height = window.innerHeight - TamanhoTopo;
            }
          }
        </script>

     
    </div>


  </div>

   <a href="https://marciellioliveira.github.io/"></a><p style="background-color: blue; color: white;text-align: center; padding: 10px;">Marcielli e Vinicius - TG</p>


</div>
    
    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>







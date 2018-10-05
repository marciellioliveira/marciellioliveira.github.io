<!DOCTYPE html>
<html lang="en">
<head>
  <title>Projeto Clareana</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS -->  
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  


  <!-- JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container-fluid">    
      <div class="row" >
      <div class="col-md-6 col-md-offset-3" >
        <div class="panel panel-login" id="caixa">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <a href="#" class="active" id="login-form-link">Entrar</a>
              </div>
              <div class="col-xs-6">
                <a href="#" id="register-form-link">Cadastrar</a>
              </div>
            </div>
            <hr>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                <form id="login-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" role="form" style="display: block;">
                 <!-- <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="nome de usuario" value="">
                  </div>-->
                  <div class="form-group">
                    <input type="email" name="email" id="emailLog" tabindex="1" class="form-control" placeholder="email" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="passwordLogin" tabindex="2" class="form-control" placeholder="senha">
                  </div>
                  <div class="form-group text-center">
                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                    <label for="remember" > Lembrar senha</label>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Entrar">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="text-center">
                          <a href="https://phpoll.com/recover" tabindex="5" class="forgot-password" >Esqueceu a senha?</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>

                <!-- Formulário de Cadastro -->
                <form id="register-form" action="cadastroAdm.php" method="post" name="f1" role="form" style="display: none;">
                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="nome de usuario" value="">
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" id="emailCad" name="email"  tabindex="1" class="form-control" placeholder="email" value="" data-type="email">
                  </div>
                  <div class="form-group">
                    <input type="password" name="senha1" id="passwordCad" tabindex="2" class="form-control" placeholder="senha" data-type="password">
                  </div>
                  <div class="form-group">
                    <input type="password" name="senha2" id="confirm-password" tabindex="2" class="form-control" placeholder="confirmar senha" data-type="password">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="btCadAdm" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Cadastrar">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

     <?php
        require_once 'footer.php';
     ?>  


  <script type="text/javascript" src="js/formCadLog.js"></script>
</body>
</html>

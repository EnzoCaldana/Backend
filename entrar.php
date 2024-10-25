<html lang="PT-BR">

 
  </html>
  <head>
    <meta charset="utf-8" />
    <title>La Rosa Nera</title>

    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">
        <img src="mafia.webp" width="50" height="50" class="d-inline-block align-top" alt="">
        La Rosa Nera
      </a> 
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="valida_login.php" method="post">
                <div class="form-group">
                  <input name= 'email' type="email" class="form-control" placeholder="E-mail" require>
                </div>
                <div class="form-group">
                  <input name='senha' type="password" class="form-control" placeholder="Senha" require>
                </div>

                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro'){?>

                <div class="text-danger">
                  Usuário ou senha inválido(s)
                </div>

                <?php } ?>
                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro2'){?>

                <div class="text-danger">
                  Faça login antes de acessar as páginas
                </div>

                <?php } ?>
               
                <button class="entrar" type="submit">Entrar</button>
                <button class="new" type="submit">Fazer conta nova</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>
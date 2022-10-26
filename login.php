<?php
include('conexao.php');

if(isset($_POST['cpf']) || isset($_POST['senha'])) {

    if(strlen($_POST['cpf']) == 0) {
        echo "Preencha seu CPF";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $cpf = $mysqli->real_escape_string($_POST['cpf']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM funcionario WHERE cpf = '$cpf' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['idfuncionario'] = $usuario['idfuncionario'];
            $_SESSION['nome_funcionario'] = $usuario['nome_funcionario'];

            header("Location: painel.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Menu</title>
    <style>
        body{
            background-image: radial-gradient(circle, #5c0067 0%, #00d4ff 100%);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed
        }  
</style>
</head>
<body>
</head>
<body >
    <div>
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="menu.php">Menu Principal</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cadastrar.php">Cadastro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="lista.php">Lista</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <div class="container">
      <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-200">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 6rem;">
                <div class="card-body p-5 text-center">
      
                  <div class="mb-md-3 mt-md-3 pb-3">
      
                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                    <br>                    
      
                    <form action="" method="POST" class="form-outline form-white mb-4">
                      <label class="form-label" for="Usuario"></label>
                      <input name="cpf" type="number" id="usuario" class="form-control form-control-lg " placeholder="CPF" />  
                                       
                        <br>

                      <label class="form-label" for="typePasswordX"></label>
                      <input name="senha" type="password" id="pass" class="form-control form-control-lg" placeholder="Senha" />
                      <br><br>
                      <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                      <br><br>
                    <p class="mb-0">Não tem uma conta? <a href="cadastrar.php" class="text-white-50 fw-bold">Cadastre-se</a>
                    </p>

                    </form>
                    <div>
                      
                    </div>
                                            
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
   </body>   
</html>
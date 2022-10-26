<?php

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
            background-attachment: fixed;
        }
          
    </style>

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
    <br><br>
    <div style="margin: 00px 0px 00px 400px;" class="container">
      <form action="cadastro.php" method="POST">

        <div class="form-row ">
          <div class="form-group col-md-6">
            <label for="inputPassword4">Nome</label>
            <input name='nome_funcionario' type="text" class="form-control" id="inputPassword4" placeholder="Seu nome">
          </div>
          <div class="form-group col-md-6">
            <label for="number">CPF</label>
            <input name="cpf" type="text" class="form-control" id="number " placeholder="CPF">
          </div>
           <div class="form-group col-md-6">
           
            <label for="id_cargo">Selecione o Cargo:</label>
            <select class="form-select" name="id_cargo" id="id_cargo">
              <option value="1">Vendedor</option>
              <option value="2">Recepcionista</option>
              <option value="3">Auxiliar Administrativo</option>
              <option value="4">Assistente Administrativo</option>
              <option value="5">Auxiliar Logístico</option>
            </select>
          </div>
          <div class="form-group col-md-6 ">
            <label for="inputEmail4">Salario </label>
            <input name="salario" type="number" class="form-control" id="inputEmail4" placeholder="Salario">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Senha</label>
            <input name="senha" type="password" class="form-control" id="inputPassword4" placeholder="Senha">
          </div>
          <br>
          <button class="btn btn-outline-dark text-white btn-lg px-5" type="submit">Cadastrar</button><br>
          <br>
         
        
      </form>
    </div>
   </body>
</html>
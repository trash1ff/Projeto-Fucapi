<?php

include('conexao.php');

$consulta = "SELECT * FROM funcionario";
$con = $mysqli->query($consulta) or die($mysqli->error);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="lista.js"></script>
    <title>Menu</title>
    <style>
      
        body{
            background-image: radial-gradient(circle, #5c0067 0%, #00d4ff 100%);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed
        }
        header{
    background-color: blueviolet;
    padding: 2px;
    color: aliceblue;
    text-align: center;
    border-radius: 6px;
}

      table{ 
        text-align: center;
              
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
    </div >

      <div style="margin: auto; width:50%; margin-top:80px">
        <table class='table table-hover table-dark border border-white'; style='border-radius:6rem'; >
        <tr>
          <td>ID</td>
          <td>Nome</td>
          <td>CPF</td>
          
          
        </tr>
        <?php while($dado = $con->fetch_array()){ ?>
        <tr>
          <td><?php echo $dado["idfuncionario"]; ?></td>
          <td><?php echo $dado["nome_funcionario"]; ?></td>
          <td><?php echo $dado["cpf"]; ?></td>
        </tr>
        <?php } ?>
       </table>
    </div>
   </body>
   
   
</html>